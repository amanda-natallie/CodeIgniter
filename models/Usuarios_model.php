<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public $user_id;
    public $user_nome;
    public $user_email;
    public $user_senha;

    public function __construct() {
        parent::__construct();
    }

    public function lista_categorias() {
        $this->db->order_by("user_nome", "DESC");                                                  
        return $this->db->get("tbl_categorias")->result();
    }
    public function lista_titulo($id) {
        $this->db->select("user_nome");   
        $this->db->from("tbl_categorias");   
        $this->db->where("user_id", $id);   
        return $this->db->get()->result();
    }
    public function lista_categoria($id) {
        $this->db->select("*");   
        $this->db->from("tbl_categorias");   
        $this->db->where("user_id", $id);   
        return $this->db->get()->result();
    }
    public function adicionar($nome){
        $dados['user_nome'] = $nome;
        return $this->db->insert("tbl_categorias", $dados);
    }
    public function excluir($id){
        $dados['user_id'] = $id;
        return $this->db->delete("tbl_categorias", $dados);
    }
    public function editar($id, $nome){
        $dados['user_id'] = $id;
        $dados['user_nome'] = $nome;
        $this->db->where("user_id", $id);
        return $this->db->update("tbl_categorias", $dados);
    }
}
