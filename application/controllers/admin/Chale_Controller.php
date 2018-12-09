<?php ob_start(); defined('BASEPATH') OR exit('No direct script access allowed');

class Chale_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logado')) {
            redirect(base_url('admin/login'));
        }$this->load->model("chale_model", "mcha");
        $this->chale = $this->mcha->lista_chales();
    }

    public function index() {
        $dados['chale'] = $this->chale;
        $dados['title'] = "Gerenciar Chales";
        $dados['subtitle'] = " Chales do Site";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/chale/ver');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function inserir() {
        $dados['chale'] = $this->chale;
        $dados['title'] = "Admin";
        $dados['subtitle'] = " Chale";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/chale/cadastrar');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function cadastrar() {
        ini_set('upload_max_filesize', '20M');
        
        
        $this->form_validation->set_rules('cha_nome', "NOME/TITULO DO CHALE", array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('cha_resumo', "RESUMO", array('required', 'min_length[30]', 'max_length[220]'));
        $this->form_validation->set_rules('cha_descricao', "DESCRICAO", array('required', 'min_length[3]'));
        $this->form_validation->set_rules('cha_diaria', "DIÁRIA PADRÃO", array('required', 'min_length[3]', 'max_length[20]'));
        
        if (isset($_FILES['cha_imagem']) && $_FILES['cha_imagem'] != "") {
            $nomeImagem = remove_accents($this->input->post('cha_nome'));
            $caminho = "assets/upload/chales";
            $caminho = remove_accents($caminho);
            if (!file_exists($caminho)) {
                mkdir($caminho, 0777, true);
            }$titulo2 = $nomeImagem . strtotime(date('d-m-Y H:i:s'));
            $retornoFrente = do_upload($caminho, 'cha_imagem', $titulo2);
            if (isset($retornoFrente["error"])) {
                $retornoFrente = "assets/upload/chales/background_padrao.jpg";
            } else {
                $retornoFrente = $caminho . "/" . $retornoFrente;
            }
        }if ($this->form_validation->run() == FALSE) {
            $this->inserir();
        } else {
            $arr_chale = [
                'cha_nome' => $this->input->post('cha_nome'),
                'cha_resumo' => $this->input->post('cha_resumo'),
                'cha_descricao' => $this->input->post('cha_descricao'),
                'cha_diaria' => $this->input->post('cha_diaria'),
                'cha_imagem' => $retornoFrente,
                ];
            
            $retornoCad = $this->mcha->adicionar($arr_chale);
            if ($retornoCad) {
                redirect(base_url("admin/chale"));
            } else {
                $this->inserir();
            }
        }
    }

    public function salvar_alteracoes() {
        $id = $this->input->post('cha_id');
       ini_set('upload_max_filesize', '20M');
        
        
        $this->form_validation->set_rules('cha_nome', "NOME/TITULO DO CHALE", array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('cha_resumo', "RESUMO", array('required', 'min_length[30]', 'max_length[220]'));
        $this->form_validation->set_rules('cha_descricao', "DESCRICAO", array('required', 'min_length[3]'));
        $this->form_validation->set_rules('cha_diaria', "DIÁRIA PADRÃO", array('required', 'min_length[3]', 'max_length[20]'));
        
        if (isset($_FILES['cha_imagem']) && $_FILES['cha_imagem'] != "") {
            $nomeImagem = remove_accents($this->input->post('cha_nome'));
            $caminho = "assets/upload/chales";
            $caminho = remove_accents($caminho);
            if (!file_exists($caminho)) {
                mkdir($caminho, 0777, true);
            }$titulo2 = $nomeImagem . strtotime(date('d-m-Y H:i:s'));
            $retornoFrente = do_upload($caminho, 'cha_imagem', $titulo2);
            if (isset($retornoFrente["error"])) {
                $retornoFrente = "assets/upload/chales/background_padrao.jpg";
            } else {
                $retornoFrente = $caminho . "/" . $retornoFrente;
            }
        }if ($this->form_validation->run() == FALSE) {
            $this->editar($id);
        } else {
            $arr_chale = [
                'cha_id' => $id,
                'cha_nome' => $this->input->post('cha_nome'),
                'cha_resumo' => $this->input->post('cha_resumo'),
                'cha_descricao' => $this->input->post('cha_descricao'),
                'cha_diaria' => $this->input->post('cha_diaria'),
                'cha_imagem' => $retornoFrente,
                ];
            
            $retornoCad = $this->mcha->editar($arr_chale);
            if ($retornoCad) {
                redirect(base_url("admin/chale"));
            } else {
                $this->editar($id);
            }
        }
    }

    public function excluir($id) {



        if ($this->mcha->excluir($id)) {
            foreach ($this->mcha->lista_chale($id) as $sli) {
                if (file_exists(base_url() . $sli["cha_imagem"])) {
                    unlink($sli["cha_imagem"]);
                }
                
            }
            redirect(base_url("admin/chale"));
        } else {
            $this->index();
        }
    }

    public function editar($id) {
        $dados['chale'] = $this->mcha->lista_chale($id);
        $dados['title'] = "Admin";
        $dados['subtitle'] = " Chale";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/chale/editar');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

}
