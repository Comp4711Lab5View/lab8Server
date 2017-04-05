<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu');
        $this->data['pagetitle'] = 'Decoupling Our Diner (Server)';
    }

    public function index()
	{
        $this->data['title'] = 'Decoupling Our Diner (Server)';
        //$this->data['pagebody'] = 'welcome_message';
        $this->data['content'] = 'go away';
        $this->render();
	}

}
