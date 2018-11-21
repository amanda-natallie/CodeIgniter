<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias_model extends CI_Model {

    public $post_id;
    public $post_nome;
    public $post_conteudo;
    public $post_data ;
    public $post_cat ;
    public $post_imagem ;
    public $post_autor ;
    public function __construct() {
        parent::__construct();
    }

    public function lista_destaques() {
        $this->db->select('*');
        $this->db->from('tbl_postagens');
        $this->db->join('tbl_usuarios', 'tbl_postagens.post_autor = tbl_usuarios.user_id', 'inner');
        $this->db->limit(3);  
        $this->db->order_by("post_data", "DESC");
        return $this->db->get()->result();
    }
    
    public function noticias_por_categoria($id){
        $this->db->select('*');
        $this->db->from('tbl_postagens');
        $this->db->join('tbl_usuarios', 'tbl_postagens.post_autor = tbl_usuarios.user_id', 'inner');
        $this->db->join('tbl_categorias', 'tbl_postagens.post_cat = tbl_categorias.cat_id', 'inner');
        $this->db->where("post_cat", $id); 
        $this->db->order_by("post_data", "DESC");
        return $this->db->get()->result();
    }

}
