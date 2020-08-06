<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('book_m', 'm');
		$this->load->library('pagination');
		 $this->load->helper('form');
		 $this->load->library('form_validation'); 
		$this->load->helper('url');
	}

	function index(){
	   $this->load->model('Book_m');
	   $config = array();
       $config["base_url"] = base_url() . "book/index";
       $config["total_rows"] = $this-> Book_m->record_count();
       $config["per_page"] = 4;
       $config["uri_segment"] = 3;
       $config['full_tag_open'] = "<ul class='pagination'>";
       $config['full_tag_close'] = '</ul>';
       $config['num_tag_open'] = '<li>';
       $config['num_tag_close'] = '</li>';
       $config['cur_tag_open'] = '<li class="active"><a href="#">';
       $config['cur_tag_close'] = '</a></li>';
       $config['prev_tag_open'] = '<li>';
       $config['prev_tag_close'] = '</li>';
       $config['first_tag_open'] = '<li>';
       $config['first_tag_close'] = '</li>';
       $config['last_tag_open'] = '<li>';
       $config['last_tag_close'] = '</li>';
       $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Prev';
       $config['prev_tag_open'] = '<li>';
       $config['prev_tag_close'] = '</li>';
       $config['next_link'] = 'Next<i class="fa fa-long-arrow-right"></i>';
       $config['next_tag_open'] = '<li>';
       $config['next_tag_close'] = '</li>';

       $this->pagination->initialize($config);
       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
       $data["books"] = $this-> Book_m -> getBook($config["per_page"], $page);
       $data["links"] = $this->pagination->create_links();

		$this->load->view('layout/header');
		$this->load->view('book/index', $data);
		
		$this->load->view('layout/footer');
	}

	public function add(){
		$this->load->view('layout/header');

		$this->load->view('book/add');
		
	
		$this->load->view('layout/footer');
	}

	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to add record');
		}
		redirect(base_url('book/index'));
	}

	public function edit($id){
		$data['books'] = $this->m->getBookById($id);
		$this->load->view('layout/header');
		$this->load->view('book/edit', $data);
		$this->load->view('layout/footer');
	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record updated successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to update record');
		}
		redirect(base_url('book/index'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('book/index'));
	}

}