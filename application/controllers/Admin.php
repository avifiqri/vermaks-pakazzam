<?php

class Admin extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }

    public function index() {
        $data['vermaks'] = $this->model_vermaks->tampil()->result();

        $this->load->view('admin/index',$data);
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_vermaks->hapus_barang($where,'vermaks');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Telah dihapus! 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('admin');
    }

    public function create() {

        $this->form_validation->set_rules('name', 'Name', 'required|trim',[
            'required'    => 'Please insert your Name!'
        ]);
        $this->form_validation->set_rules('jenis_vermak', 'Jenis Vermak', 'required|trim',[
            'required'    => 'Please insert your Jenis Vermak!'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required|trim',[
            'required'    => 'Please insert your Status!'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim',[
            'required'    => 'Please insert your Harga!'
        ]);
        if ($this->form_validation->run() == false ) {
            $this->load->view('admin/create.php');
        }else {

            $gambar             = $_FILES['gambar']['name'];
            if ($gambar = ''){} else
            {
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
    
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('gambar'))
                {
                    echo "Gambar gagal di upload";
                }else 
                {
                    $gambar = $this->upload->data('file_name');
    
                }
            }

            $data = [
                'name'            =>htmlspecialchars( $this->input->post('name',true)),
                'jenis_vermak'    =>htmlspecialchars( $this->input->post('jenis_vermak',true)),
                'harga'           =>htmlspecialchars( $this->input->post('harga',true)),
                'status'          =>htmlspecialchars( $this->input->post('status',true)),
                'gambar'          => $gambar,
                'created_at'      => time(),
                

            ];
            $this->db->insert('vermaks', $data);
        redirect('admin');
        }
    }

    public function edit($id) {
        $where = array('id' =>$id);
        $data['vermaks'] = $this->model_vermaks->update_data($where, 'vermaks')->result();
        $this->load->view('admin/update',$data);

    }
    public function update()
    {
        $id               = $this->input->post('id');
        $name             = $this->input->post('name');
        $jenis_vermak     = $this->input->post('jenis_vermak');
        $harga            = $this->input->post('harga');
        $status           = $this->input->post('status');

        $data = array(
            'name'          => $name,
            'jenis_vermak'  => $jenis_vermak,
            'harga'         => $harga,
            'status'        => $status,

        );

        $where = array(
            'id' => $id
        );

        $this->model_vermaks->update_product($where, $data, 'vermaks');
        redirect('admin');
    }

}