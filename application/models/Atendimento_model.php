<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atendimento_model extends CI_Model {

    public function ver_clientes(){
        $this->db->select('modelos.id_modelo, modelos.nome_modelo, marcas.*');
        $this->db->from('modelos');
        $this->db->join('marcas','marcas.id_marca = modelos.marca_modelo');
        return $this->db->get()->result();
    }

    public function ver_atendimentos(){
        $this->db->select('servicos.*, atendimentos.*');
        $this->db->from('atendimentos');
        $this->db->join('servicos','servicos.id_servico = atendimentos.servicos_atendimento','inner');
        return $this->db->get()->result();
    }

    public function ver_ex_atendimentos($id){
        $this->db->select('servicos.*, atendimentos.*, clientes.*' );
        $this->db->from('atendimentos');
        $this->db->join('servicos','servicos.id_servico = atendimentos.servicos_atendimento');
        $this->db->join('clientes','clientes.nome_cliente = atendimentos.cliente_atendimento');
        $this->db->where(array('id_atendimento'=>$id));
        return $this->db->get()->row();
        
    }
    
    public function adicionar_atendimento($dados){
        $this->db->insert("atendimentos",$dados);
    }

    public function atualizar_atendimento($dados,$id){
        return $this->db->update('atendimentos', $dados, array('id_atendimento'=>$id));
    }
}