<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

    public function index()
    {
        $this->load->view('artikel');
    }

}

/* End of file Artikel.php */