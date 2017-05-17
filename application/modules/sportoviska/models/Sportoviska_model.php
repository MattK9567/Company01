<?php

class Sportoviska_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_sportoviska()
    {
        $query = $this->db->get('sportoviska');
        return $query->result();
    }
}