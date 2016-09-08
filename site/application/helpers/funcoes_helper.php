<?php
defined('BASEPATH') OR exit('No direct script access allowed');

If(!function_exists('set_msg')):
    function set_msg($msg=NULL)
    {
        //Pega a instancia da classe
        $ci = & get_instance();
        $ci->session->set_userdata('aviso', $msg);
    }
endif;

If(function_exists('get_msg')):
    function get_msg($destroy=true)
    {
        $ci = & get_instance();
        $retorno = $ci->session->userdata('aviso');
        //Se esta destruido var_dump $_session para visualizar os dados de sessao
        If($destroy) $ci->session->unset_userdata('aviso');
            return $retorno;
    }
endif;