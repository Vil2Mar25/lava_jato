<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('modelo_model');
        $this->load->model('marca_model');
	}
    
	public function index()
	{
        $data['modelos'] = $this->modelo_model->ver_modelos();
        $data['marcas'] = $this->marca_model->ver_marcas();

		$this->load->view('sistema/header');
		$this->load->view('sistema/cadastro/modelo',$data);
		$this->load->view('sistema/footer');
	}

	public function adicionar_modelo(){
        $dados = [
			'nome_modelo'=>$this->input->post('nome_modelo'),
       		'marca_modelo'=>$this->input->post('marca_modelo')
		];

        $this->modelo_model->adicionar_modelo($dados);
        redirect('modelo');
    }

	public function editar_modelo(){
		$id = $this->uri->segment(3);
		$data['modelo'] = $this->modelo_model->editar_modelo($id);
        $data['marcas'] = $this->marca_model->ver_marcas();
		$this->load->view('sistema/header');
		$this->load->view('sistema/cadastro/edita_modelo',$data);
		$this->load->view('sistema/footer');
	}

	public function atualizar_modelo(){
		$id = $this->input->post('id_modelo');
        $dados = [
            'nome_modelo' => $this->input->post('nome_modelo'),
            'marca_modelo' => $this->input->post('marca_modelo')
        ];

        $this->modelo_model->atualizar_modelo($dados,$id);
		redirect('modelo');
	}

	public function deletar_modelo(){
        $id = $this->uri->segment(3);
		$this->modelo_model->delete_1($id);
        redirect('modelo');
    }
}