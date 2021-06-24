<?php

class Wisata_model extends CI_Model{

    public $id;
    public $nama;
    public $kode;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;

    public function wisataData(){
    // menampilkan data wisata   
       
        $this->db->select('*');
        $this->db->from('wisata');	
        $query = $this->db->get();
        return $query;
    }

    public function jenis_kuliner(){

        //menampilkan data  kuliner
        //select * from jenis_kuliner
        $this->db->select('*');
        $this->db->from('jenis_kuliner');
             $query = $this->db->get();
        return $query;
     }

     /*
    public function jenis_wisata(){

        //menampilkan data  kuliner
        $this->db->select('*');
        $this->db->from('jenis_wisata');
             $query = $this->db->get();
        return $query;
     }*/

     public function joinwisatakuliner(){
         //menampilkan join data wisata dan kuliner
        //select * from wisata join jenis_kuliner where wisata.jenis_kuliner_id = jenis_kuliner.id;
        $this->db->select('*');
        $this->db->from('wisata');
        $this->db->join('jenis_kuliner','wisata.jenis_kuliner_id = jenis_kuliner.id_kuliner');		
        $query = $this->db->get();
        return $query;
     }

     
     public function save($data){

        //this->db->insert('nama_tabel',data)

        return $this->db->insert('wisata',$data);
    }





}

?>