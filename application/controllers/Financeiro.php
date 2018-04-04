<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financeiro extends CI_Controller {

	public function index()
	{
	}

    public function contaspagar()
    {
        $this->load->model("Financeiro_model");

        //var_dump($this->Financeiro_model->test());

        $this->load->view('financeiro/contaspagar');
    }

    public function contasreceber()
    {
        $this->load->view('financeiro/contasreceber');
    }
}
