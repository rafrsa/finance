<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastros extends CI_Controller {

	public function index()
	{
	}

    public function contas()
    {
        $this->load->view("cadastros/contas");
    }

    public function faturasMensais()
    {
    }

    public function categorias()
    {
    }
}
