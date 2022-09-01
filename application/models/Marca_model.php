<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marca_model extends CI_Model {

    public function ver_marcas(){
        return $this->db->get('marcas')->result();
    }

    public function adicionar_marca($dados){
        $this->db->insert("marcas",$dados);
    }

    public function editar_marca($id){
        return $this->db->get_where('marcas', array('id_marca' => $id))->row();
    }

    public function atualizar_marca($dados,$id){
        return $this->db->update('marcas', $dados, array('id_marca'=>$id));
    }

    public function delete_1($id){
        $this->db->delete('marcas', array('id_marca' => $id)); 
    }
}