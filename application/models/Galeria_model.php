<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function lista_galerias() {
        $this->db->select('*');
        $this->db->from('tbl_galerias');
        $this->db->join('tbl_categorias', "tbl_categorias.cat_id = tbl_galerias.gal_categoria");
        $this->db->order_by('gal_id', "DESC");
        return $this->db->get()->result_array();
    }

    public function lista_galeria($id) {
        $this->db->select('*');
        $this->db->from('tbl_galerias');
        $this->db->where('gal_id', $id);
        return $this->db->get()->result_array();
    }

    public function adicionar($array) {
        $this->db->insert('tbl_galerias', $array);
        return $this->db->insert_id();
    }

    public function excluir($id) {
        $dados['gal_id'] = $id;
        return $this->db->delete("tbl_galerias", $dados);
    }

    public function editar($array) {
        $this->db->set($array);
        $this->db->where('gal_id', $array['gal_id']);
        $this->db->update('tbl_galerias');
        return $this->db->affected_rows();
    }

}
