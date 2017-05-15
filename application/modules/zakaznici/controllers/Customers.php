<?php

class Customers extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Customers_model');
        $this->load->database();
    }

    public function index()
    {
        $data['content_view'] = 'dashboard/dashboard1_v';
        $data['customers_table'] = $this->create_customers_table();
        $this->template->admin_template($data);
    }

    function addCustomer()
    {
        $this->template->admin_template();
    }

    function post_customer()
    {
        //dokončiť metódu
    }

    public function create_customers_table()
    {
        $customers = $this->Customers_model->get_all_customers();
        $customers_table = "";
        

        if(count($customers) > 0)
        {
            $counter = 1;
            foreach ($customers as $key => $value)
            {
                $customers_table .= "<tr>";
                $customers_table .= "<td>{$counter}</td>";
                $customers_table .= "<td>{$value->meno}</td>";
                $customers_table .= "<td>{$value->priezvisko}</td>";
                $customers_table .= "<td>{$value->email}</td>";
                $customers_table .= "<td>{$value->nazov_firmy}</td>";
                $customers_table .= "</tr>";
            }
        }
        return $customers_table;
    }
}