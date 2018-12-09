<?php ob_start(); defined('BASEPATH') OR exit('No direct script access allowed');

class Atracao_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logado')) {
            redirect(base_url('admin/login'));
        }$this->load->model("atracao_model", "matr");
    }

    public function index() {
        
        $this->atracoes = $this->matr->lista_atracoes();
        $dados['atracoes'] = $this->atracoes;
        $dados['title'] = "Gerenciar Atrações de Itabirito";
        $dados['subtitle'] = " Atrações de Itabirito ";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/itabirito/ver');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function inserir() {
        $this->atracoes = $this->matr->lista_atracoes();
        $dados['atracoes'] = $this->atracoes;
        $dados['title'] = "Admin";
        $dados['subtitle'] = " Atrações de Itabirito";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/itabirito/cadastrar');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function cadastrar() {
        
        $this->form_validation->set_rules('atr_nome', "TITULO DA ATRAÇÃO", array('required', 'min_length[1]', 'max_length[80]'));
        $this->form_validation->set_rules('atr_descricao', " DESCRIÇÃO DA ATRAÇÃO", array('required', 'min_length[1]'));
     
        if ($this->form_validation->run() == FALSE) {
            $this->inserir();
        } else {
            $arr_atracoes = [
                'atr_nome' => $this->input->post('atr_nome'),
                'atr_descricao' => $this->input->post('atr_descricao')
            ];

            $retornoCad = $this->matr->adicionar($arr_atracoes);
            if ($retornoCad) {
                redirect(base_url("admin/itabirito/"));
            } else {
                $this->inserir();
            }
        }
    }

    public function editar($id) {
        $dados['atracao'] = $this->matr->lista_atracao($id);
        $dados['title'] = "Admin";
        $dados['subtitle'] = "Atrações de Itabirito";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/itabirito/editar');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function salvar_alteracoes() {
        $id = $this->input->post('atr_id');
        $this->form_validation->set_rules('atr_nome', "TITULO DA ATRAÇÃO", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('atr_descricao', " DESCRIÇÃO DA ATRAÇÃO", array('required', 'min_length[1]'));
     
        if ($this->form_validation->run() == FALSE) {
            $this->editar($id);
        } else {
            $arr_atracoes = [
                'atr_id' => $id,
                'atr_nome' => $this->input->post('atr_nome'),
                'atr_descricao' => $this->input->post('atr_descricao')
            ];

            $retornoCad = $this->matr->editar($arr_atracoes);
            
            if ($retornoCad) {
                redirect(base_url("admin/itabirito/"));
            } else {
                $this->editar($id);
            }
        }
    }

    public function excluir($id) {
        if ($this->matr->excluir($id)) {
            redirect(base_url("admin/itabirito/"));
        } else {
            $this->index();
        }
    }

}
