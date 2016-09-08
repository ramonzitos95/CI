<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Setup extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('option_model', 'option');
    }

    public function index()
    {
        If($this->option->get_option('setup_executado') == 1):
            //Setup ok, mostrar tela para editar os dados do setup
            redirect('setup/alterar','refresh');
        else:
            //Não instalado, mostra tela de setup
            redirect('setup/instalar', 'refresh');
        endif;

    }

    public function instalar()
    {
        If($this->option->get_option('setup_executado') == 1):
            //Setup ok, mostrar tela para editar os dados do setup
            redirect('setup/alterar','refresh');
        endif;

        //regra de validação
        $this->form_validation->set_rules('nome', 'NOME', 'trim|required');
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|min_length[6]|matches[senha]');

        //verifica a validação
        If($this->form_validation->run() == FALSE):
            If(validation_errors()):
                set_msg(validation_errors());
            EndIf;
        else:
            set_msg('<p>Validação ok<p>');
        endif;
        //Carrega view
        $dados['titulo'] = 'Ramon - Setup do Sistema';
        $dados['h2'] = 'Setup do Sistema';
        $this->load->view('painel/setup', $dados);
    }
}
