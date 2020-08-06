<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Book_m extends CI_Model{
	   public function __construct() {
       parent::__construct();
   }

      public function record_count() {
       return $this->db->count_all("book_info");
   }

	public function getBook($limit, $start){

		$this->db->limit($limit, $start);
		$query = $this->db->get('book_info');


		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function submit(){
		$field = array(
			'name'=>$this->input->post('txt_name'),
			'intro'=>$this->input->post('txt_intro'),
			'selling_price'=>$this->input->post('txt_selling'),
			'cover'=>$this->input->post('userfile'),
			);
		$this->db->insert('book_info', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getBookById($id){
		$this->db->where('id', $id);
		$query = $this->db->get('book_info');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'name'=>$this->input->post('txt_name'),
			'intro'=>$this->input->post('txt_intro'),
			'selling_price'=>$this->input->post('txt_selling'),
			'cover'=>$this->input->post('userfile'),
			);
		$this->db->where('id', $id);
		$this->db->update('book_info', $field);
		echo $this->db->last_query();extit;
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('book_info');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

}