<?php

class Sportoviska extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sportoviska_model');
    }

    public function index()
    {
        $data['content_view'] = 'dashboard/dashboard3_v';
        $data['sportoviska_table'] = $this->create_sportoviska_table();
        $this->template->admin_template($data);
    }

    function addSportovisko()
    {
        $this->template->admin_template();
    }

    function post_sportovisko()
    {
        //dokončiť metódu
    }

    public function create_sportoviska_table()
    {
        $sportoviska = $this->Sportoviska_model->get_all_sportoviska();
        $sportoviska_table = "";

        if(count($sportoviska) > 0)
        {
            $counter = 1;
            foreach ($sportoviska as $key => $value)
            {
                $sportoviska_table .= "<tr>";
                $sportoviska_table .= "<td>{$counter}</td>";
                $sportoviska_table .= "<td>{$value->nazov}</td>";
                $sportoviska_table .= "<td>{$value->typ_sportoviska_ID}</td>";
                $sportoviska_table .= "</tr>";
            }
        }
        return $sportoviska_table;
    }
}