<?php

class Rezervacie extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Rezervacie_model');
        $this->load->database();
    }

    public function index()
    {
        $data['content_view'] = 'dashboard/dashboard2_v';
        $data['rezervacie_table'] = $this->create_rezervacie_table();
        $this->template->admin_template($data);
    }

    function addRezervacia()
    {
        $this->template->admin_template();
    }

    function post_rezervacia()
    {
        //dokončiť metódu
    }

    public function create_rezervacie_table()
    {
        $rezervacie = $this->Rezervacie_model->get_all_rezervacie();
        $rezervacie_table = "";

        if(count($rezervacie) > 0)
        {
            $counter = 1;
            foreach ($rezervacie as $key => $value)
            {
                $rezervacie_table .= "<tr>";
                $rezervacie_table .= "<td>{$counter}</td>";
                $rezervacie_table .= "<td>{$value->sportoviska_ID}</td>";
                $rezervacie_table .= "<td>{$value->status_rezervacie_ID}</td>";
                $rezervacie_table .= "<td>{$value->zakaznici_ID}</td>";
                $rezervacie_table .= "<td>".date("Y-m-d",strtotime($value->datum))."</td>";
                $rezervacie_table .= "<td>{$value->cena}</td>";
                $rezervacie_table .= "<td>{$value->cas}</td>";
                $rezervacie_table .= "</tr>";
            }
        }
        return $rezervacie_table;
    }
}