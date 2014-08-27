<?php
class Blog extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blogmodel');
		
	}

	public function index(){
		$this->to_list();	
	}

	public function to_list(){
		$entry = $this->Blogmodel-> get_last_ten_entries();
		$this->load->view('entries',array('entries' => $entry));
		
	}

	public function by_id($id){
		$entry2= $this->Blogmodel-> get_by_id($id);
		$this->load->view('entry',array('singleentry' => $entry2));
	}
	
	public function insert(){
		$list = $this->Blogmodel-> insert_entry();
		header("Location: /~17698677/swisstool/index.php/Blog");
	}
	
	public function update(){
		$list = $this->Blogmodel-> update_entry();
		$this->to_list();
	}

	public function load_insert(){
		$this->load->view('insert');
	}
	
	public function load_update($id){
		$entry= $this->Blogmodel-> get_by_id($id);
		$this->load->view('update',array( 'id' => $entry->id, 'title' => $entry->title, 'content' => $entry->content, ));
	}


}
