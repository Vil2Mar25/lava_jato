<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atendimento extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('atendimento_model');
		$this->load->model('marca_model');
		$this->load->model('modelo_model');
		$this->load->model('cliente_model');
		$this->load->model('servico_model');
	}
    
	public function agendar()
	{
		$data['clientes'] = $this->cliente_model->ver_clientes();
		$data['marcas'] = $this->marca_model->ver_marcas();
		$data['modelos'] = $this->modelo_model->ver_modelos();
		$data['servicos'] = $this->servico_model->ver_servicos();
		$data['agendamentos'] = $this->atendimento_model->ver_atendimentos();


		$this->load->view('sistema/header');
		$this->load->view('sistema/atendimentos/atendimento_aberto',$data);
		$this->load->view('sistema/footer');
	}

	public function cadastrar_atendimento(){
		$dados = [
			'cliente_atendimento' => $this->input->post('cliente_consulta'),
			'veiculo_modelo' => $this->input->post('veiculo_modelo'),
			'placa_veiculo' => $this->input->post('placa_veiculo'),
			'servicos_atendimento' => $this->input->post('servicos_atendimento')
		];

		$this->atendimento_model->adicionar_atendimento($dados);
		redirect('atendimento/agendar');
	}

	public function consulta(){
		$name = $_POST['cliente'];

		$data = $this->cliente_model->consultar_clientes($name);
		echo json_encode($data);
	}

	public function visualizar_atendimento(){
		$data['clientes'] = $this->cliente_model->ver_clientes();
		$data['marcas'] = $this->marca_model->ver_marcas();
		$data['modelos'] = $this->modelo_model->ver_modelos();

		$id = $this->uri->segment(3);
		$data['consultas'] = $this->atendimento_model->ver_ex_atendimentos($id);

		$this->load->view('sistema/header');
		$this->load->view('sistema/atendimentos/visualizar_atendimento',$data);
		$this->load->view('sistema/footer');
	}

	public function atualizar_atendimento(){
		$id = $this->input->post('id_atendimento');

		$dados = [
			'data_finalizacao_atendimento' => date('Y-m_d H:i:s'),
            'status_atendimento' => 'fechado'
        ];
	
        $this->atendimento_model->atualizar_atendimento($dados,$id);
		redirect('atendimento/agendar');
	}

}
