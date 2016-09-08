<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        //utilizar css e js nos sites dentro do construtor, ficará disponivel apenas para a classe, se for em autoload, ficará visivel para todo o projetos
        $this->load->helper('url');

    }

    public function index()
	{
	    $dados['titulo'] = 'Rbernardi';
		$this->load->view('index.html', $dados);
	}

    public function clientes()
    {
        $dados['titulo'] = 'Clientes - Rbernardi';
        $this->load->view('clientes', $dados);
    }

    public function servicos()
    {
        $dados['titulo'] = 'servicos - Rbernardi';
        $this->load->view('servicos', $dados);
    }

    public function sobre()
    {
        $dados['titulo'] = 'sobre - Rbernardi';
        $this->load->view('Sobre', $dados);
    }

    public function contato()
    {
        //chamando livravrias e helpers
        $this->load->helper('form');
        $this->load->library(array('form_validation', 'email'));
        //regras Validando formularios
        $this->form_validation->set_rules('nome', 'Nome', 'trim|require');
        $this->form_validation->set_rules('email', 'Email', 'trim|require|valid_email');
        $this->form_validation->set_rules('assunto', 'Assunto', 'trim|require');
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|require');
        //Verificação da validação
        If($this->form_validation->run() == False):
            $dados['formerror'] = validation_errors();
        else:
            $dados_form = $this->input->post();
            $this->email->from($dados_form['email'], $dados_form['nome']);
            $this->email->to('ramonss.bque@gmail.com');
            $this->email->subject($dados_form['assunto']);
            $this->email->message($dados_form['mensagem']);
            If($this->email->send()):
                $dados['formerror'] = 'Email enviado com sucesso';
            else:
                $dados['formerror'] = 'erro ao enviar email';
            endif;
            print_r($dados_form);
            $dados['formerror'] = 'A validação funcionou corretamente';
        endif;

        $dados['titulo'] = 'Fale Comigo- Rbernardi';
        $this->load->view('contato', $dados);
    }

    function cadastrar()
    {
        $this->load->helper('form');
        $this->load->view('cadastrar');
        $this->load->library('form_validation');
        //validando formularios
        $this->form_validation->set_rules('email', 'Email', 'email|required|trim|valid_email');
        $this->form_validation->set_rules('nome', 'Nome', 'required|trim');
        $this->form_validation->set_rules('senha', 'trim|required');
        $this->form_validation->set_rules('senha2', 'trim|required|matches[senha]');

        //Verificação da validação
        If($this->form_validation->run() == False):
            $dados['formerror'] = validation_errors();
        else:
            $dados_form = $this->input->post();
            $dados['formerror'] = 'A validação funcionou corretamente';
        endif;
    }


}
