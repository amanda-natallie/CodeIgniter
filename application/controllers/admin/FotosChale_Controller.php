<?php

ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class FotosChale_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logado')) {
            redirect(base_url('admin/login'));
        }$this->load->model("fotosChale_model", "mfoq");
    }

    public function index($id) {
        $dados['id'] = $id;
        $this->fotos = $this->mfoq->lista_fotos($id);
        $dados['fotos'] = $this->fotos;
        $dados['title'] = "Gerenciar Fotos dos Chales";
        $dados['subtitle'] = " Fotos dos Chales do Site";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/chale/fotos/ver');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function inserir($id) {
        $dados['id'] = $id;
        $this->fotos = $this->mfoq->lista_fotos($id);
        $dados['fotos'] = $this->fotos;
        $dados['title'] = "Admin";
        $dados['subtitle'] = " Fotos dos Chalés";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/chale/fotos/cadastrar');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function cadastrar($id) {
        $dados['id'] = $id;
        ini_set('upload_max_filesize', '20M');


        $this->form_validation->set_rules('foq_titulo', "DESCRIÇÃO DA FOTO", array('required', 'min_length[3]', 'max_length[150]'));

        if (isset($_FILES['foq_imagem']) && $_FILES['foq_imagem'] != "") {
            $nomeImagem = remove_accents($this->input->post('foq_titulo'));
            $caminho = "assets/upload/chale/fotos";
            $caminho = remove_accents($caminho);
            if (!file_exists($caminho)) {
                mkdir($caminho, 0777, true);
            }$titulo2 = $nomeImagem . strtotime(date('d-m-Y H:i:s'));
            $retornoFrente = do_upload($caminho, 'foq_imagem', $titulo2);
            if (isset($retornoFrente["error"])) {
                $retornoFrente = "assets/upload/fotos/background_padrao.jpg";
            } else {
                $retornoFrente = $caminho . "/" . $retornoFrente;
            }
        }if ($this->form_validation->run() == FALSE) {
            $this->inserir($id);
        } else {
            $arr_fotos = [
                'foq_titulo' => $this->input->post('foq_titulo'),
                'foq_quarto' => $id,
                'foq_imagem' => $retornoFrente,
            ];

            $retornoCad = $this->mfoq->adicionar($arr_fotos);
            if ($retornoCad) {
                redirect(base_url("admin/chale/fotos/" . $id));
            } else {
                $this->inserir($id);
            }
        }
    }

    public function editar($id) {
        $dados['fotos'] = $this->mfoq->lista_foto($id);
        $dados['title'] = "Admin";
        $dados['subtitle'] = " Chale";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/chale/fotos/editar');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function salvar_alteracoes() {
        
        $id = $this->input->post('foq_id');
        $quarto = $this->input->post('foq_quarto');
        ini_set('upload_max_filesize', '20M');
        $this->form_validation->set_rules('foq_titulo', "DESCRIÇÃO DA FOTO", array('required', 'min_length[3]'));
        if (isset($_FILES['foq_imagem']) && $_FILES['foq_imagem'] != "") {
            $nomeImagem = remove_accents($this->input->post('foq_titulo'));
            $caminho = "assets/upload/chale/fotos";
            $caminho = remove_accents($caminho);
            if (!file_exists($caminho)) {
                mkdir($caminho, 0777, true);
            }
            $titulo2 = $nomeImagem . strtotime(date('d-m-Y H:i:s'));
            $retornoFrente = do_upload($caminho, 'foq_imagem', $titulo2);
            if (isset($retornoFrente["error"])) {
                $retornoFrente = "assets/upload/fotos/background_padrao.jpg";
            } else {
                $retornoFrente = $caminho . "/" . $retornoFrente;
            }
        }if ($this->form_validation->run() == FALSE) {
            $this->editar($id);
        } else {
            $arr_fotos = [
                'foq_id' => $id,
                'foq_titulo' => $this->input->post('foq_titulo'),
                'foq_quarto' => $quarto,
                'foq_imagem' => $retornoFrente
                ];
            $retornoCad = $this->mfoq->editar($arr_fotos);
            if ($retornoCad) {
                redirect(base_url("admin/chale/fotos/" . $quarto));
            } else {
                $this->editar($id);
            }
        }
    }

    public function excluir($id) {
        $this->load->helper('url');
        $quarto = $this->uri->segment(6);

        foreach ($this->mfoq->lista_foto($id) as $foq) {
            if (file_exists($foq["foq_imagem"])) {
                unlink($foq["foq_imagem"]);
            }
        }
        if ($this->mfoq->excluir($id)) {
            redirect(base_url("admin/chale/fotos/" . $quarto));
        } else {
            $this->index();
        }
    }

}
