<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servico_model extends CI_Model {

    public function ver_servicos(){
        return $this->db->get('servicos')->result();
    }

    public function adicionar_servico($dados){
        $this->db->insert("servicos",$dados);
    }

    public function editar_servico($id){
        return $this->db->get_where('servicos', array('id_servico' => $id))->row();
    }

    public function atualizar_servico($dados,$id){
        return $this->db->update('servicos', $dados, array('id_servico'=>$id));
    }

    public function delete_1($id){
        $this->db->delete('servicos', array('id_servico' => $id)); 
    }
}