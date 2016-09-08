<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Option_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_option($option_name)
    {
        $this->db->where('option_name', $option_name);
        $query = $this->db->get('options', 1);
        If($query->num_rows() == 1)
        {
            $row = $query->row();
            return $row->option_value;
        }
        else
        {
            return Null;
        }
    }
}