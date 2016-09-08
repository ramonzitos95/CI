<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Exemplo1_model', 'apelido_model'); //Segundo parametro da função model é o apelido da classe
    }

    public function index()
    {
        $dados['titulo'] = 'Essa é a minha primeira view';
        $dados['conteudo'] = 'Conteudo da primeira view';
        $this->load->view('exemplo1', $dados);
    }

    public function login()
    {
       $this->apelido_model->salvar();
    }
}