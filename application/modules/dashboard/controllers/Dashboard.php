<?php

class Dashboard extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->module(['Customers']);
    }

    function index()
    {
        $data['content_view'] = 'dashboard/dashboard1_v';

        $this->template->admin_template($data);
    }

    function dash2()
    {
        $data['content_view'] = 'dashboard/dashboard2_v';

        $this->template->admin_template($data);
    }

    function dash3()
    {
        $data['content_view'] = 'dashboard/dashboard3_v';

        $this->template->admin_template($data);
    }

    function addCustomer()
    {
        $data['content_view'] = 'zakaznici/addCustomer_v';
        
        $this->template->admin_template($data);
    }

    function addSportovisko()
    {
        $data['content_view'] = 'sportoviska/addSportovisko_v';
        
        $this->template->admin_template($data);
    }

    function addRezervacia()
    {
        $data['content_view'] = 'rezervacie/addRezervacia_v';
        
        $this->template->admin_template($data);
    }
}