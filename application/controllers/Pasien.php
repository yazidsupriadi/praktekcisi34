<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	//check user sudah login atau belum
	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
	public function index()
	{	
		$this->load->model('pasien_model');
		$data['pasien'] = $this->pasien_model->getAllData();
		$this->load->view('pasien/index',$data);
	}

	public function delete($id){
		//delete * from pasien where id = id
		$this->load->model('pasien_model');//load model
		$where = array('id' => $id);
		$this->pasien_model->delete(array('id'=>$id),'pasien');// query delete(delete from pasien where id = $id)
		redirect('pasien/index');


	}

	public function save(){
		
		$this->load->view('pasien/tambah_pasien');
	}
	
	public function tambah(){
		
		//panggil model
		$this->load->model('pasien_model');
		
		//tambah data
		$data['kode'] = $this->input->post('kode');
		$data['nama'] = $this->input->post('nama');
		$data['gender'] = $this->input->post('gender');
		$data['tmp_lahir'] = $this->input->post('tmp_lahir');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['email'] = $this->input->post('email');
		$data['foto'] = $this->pasien_model->upload_foto();

		//method save data
		$this->pasien_model->save($data);

		//redirect	
		return redirect('pasien/index');


	}
	public function profile($id){
		$this->load->model('pasien_model');
		$data['pasien'] = $this->pasien_model->findById($id);
		$this->load->view('pasien/profile',$data);
	}

	public function edit($id){
		$this->load->model('pasien_model');
		$data['pasien'] = $this->pasien_model->findById($id);
		$this->load->view('pasien/edit',$data);
	}

	public function update(){
		//panggil model
		$this->load->model('pasien_model');
		

		//inputan id
		$id = $this->input->post('id');
		
		//tambah data
		$data['kode'] = $this->input->post('kode');
		$data['nama'] = $this->input->post('nama');
		$data['gender'] = $this->input->post('gender');
		$data['tmp_lahir'] = $this->input->post('tmp_lahir');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['email'] = $this->input->post('email');

		$data['foto'] = $this->pasien_model->upload_foto();

		//method update data
		$this->pasien_model->update($data,$id);

		//redirect	
		return redirect('pasien/index');


	}
	

}
