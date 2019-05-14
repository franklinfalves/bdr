<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
    {
          parent::__construct();
          $this->load->model("task_model");
    }
	
  	public function read(){
       $data = array(
			'wData'=> $this->task_model->read()
		);

       $this->load->view('list', $data);
    }

    public function post(){
    	$data = array(
    	   'title' 		 => $this->input->post('title'),
           'description' => $this->input->post('description'),
           'priority' 	 => $this->input->post('priority')
         );
    	$this->task_model->insert($data);
    	$this->read();
   	}

   	public function update(){
        $id = $this->uri->segment(3);

        $data = array(
    	   'title' 		 => $this->input->post('title'),
           'description' => $this->input->post('description'),
           'priority' 	 => $this->input->post('priority')
        );

        $this->task_model->update($id,$data);
        $this->read();           
    }

    public function delete(){
       $id = $this->uri->segment(3);
       $this->task_model->delete($id);
       $this->read();
    }

    public function get($id){
       $data = array(
			'wData'=> $this->task_model->read($id)
		);
       $this->load->view('update', $data);
    }

    public function cad(){
    	$this->load->view('post');	
    }
}
