<?php

ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        
        $this->load->model('usuarios_model', 'Muser');
        $this->usuarios = $this->Muser->lista_usuarios();
       
        
    }

    public function index() {
         if (verificaPermissao($this->session->userdata('logado'), $this->session->userdata('userlogado')->user_permissao, 2) == 0) {
            exit;
        } else {
            $dados['usuarios'] = $this->usuarios;
            $dados['title'] = "Admin";
            $dados['subtitle'] = "Usuário";

            $this->load->view('backend/template/html-header', $dados);
            $this->load->view('backend/template/template');
            $this->load->view('backend/usuario/ver');
            $this->load->view('backend/template/html-footer');
        }
    }

    public function pag_login() {
        $dados['title'] = "Admin";
        $dados['subtitle'] = "Logar no sistema";

        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/login');
        $this->load->view('backend/template/html-footer');
    }

    public function login() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules('user-usuario', "EMAIL", array('required', 'min_length[3]'));
        $this->form_validation->set_rules('user-senha', "SENHA", array('required', 'min_length[3]'));
        if ($this->form_validation->run() == FALSE) {
            $this->pag_login();
        } else {

            $usuario = $this->input->post("user-usuario");
            $senha = $this->input->post("user-senha");
            $this->db->where('user_email', $usuario);
            $this->db->where('user_senha', sha1(md5($senha)));
            $userlogado = $this->db->get("tbl_usuarios")->result();
            if (count($userlogado) == 1) {
                $dadosSessao['userlogado'] = $userlogado[0];
                $dadosSessao['logado'] = TRUE;
                $this->session->set_userdata($dadosSessao);
                redirect(base_url("admin"));
            } else {
                $dadosSessao['userlogado'] = NULL;
                $dadosSessao['logado'] = FALSE;
                $this->session->set_userdata($dadosSessao);
                redirect(base_url("admin/login"));
            }
        }
    }

    public function logout() {
        $dadosSessao['userlogado'] = NULL;
        $dadosSessao['logado'] = FALSE;
        $this->session->set_userdata($dadosSessao);
        redirect(base_url("admin/login"));
    }

    public function cadastro() {
        if (verificaPermissao($this->session->userdata('logado'), $this->session->userdata('userlogado')->user_permissao, 2) == false) {
            exit;
        } else {

            $dados['permissao'] = $this->session->userdata('userlogado')->user_permissao;
            $dados['title'] = "Admin";
            $dados['subtitle'] = "Usuário";

            $this->load->view('backend/template/html-header', $dados);
            $this->load->view('backend/template/template');
            $this->load->view('backend/usuario/cadastrar');
            $this->load->view('backend/template/html-footer');
        }
    }
    public function cadastrar(){
            $this->load->library("form_validation");
            $this->form_validation->set_rules('user_nome', "NOME DO USUÁRIO", array('required', 'min_length[3]'));
            $this->form_validation->set_rules('user_email', "EMAIL DO USUÁRIO", array('trim', 'required','valid_email', 'is_unique[tbl_categorias.cat_nome]', 'min_length[3]'));
            $this->form_validation->set_rules('user_senha', "SENHA DO USUÁRIO", array('required', 'min_length[3]'));
            $this->form_validation->set_rules('user_senha_conf', "CONFIRMAÇÃO DA SENHA", array('required', 'min_length[3]', 'matches[user_senha]'));
            if($this->form_validation->run() == FALSE){
                $this->cadastro();
            }else{
                $nome = $this->input->post('user_nome');
                $email = $this->input->post('user_email');
                $senha = $this->input->post('user_senha');
                $permissao = $this->input->post('user_permissao');
                if($this->Muser->adicionar($nome, $email, $senha, $permissao)){
                    redirect(base_url("admin/usuarios"));
                }else{
                     $this->cadastro();
                }
            }

        }

}
