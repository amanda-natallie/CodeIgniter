<?php ob_start(); defined('BASEPATH') OR exit('No direct script access allowed');

class Itabirito_Controller extends CI_Controller {
        
        public function __construct() {
            parent::__construct();
          
        }
    
	public function index()
	{
             
                /*Meta tags*/
                $dados['title'] = "Itabirito - Detalhes de Minas";
                                
                 call_view("itabirito", $dados);
		
	}
}
