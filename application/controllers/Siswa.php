<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		logged_in();
		$this->load->model('m_user');
	}
    public function index()
	{
		$data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['title']= 'Sekolah X';
		$this->load->view('templates/menuheader', $data);
		$this->load->view('templates/menusidebar', $data);
		$this->load->view('siswa/index', $data);
		$this->load->view('templates/menufooter');
	}
	public function input_data()
	{
		$name= $this->input->post('name');
		$date= $this->input->post('date');
		$asal= $this->input->post('asal');
		$id_user= $this->session->userdata('id_user');

		$photo= $_FILES['photo'];
		$path= 'upload';
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'png|jpg|jpeg|heic';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo')) {
			$error = array('error' => $this->upload->display_errors());
		}else {
			$data = array('upload_data' => $this->upload->data());
		}
		if (!$this->upload->data('file_name')) {
			$photo = 'Tidak Ada File';
		}else{
			$photo = $this->upload->data('file_name');
		}

		$file= $_FILES['file'];
		$path= 'upload';
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'pdf';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			$error = array('error' => $this->upload->display_errors());
		}else {
			$data = array('upload_data' => $this->upload->data());
		}
		if (!$this->upload->data('file_name')) {
			$file = 'Tidak Ada File';
		}else{
			$file = $this->upload->data('file_name');
		}

		$data= array(
			'name'=> $name,
			'photo'=> $photo,
			'file'=> $file,
			'date'=> $date,
			'asal'=> $asal,
			'id_user'=> $id_user
		);
		$this->db->insert('siswa', $data);
		redirect('siswa');
	}

}