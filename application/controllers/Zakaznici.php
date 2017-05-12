<?php

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Zakaznici_model');
        $this->load->helper('url_helper');
    }
	
	public function index() 
    {
        $data['zakaznici'] = $this->Zakaznici_model->getCustomers();
        $data['title'] = 'Zakaznici';

		$this->load->view('template/header', $data);
		$this->load->view('zakaznici/index', $data);
		$this->load->view('template/footer');
	}
}