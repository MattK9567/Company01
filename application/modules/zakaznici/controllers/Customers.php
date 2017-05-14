<?php

class Customers extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function addCustomer()
    {
        $this->template->admin_template();
    }
}