<?php 

class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }


    public function index() {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email',[
            'valid_email' => 'Check Your Email, email Not Valid',
            'required'    => 'Please insert your email!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]',[
            'required'    => 'Please insert your password!',
            'min_length'  => 'password to short!'
        ]);
            if($this->form_validation->run() == false) {
                $this->load->view('Auth/index');
            }else {
                // membuat private method untuk handle login
                    $this->_login();
        }  
      }

      private function _login()
      {
          $email = $this->input->post('email');
          $password = $this->input->post('password');
  
          $user = $this->db->get_where('user', ['email' => $email ])->row_array();
  
          if($user){
              // user sudah mendaftar
              if($user['is_active'] == 1){
                  // user sudah aktif
                  if(password_verify($password, $user['password'])){
                      // password sudah verifikasi
                      $data = [
                          'email'   => $user['email'],
                          'role_id' => $user['role_id']
                      ];
                      $this->session->set_userdata($data);
                      // jika admin masuk ke dasboard admin
                      if($user['role_id']==1) {
                          redirect('Admin');
                      }else{
                          redirect('Product');
                      }
  
                  }else{
                          // belom verify
                          $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          Wrong Password!
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button></div>');
                          redirect('Auth');
          
                  }
              }else {
                  // user belom aktif
                  $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  This Email has Not Been Actived! 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                  redirect('Auth');
  
      
              }
          }else {
              // jika tidak lolos
              $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Email Not Registred! 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
              redirect('Auth');
          }
  
  
      }


    public function subscribe() {
        $this->form_validation->set_rules('name', 'Name', 'required|trim',[
            'required'    => 'Please insert your name!'
        ]);
        $this->form_validation->set_rules('handphone', 'Handpone', 'required|trim',[
            'required'    => 'Please insert your No Handphone!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email',[
            'valid_email' => 'Check Your Email, email Not Valid',
            'required'    => 'Please insert your email!'
        ]);
        
        if ($this->form_validation->run() == false ) {

            $this->load->view('auth/subscribe');
        }else {
            $data = [
                'name'          =>htmlspecialchars( $this->input->post('name',true)),
                'email'         =>htmlspecialchars($this->input->post('email',true)) ,
                'password'      => "1",
                // password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'is_active'     => 0,
                'date_created'  => time(),
                'handphone'     =>htmlspecialchars($this->input->post('handphone',true)) ,
                'role_id'     => 2,


            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Terima kasih telah subscribe! 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('Product');

        }


    }

    public function logout() 
	{
		$this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        You have been logout!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('auth');

	}
}