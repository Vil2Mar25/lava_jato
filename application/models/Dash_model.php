<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash_model extends CI_Model {

    public function ver_clientes(){
        $this->db->select('clientes.id_cliente');
        return $this->db->count_all_results('clientes');
    }
    public function ver_servicos(){
        $this->db->select('servicos.id_servico');
        return $this->db->count_all_results('servicos');
    }
    public function ver_marcas(){
        $this->db->select('marcas.id_marca');
        return $this->db->count_all_results('marcas');
    }
    public function ver_modelos(){
        $this->db->select('modelos.id_modelo');
        return $this->db->count_all_results('modelos');
    }
}