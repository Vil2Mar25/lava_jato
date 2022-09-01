<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->library('curl');
		$this->load->model('cliente_model');
	}
    
	public function index()
	{
		$data['clientes'] = $this->cliente_model->ver_clientes();
		$this->load->view('sistema/header');
		$this->load->view('sistema/cadastro/cliente',$data);
		$this->load->view('sistema/footer');
	}

	public function consulta(){
		$cep = $this->input->post('cep');

		echo $this->curl->consulta($cep);
	}

	public function cadastrar_cliente(){
		$dados = [
			'nome_cliente' => $this->input->post('nome_cliente'),
			'telefone_cliente' => $this->input->post('telefone_cliente'),
			'cpf_cliente' => $this->input->post('cpf_cliente'),
			'email_cliente' => $this->input->post('email_cliente'),
			'cep_cliente' => $this->input->post('cep_cliente'),
			'logradouro_cliente' => $this->input->post('logradouro_cliente'),
			'numero_cliente' => $this->input->post('numero_cliente'),
			'complemento_cliente' => $this->input->post('complemento_cliente'),
			'bairro_cliente' => $this->input->post('bairro_cliente'),
			'cidade_cliente' => $this->input->post('cidade_cliente'),
			'estado_cliente' => $this->input->post('estado_cliente')
		];

		$this->cliente_model->adicionar_cliente($dados);
		redirect('cliente');
	}

	public function editar_cliente(){
		$id = $this->uri->segment(3);
		$data['cliente'] = $this->cliente_model->editar_cliente($id);
		$this->load->view('sistema/header');
		$this->load->view('sistema/cadastro/edita_cliente',$data);
		$this->load->view('sistema/footer');
	}

	public function atualizar_cliente(){
		$id = $this->input->post('id_cliente');
		$dados = [
			'nome_cliente' => $this->input->post('nome_cliente'),
			'telefone_cliente' => $this->input->post('telefone_cliente'),
			'cpf_cliente' => $this->input->post('cpf_cliente'),
			'email_cliente' => $this->input->post('email_cliente'),
			'cep_cliente' => $this->input->post('cep_cliente'),
			'logradouro_cliente' => $this->input->post('logradouro_cliente'),
			'numero_cliente' => $this->input->post('numero_cliente'),
			'complemento_cliente' => $this->input->post('complemento_cliente'),
			'bairro_cliente' => $this->input->post('bairro_cliente'),
			'cidade_cliente' => $this->input->post('cidade_cliente'),
			'estado_cliente' => $this->input->post('estado_cliente')
		];

		$this->cliente_model->atualizar_cliente($dados,$id);
		redirect('cliente');
	}

	public function deletar_cliente(){
        $id = $this->uri->segment(3);
		$this->cliente_model->delete_1($id);
        redirect('cliente');
    }
}