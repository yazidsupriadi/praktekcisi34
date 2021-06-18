<?php

class Kuliner_model extends CI_Model{

    public $id;
    public $nama;

    public function getAllData(){

        //select * from pasien
        // $this->db->get('nama_tabel');
       $query = $this->db->get('jenis_kuliner');
       return $query;
    }

    public function findById($id){
        //select * from pasien where id = id;
        //$this->db->get_where('nama_tabel',array(id));
       $query = $this->db->get_where('jenis_kuliner',['id'=>$id]);
       return $query->row();
    }
 
    public function update($data,$id){
       
        //$this->db->update('nama_tabel',data,array_id)

        $this->db->update('jenis_kuliner',$data,array('id'=>$id));
    }

    public function delete($where,$table){
        // delete * from pasien where id = 1
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function save($data){

        //this->db->insert('nama_tabel',data)

        return $this->db->insert('jenis_kuliner',$data);
    }


    public function upload_foto(){
        //fungsi buat upload foto
		$config['upload_path']         = 'backend/img';  // folder upload tujuan 
		$config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
		$config['max_size']             = 10000; //maksimal ukuran file
		$config['max_width']            = 1024; //maksimal lebar gambar
		$config['max_height']           = 768;// maksimal tinggi gambar

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) { //parameter foto diambil dari nama column database
            return $this->upload->data("file_name");
        }
        
        return "backend/img/default.png";
    }


}

?>