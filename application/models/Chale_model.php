<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Chale_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function lista_chales() {
        $this->db->select('*');
        $this->db->from('tbl_chales');
        $this->db->order_by('cha_id', "DESC");
        return $this->db->get()->result_array();
    }

    public function lista_chale($id) {
        $this->db->select('*');
        $this->db->from('tbl_chales');
        $this->db->where('cha_id', $id);
        return $this->db->get()->result_array();
    }

    public function adicionar($array) {
        $this->db->insert('tbl_chales', $array);
        return $this->db->insert_id();
    }

    public function excluir($id) {
        $dados['cha_id'] = $id;
        return $this->db->delete("tbl_chales", $dados);
    }

    public function editar($array) {
        $this->db->set($array);
        $this->db->where('cha_id', $array['cha_id']);
        $this->db->update('tbl_chales');
        return $this->db->affected_rows();
    }

}
