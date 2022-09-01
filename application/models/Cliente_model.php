<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

    public function ver_clientes(){
        return $this->db->get('clientes')->result();
    }

    public function consultar_clientes($nome){
        return $this->db->get_where('clientes',array('nome_cliente'=>$nome))->row();
    }

    public function adicionar_cliente($dados){
        $this->db->insert("clientes",$dados);
    }

    public function editar_cliente($id){
        return $this->db->get_where('clientes', array('id_cliente' => $id))->row();
    }

    public function atualizar_cliente($dados,$id){
        return $this->db->update('clientes', $dados, array('id_cliente'=>$id));
    }

    public function delete_1($id){
        $this->db->delete('clientes', array('id_cliente' => $id)); 
    }
}