<?php

class Rezervacie_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_rezervacie()
    {
        $query = $this->db->get('rezervacia');
        return $query->result();
    }
}