<?php ob_start(); defined('BASEPATH') OR exit('No direct script access allowed');

class Tarifa_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logado')) {
            redirect(base_url('admin/login'));
        }$this->load->model("tarifa_model", "mtar");
    }

    public function index($id) {
        $dados['id'] = $id;
        $this->tarifas = $this->mtar->lista_tarifas($id);
        $dados['tarifas'] = $this->tarifas;
        $dados['title'] = "Gerenciar Tarifas dos Chales";
        $dados['subtitle'] = " Tarifas dos Chales do Site";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/chale/tarifas/ver');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function inserir($id) {
        $dados['id'] = $id;
        $this->tarifas = $this->mtar->lista_tarifas($id);
        $dados['tarifas'] = $this->tarifas;
        $dados['title'] = "Admin";
        $dados['subtitle'] = " Tarifas dos Chalés";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/chale/tarifas/cadastrar');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function cadastrar($id) {
        $dados['id'] = $id;
        
        $this->form_validation->set_rules('tar_periodo', "PERÍODO DO ANO", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('tar_dias', "DIAS DO PERÍODO DO ANO", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('tar_minimopernoite', "MÍNIMO DE DIÁRIAS", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('tar_diaria', "VALOR DA DIÁRIA", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('tar_semanal', "VALOR SEMANAL", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('tar_mensal', "VALOR MENSAL", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('tar_eventos', "VALOR PARA EVENTOS", array('required', 'min_length[1]', 'max_length[150]'));
        
        if ($this->form_validation->run() == FALSE) {
            $this->inserir($id);
        } else {
            $arr_tarifas = [
                'tar_periodo' => $this->input->post('tar_periodo'),
                'tar_dias' => $this->input->post('tar_dias'),
                'tar_minimopernoite' => $this->input->post('tar_minimopernoite'),
                'tar_diaria' => $this->input->post('tar_diaria'),
                'tar_semanal' => $this->input->post('tar_semanal'),
                'tar_mensal' => $this->input->post('tar_mensal'),
                'tar_eventos' => $this->input->post('tar_eventos'),
                'tar_quarto' => $id,
            ];

            $retornoCad = $this->mtar->adicionar($arr_tarifas);
            if ($retornoCad) {
                redirect(base_url("admin/chale/tarifas/" . $id));
            } else {
                $this->inserir($id);
            }
        }
    }

    public function editar($id) {
        $dados['tarifas'] = $this->mtar->lista_tarifa($id);
        $dados['title'] = "Admin";
        $dados['subtitle'] = "Tarifa do Chale";
        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/chale/tarifas/editar');
        $this->load->view('backend/template/footer');
        $this->load->view('backend/template/html-footer');
    }

    public function salvarAlteracoes() {
        $id = $this->input->post('tar_id');
        $this->form_validation->set_rules('tar_periodo', "PERÍODO DO ANO", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('tar_dias', "DIAS DO PERÍODO DO ANO", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('tar_minimopernoite', "MÍNIMO DE DIÁRIAS", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('tar_diaria', "VALOR DA DIÁRIA", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('tar_semanal', "VALOR SEMANAL", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('tar_mensal', "VALOR MENSAL", array('required', 'min_length[1]', 'max_length[150]'));
        $this->form_validation->set_rules('tar_eventos', "VALOR PARA EVENTOS", array('required', 'min_length[1]', 'max_length[150]'));
        
        if ($this->form_validation->run() == FALSE) {
            $this->editar($id);
        } else {
            $arr_tarifas = [
                'tar_id' => $id,
                'tar_periodo' => $this->input->post('tar_periodo'),
                'tar_dias' => $this->input->post('tar_dias'),
                'tar_minimopernoite' => $this->input->post('tar_minimopernoite'),
                'tar_diaria' => $this->input->post('tar_diaria'),
                'tar_semanal' => $this->input->post('tar_semanal'),
                'tar_mensal' => $this->input->post('tar_mensal'),
                'tar_eventos' => $this->input->post('tar_eventos'),
                'tar_quarto' => $this->input->post('tar_quarto'),
            ];

            $retornoCad = $this->mtar->editar($arr_tarifas);
            
            if ($retornoCad) {
                redirect(base_url("admin/chale/tarifas/" . $this->input->post('tar_quarto')));
            } else {
                $this->editar($id);
            }
        }
    }

    public function excluir($id) {
        $this->load->helper('url');
        $quarto = $this->uri->segment(6);
        if ($this->mtar->excluir($id)) {
            redirect(base_url("admin/chale/tarifas/" . $quarto));
        } else {
            $this->index();
        }
    }

}
