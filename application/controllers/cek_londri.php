<?php

class Cek_londri Extends CI_Controller{

    public function index()
    {
       $this->load->view('frontend/header');
       $this->load->view('frontend/cek_londri');
       $this->load->view('frontend/cek_footer');
       
    }
}