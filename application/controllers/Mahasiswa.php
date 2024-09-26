<?php

class mahasiswa extends CI_Controller
{
    public function index()
    {
    	$data['judul'] = 'RPOJECT LELIE KRISTIN';
    	$this->load->view('templates/header', $data);
    	$this->load->view('mahasiswa/index', $data);
    	$this->load->view('templates/footer');
    }
}