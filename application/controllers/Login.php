<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index(){
		 
		$var =$this->db->where('email',1223)
						->get('usuarios')->result_array();
		var_dump($var[0]['senha']);
	$this->load->view('home');
	
	}
    function verifica(){
		/* $dados=$this->input->post(); 
		var_dump($dados); */
		$nome = $this->input->post('nome');
		//echo $nome;
		$email = $this->input->post('email');
		//echo $email;
		$senha = $this->input->post('senha');
		//echo $senha;
		$user=array(
			'nome'=>$nome,
			'email'=>$email,
			'senha'=>$senha,
		);
		$this->load->model('User_model');
		$this->User_model->adduser($user);
	}
	
}
