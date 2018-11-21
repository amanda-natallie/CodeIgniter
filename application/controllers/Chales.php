<?php ob_start(); defined('BASEPATH') OR exit('No direct script access allowed');

class Chales extends CI_Controller {
        
        public function __construct() {
            parent::__construct();
          
        }
    
	public function index()
	{
                /*Meta tags*/
                $dados['title'] = "Chales - Detalhes de Minas";
                         
		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/chales');
		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');
	}
}
