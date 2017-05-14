<?php

class Customers_model extends CI_Model
{
    public function get_all_customers()
    {
        $query = $this->db->get('zakaznici');
        return $query->result();
    }
}