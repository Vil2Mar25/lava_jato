<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('dash_model');
	}
    
	public function index()
	{
		$this->load->view('sistema/header');
		$this->load->view('sistema/index');
		$this->load->view('sistema/footer');
	}

    public function dashboard()
	{
		$data['clientes'] = $this->dash_model->ver_clientes();
		$data['servicos'] = $this->dash_model->ver_servicos();
		$data['marcas'] = $this->dash_model->ver_marcas();
		$data['modelos'] = $this->dash_model->ver_modelos();

		$this->load->view('sistema/header');
		$this->load->view('sistema/dashboard',$data);
		$this->load->view('sistema/footer');
	}
}