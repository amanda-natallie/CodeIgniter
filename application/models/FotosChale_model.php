<?php defined('BASEPATH') OR exit('No direct script access allowed');

class FotosChale_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function lista_fotos($id) {
        $this->db->select('*');
        $this->db->from('tbl_fotos_quarto');
        $this->db->where('foq_quarto', $id);
        $this->db->order_by('foq_id', "DESC");
        return $this->db->get()->result_array();
    }

    public function lista_foto($id) {
        $this->db->select('*');
        $this->db->from('tbl_fotos_quarto');
        $this->db->where('foq_id', $id);
        return $this->db->get()->result_array();
    }

    public function adicionar($array) {
        $this->db->insert('tbl_fotos_quarto', $array);
        return $this->db->insert_id();
    }

    public function excluir($id) {
        $dados['foq_id'] = $id;
        return $this->db->delete("tbl_fotos_quarto", $dados);
    }

    public function editar($array) {
        $this->db->set($array);
        $this->db->where('foq_id', $array['foq_id']);
        $this->db->update('tbl_fotos_quarto');
        return $this->db->affected_rows();
    }

}
