<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

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
	

}
