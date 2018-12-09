<?php ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logado')) {
            redirect(base_url('admin/login'));
        }
        $this->load->model("galeria_model", "mgal");
        $this->galeria = $this->mgal->lista_galerias();
        
        $this->load->model("categorias_model", "mcat");
        $this->categorias = $this->mcat->lista_categorias();
    }

    public function index() {
        $dados['categorias'] = $this->categorias;
        $dados['galeria'] = $this->galeria;
        $dados['title'] = "Gerenciar Galerias";
        $dados['subtitle'] = " Galerias do Site";
        
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/galeria/ver');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function inserir() {
        $dados['categorias'] = $this->categorias;
        $dados['galeria'] = $this->galeria;
        $dados['title'] = "Admin";
        $dados['subtitle'] = " Galeria";
        
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/galeria/cadastrar');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function cadastrar() {
        
        ini_set('upload_max_filesize', '20M');
        
        
        $this->form_validation->set_rules('gal_titulo', "TITULO DA IMAGEM", array('required', 'min_length[3]', 'max_length[90]'));
        $this->form_validation->set_rules('gal_categoria', "CATEGORIA DA IMAGEM", array('required'));
        
        
        if (isset($_FILES['gal_imagem']) && $_FILES['gal_imagem'] != "") {
       
            $nomeImagem = remove_accents($this->input->post('gal_titulo'));
            $caminho = "assets/upload/galerias";
            $caminho = remove_accents($caminho);
            if (!file_exists($caminho)) {
                mkdir($caminho, 0777, true);
            }$titulo2 = $nomeImagem . strtotime(date('d-m-Y H:i:s'));
            $retornoFrente = do_upload($caminho, 'gal_imagem', $titulo2);
            if (isset($retornoFrente["error"])) {
                $retornoFrente = "assets/upload/galerias/background_padrao.jpg";
            } else {
                $retornoFrente = $caminho . "/" . $retornoFrente;
            }
        }if ($this->form_validation->run() == FALSE) {
            $this->inserir();
        } else {
            $arr_galeria = [
                'gal_titulo' => $this->input->post('gal_titulo'),
                'gal_categoria' => $this->input->post('gal_categoria'),
                'gal_imagem' => $retornoFrente,
                
                ];
            $retornoCad = $this->mgal->adicionar($arr_galeria);
            if ($retornoCad) {
                redirect(base_url("admin/galeria"));
            } else {
                $this->inserir();
            }
        }
    }

    public function salvar_alteracoes() {
        $id = $this->input->post('gal_id');
        ini_set('upload_max_filesize', '20M');
        
        
        $this->form_validation->set_rules('gal_titulo', "TITULO DA IMAGEM", array('required', 'min_length[3]', 'max_length[90]'));
        $this->form_validation->set_rules('gal_categoria', "CATEGORIA DA IMAGEM", array('required'));
        
        
        if (isset($_FILES['gal_imagem']) && $_FILES['gal_imagem'] != "") {
       
            $nomeImagem = remove_accents($this->input->post('gal_titulo'));
            $caminho = "assets/upload/galerias";
            $caminho = remove_accents($caminho);
            if (!file_exists($caminho)) {
                mkdir($caminho, 0777, true);
            }$titulo2 = $nomeImagem . strtotime(date('d-m-Y H:i:s'));
            $retornoFrente = do_upload($caminho, 'gal_imagem', $titulo2);
            if (isset($retornoFrente["error"])) {
                $retornoFrente = "assets/upload/galerias/background_padrao.jpg";
            } else {
                $retornoFrente = $caminho . "/" . $retornoFrente;
            }
        }if ($this->form_validation->run() == FALSE) {
            $this->editar();
        } else {
            $arr_galeria = [
                'gal_id' => $id,
                'gal_titulo' => $this->input->post('gal_titulo'),
                'gal_categoria' => $this->input->post('gal_categoria'),
                'gal_imagem' => $retornoFrente,
                
                ];
            $retornoCad = $this->mgal->editar($arr_galeria);
            if ($retornoCad) {
                redirect(base_url("admin/galeria"));
            } else {
                $this->editar();
            }
        }
    }

    public function excluir($id) {
        if ($this->mgal->excluir($id)) {
            foreach ($this->mgal->lista_galeria($id) as $gal) {
                if (file_exists(base_url() . $gal["gal_imagem"])) {
                    unlink($gal["gal_imagem"]);
                }
                
            }
            redirect(base_url("admin/galeria"));
        } else {
            $this->index();
        }
    }

    public function editar($id) {
        $dados['categorias'] = $this->categorias;
        $dados['galeria'] = $this->mgal->lista_galeria($id);
        $dados['title'] = "Admin";
        $dados['subtitle'] = " Galeria";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/galeria/editar');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

}
