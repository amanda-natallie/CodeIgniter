<?php

ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logado')) {
            redirect(base_url('admin/login'));
        }

        $this->load->model("slide_model", "msli");
        $this->slide = $this->msli->lista_slides();
    }

    public function index() {
        $dados['slide'] = $this->slide;
        $dados['title'] = "Gerenciar Slides";
        $dados['subtitle'] = " Slides do Site";

        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/slide/ver');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function inserir() {
        $dados['slide'] = $this->slide;
        $dados['title'] = "Admin";
        $dados['subtitle'] = " Slide";

        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/slide/cadastrar');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function cadastrar() {
        ini_set('upload_max_filesize', '20M');
        $this->load->library("form_validation");
        $this->load->helper('do_upload_helper');

        $this->form_validation->set_rules('sli_titulo1', "TITULO 1", array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('sli_titulo2', "TITULO 2", array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('sli_titulo3', "TITULO 3", array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('sli_titulo4', "TITULO 4", array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('sli_titulo5', "TITULO 5", array('required', 'min_length[3]', 'max_length[30]'));
        $this->form_validation->set_rules('sli_botao_link', "LINK DO BOTÃO", array('required', 'min_length[3]', 'valid_url'));
        $this->form_validation->set_rules('sli_botao_titulo', "TITULO DO BOTÃO", array('required', 'min_length[3]', 'max_length[20]'));


        if (isset($_FILES['sli_imagem']) && $_FILES['sli_imagem'] != "") {
            $nomeImagem = remove_accents($this->input->post('sli_titulo1'));
            $caminho = "assets/upload/slides";
            $caminho = remove_accents($caminho);
            if (!file_exists($caminho)) {
                mkdir($caminho, 0777, true);
            }
            $titulo2 = $nomeImagem . strtotime(date('d-m-Y H:i:s'));
            $retornoFrente = do_upload($caminho, 'sli_imagem', $titulo2);
            if (isset($retornoFrente["error"])) {
                $retornoFrente = "assets/upload/slides/background_padrao.jpg";
            } else {
                $retornoFrente = $caminho . "/" . $retornoFrente;
            }
        }

        if ($this->form_validation->run() == FALSE) {
            $this->inserir();
        } else {
            $arr_slide = [
                'sli_titulo1' => $this->input->post('sli_titulo1'),
                'sli_titulo2' => $this->input->post('sli_titulo2'),
                'sli_titulo3' => $this->input->post('sli_titulo3'),
                'sli_titulo4' => $this->input->post('sli_titulo4'),
                'sli_titulo5' => $this->input->post('sli_titulo5'),
                'sli_imagem' => $retornoFrente,
                'sli_botao_titulo' => $this->input->post('sli_botao_titulo'),
                'sli_botao_link' => $this->input->post('sli_botao_link'),
            ];

            $retornoCad = $this->msli->adicionar($arr_slide);


            if ($retornoCad) {
                redirect(base_url("admin/slide"));
            } else {
                $this->inserir();
            }
        }
    }
    public function salvar_alteracoes() {
        $id = $this->input->post('sli_id');
        ini_set('upload_max_filesize', '20M');
        $this->load->library("form_validation");
        $this->load->helper('do_upload_helper');

        $this->form_validation->set_rules('sli_titulo1', "TITULO 1", array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('sli_titulo2', "TITULO 2", array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('sli_titulo3', "TITULO 3", array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('sli_titulo4', "TITULO 4", array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('sli_titulo5', "TITULO 5", array('required', 'min_length[3]', 'max_length[30]'));
        $this->form_validation->set_rules('sli_botao_link', "LINK DO BOTÃO", array('required', 'min_length[3]', 'valid_url'));
        $this->form_validation->set_rules('sli_botao_titulo', "TITULO DO BOTÃO", array('required', 'min_length[3]', 'max_length[20]'));
        $this->form_validation->set_rules('sli_imagem', "IMAGEM DE BACKGROUND", array('required'));


        if (isset($_FILES['sli_imagem']) && $_FILES['sli_imagem'] != "") {
            
            foreach ($this->msli->lista_slide($id) as $sli){
                if(file_exists(base_url().$sli["sli_imagem"])){
                    unlink(base_url().$sli["sli_imagem"]);
                }
            }           
            
            $nomeImagem = remove_accents($this->input->post('sli_titulo1'));
            $caminho = "assets/upload/slides";
            $caminho = remove_accents($caminho);
            if (!file_exists($caminho)) {
                mkdir($caminho, 0777, true);
            }
            $titulo2 = $nomeImagem . strtotime(date('d-m-Y H:i:s'));
            $retornoFrente = do_upload($caminho, 'sli_imagem', $titulo2);
            if (isset($retornoFrente["error"])) {
                $retornoFrente = "assets/upload/slides/background_padrao.jpg";
            } else {
                $retornoFrente = $caminho . "/" . $retornoFrente;
            }
        }

        if ($this->form_validation->run() == FALSE) {
            $this->editar($id);
        } else {
            $arr_slide = [
                'sli_id' => $this->input->post('sli_id'),
                'sli_titulo1' => $this->input->post('sli_titulo1'),
                'sli_titulo2' => $this->input->post('sli_titulo2'),
                'sli_titulo3' => $this->input->post('sli_titulo3'),
                'sli_titulo4' => $this->input->post('sli_titulo4'),
                'sli_titulo5' => $this->input->post('sli_titulo5'),
                'sli_imagem' => $retornoFrente,
                'sli_botao_titulo' => $this->input->post('sli_botao_titulo'),
                'sli_botao_link' => $this->input->post('sli_botao_link'),
            ];

            $retornoUpd = $this->msli->editar($arr_slide);


            if ($retornoUpd) {
                redirect(base_url("admin/slide"));
            } else {
                $this->editar($id);
            }
        }
    }
    public function excluir($id) {

        if ($this->msli->excluir($id)) {
            foreach ($this->msli->lista_slide($id) as $sli){
               if(file_exists(base_url().$sli["sli_imagem"])){
                    unlink(base_url($sli["sli_imagem"]));
                }
            }
            redirect(base_url("admin/slide"));
        } else {
            $this->index();
        }
    }

    public function editar($id) {
        $dados['slide'] = $this->msli->lista_slide($id);
        $dados['title'] = "Admin";
        $dados['subtitle'] = " Slide";

        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/slide/editar');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    

}