<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tarifa_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function lista_tarifas($id) {
        $this->db->select('*');
        $this->db->from('tbl_tarifas');
        $this->db->where('tar_quarto', $id);
        $this->db->order_by('tar_id', "DESC");
        return $this->db->get()->result_array();
    }

    public function lista_tarifa($id) {
        $this->db->select('*'); 
        $this->db->from('tbl_tarifas');
        $this->db->where('tar_id', $id);
        return $this->db->get()->result_array();
    }

    public function adicionar($array) {
        $this->db->insert('tbl_tarifas', $array);
        return $this->db->insert_id();
    }

    public function excluir($id) {
        $dados['tar_id'] = $id;
        return $this->db->delete("tbl_tarifas", $dados);
    }

    public function editar($array) {
        $this->db->set($array);
        $this->db->where('tar_id', $array['tar_id']);
        $this->db->update('tbl_tarifas');
        return $this->db->affected_rows();
    }

}
