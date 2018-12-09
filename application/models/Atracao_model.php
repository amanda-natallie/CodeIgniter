<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Atracao_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function lista_atracoes() {
        $this->db->select('*');
        $this->db->from('tbl_atracoes');
        $this->db->order_by('atr_id', "DESC");
        return $this->db->get()->result_array();
    }

    public function lista_atracao($id) {
        $this->db->select('*');
        $this->db->from('tbl_atracoes');
        $this->db->where('atr_id', $id);
        return $this->db->get()->result_array();
    }

    public function adicionar($array) {
        $this->db->insert('tbl_atracoes', $array);
        return $this->db->insert_id();
    }

    public function excluir($id) {
        $dados['atr_id'] = $id;
        return $this->db->delete("tbl_atracoes", $dados);
    }

    public function editar($array) {
        $this->db->set($array);
        $this->db->where('atr_id', $array['atr_id']);
        $this->db->update('tbl_atracoes');
        return $this->db->affected_rows();
    }

}
