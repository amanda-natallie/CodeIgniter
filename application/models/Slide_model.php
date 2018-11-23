<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Slide_model extends CI_Model {

    public $sli_id;
    public $sli_titulo1;
    public $sli_titulo2;
    public $sli_titulo3;
    public $sli_titulo4;
    public $sli_imagem;
    public $sli_botao_link;
    public $sli_botao_titulo;

    public function __construct() {
        parent::__construct();
    }

    public function lista_slides() {
        $this->db->select('*');
        $this->db->from('tbl_slides');
        $this->db->order_by('sli_id', "DESC");
        return $this->db->get()->result_array();
    }
    
    public function lista_slide($id) {
        $this->db->select('*');
        $this->db->from('tbl_slides');
        $this->db->where('sli_id', $id);
        return $this->db->get()->result_array();
    }

    public function adicionar($array) {
        $this->db->insert('tbl_slides', $array);
        return $this->db->insert_id();
    }

    public function excluir($id) {
        $dados['sli_id'] = $id;
        return $this->db->delete("tbl_slides", $dados);
    }

    public function editar($array) {
        $this->db->set($array);
        $this->db->where('sli_id', $array['sli_id']);
        $this->db->update('tbl_slides');
        return $this->db->affected_rows();
    }

}
