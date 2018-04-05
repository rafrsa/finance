<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastros extends CI_Controller {

    public $title = "";
    public $js = ["cadastros"];
    public $css = [];

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

    public function categorias($retorno = false)
    {
        $this->load->model("Cadastros_model");

        $data = array(
            'listaCategorias' => $this->Cadastros_model->listarCategorias(),
            'retorno' => $retorno
        );

        $this->load->view("cadastros/categorias", $data);
    }

    public function excluirCategoria($id)
    {
        $this->load->model("Cadastros_model");

        $this->Cadastros_model->excluirCategoria($id);

        redirect("cadastros/categorias/1");
    }
}
