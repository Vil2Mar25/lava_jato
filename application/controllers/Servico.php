<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servico extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('servico_model');
	}
    
	public function index()
	{
        $data['servicos'] = $this->servico_model->ver_servicos();

		$this->load->view('sistema/header');
		$this->load->view('sistema/cadastro/servico',$data);
		$this->load->view('sistema/footer');
	}

	public function adicionar_servico(){
		$dados = [
			'nome_servico' => $this->input->post('nome_servico'),
			'valor_servico' => $this->input->post('valor_servico'),
			'descricao_servico' => $this->input->post('descricao_servico')
		];
		$this->servico_model->adicionar_servico($dados);
        redirect('servico');
	}

	public function editar_servico(){
		$id = $this->uri->segment(3);
		$data['servicos'] = $this->servico_model->editar_servico($id);
		$this->load->view('sistema/header');
		$this->load->view('sistema/cadastro/edita_servico',$data);
		$this->load->view('sistema/footer');
	}

	public function atualizar_servico(){
		$id = $this->input->post('id_servico');
        $dados = [
            'nome_servico' => $this->input->post('nome_servico'),
            'valor_servico' => $this->input->post('valor_servico'),
        ];

        $this->servico_model->atualizar_servico($dados,$id);
		redirect('servico');
	}

	public function deletar_servico(){
        $id = $this->uri->segment(3);
		$this->servico_model->delete_1($id);
        redirect('servico');
    }

}