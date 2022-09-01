<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marca extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('marca_model');
	}
    
	public function index()
	{
        $data['marcas'] = $this->marca_model->ver_marcas();

		$this->load->view('sistema/header');
		$this->load->view('sistema/cadastro/marca',$data);
		$this->load->view('sistema/footer');
	}

    public function adicionar_marca(){
        $dados = ['nome_marca'=>$this->input->post('nome_marca')];
        $this->marca_model->adicionar_marca($dados);
        redirect('marca');
    }

    public function editar_marca(){
		$id = $this->uri->segment(3);
        $data['marca'] = $this->marca_model->editar_marca($id);

		$this->load->view('sistema/header');
		$this->load->view('sistema/cadastro/edita_marca',$data);
		$this->load->view('sistema/footer');
    }

    public function atualizar_marca(){
        $id = $this->input->post('id_marca');
        $dados = [
            'nome_marca' => $this->input->post('nome_marca')
        ];

        $this->marca_model->atualizar_marca($dados,$id);
		redirect('marca');
    }

    public function deletar_marca(){
        $id = $this->uri->segment(3);
		$this->marca_model->delete_1($id);
        redirect('marca');
    }
}