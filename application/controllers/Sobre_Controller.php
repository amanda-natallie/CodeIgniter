<?php ob_start();defined('BASEPATH') OR exit('No direct script access allowed');class Sobre_Controller extends CI_Controller {    public function __construct() {        parent::__construct();        $this->load->model("galeria_model", "mgal");        $this->load->model("categorias_model", "mcat");    }     public function index() {                $dados = dados(array(            "title"=>"Sobre Nós - Detalhes de Minas",            "galeria"=>$this->mgal->lista_galerias(),            "categorias"=>$this->mcat->lista_categorias()            ));            call_view("sobre", $dados);    }}