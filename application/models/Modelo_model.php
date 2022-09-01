<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_model extends CI_Model {

    public function ver_modelos(){
        $this->db->select('modelos.id_modelo, modelos.nome_modelo, marcas.*');
        $this->db->from('modelos');
        $this->db->join('marcas','marcas.id_marca = modelos.marca_modelo');
        return $this->db->get()->result();
    }

    public function adicionar_modelo($dados){
        $this->db->insert("modelos",$dados);
    }

    public function editar_modelo($id){
        $this->db->select('modelos.id_modelo, modelos.nome_modelo, marcas.*');
        $this->db->from('modelos');
        $this->db->join('marcas','marcas.id_marca = modelos.marca_modelo');
        $this->db->where('modelos.id_modelo',$id);
        return $this->db->get()->row();
    }

    public function atualizar_modelo($dados,$id){
        return $this->db->update('modelos', $dados, array('id_modelo'=>$id));
    }

    public function delete_1($id){
        $this->db->delete('modelos', array('id_modelo' => $id)); 
    }
}