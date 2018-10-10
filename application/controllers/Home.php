<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        
        public function __construct() {
            parent::__construct();
            
            $this->load->model("categorias_model", "Mcat");
            $this->categorias = $this->Mcat->lista_categorias();
        }
    
	public function index()
	{
                $dados['categorias'] = $this->categorias;
                
                $this->load->model("noticias_model", "Mnoticias"); /*Mnoticias é o alias do model que acabei de chamar*/
                $this->destaques = $this->Mnoticias->lista_destaques();
                $dados['destaques'] = $this->destaques;
                
                /*Meta tags*/
                $dados['title'] = "Home - Blog";
                                
                
		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/home');
		$this->load->view('frontend/template/sidebar');
		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');
	}
}
