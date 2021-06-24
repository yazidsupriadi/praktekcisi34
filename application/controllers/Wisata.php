<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

	//check user sudah login atau belum
	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
    
    public function wisata(){
        //ambil data join
        $this->load->model('wisata_model');
        $data['join_wisata_kuliner'] = $this->wisata_model->joinwisatakuliner(); 
        $this->load->view('wisata/index',$data);
     } 

     public function tambah(){
        //ambil data joinya terlebih dahulu 
        $this->load->model('wisata_model');
        $data['join_wisata_kuliner'] = $this->wisata_model->jenis_kuliner();
        $this->load->view('wisata/tambah',$data);
     } 

     public function save(){
            
     	//panggil model
		$this->load->model('wisata_model');
		
		//tambah data
		$data['nama_wisata'] = $this->input->post('nama');
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['jenis_kuliner_id'] = $this->input->post('jenis_kuliner_id');
		

		//method save data
		$this->wisata_model->save($data);

		//redirect	
		return redirect('wisata/wisata');


     }

}
