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

    public function nova(){
        $this->load->view("cadastros/nova_categoria");
    }

    public function salvarNovaCategoria(){

        if(isset($_POST["txtNomeCategoria"])){
            $idCategoria = $this->input->post("txtIdCategoria");
            $msgRetorno = 2;
        }else{
            $idCategoria = false;
            $msgRetorno = 3;
        }

        $nomeCategoria = $this->input->post("txtNomeCategoria");

        $this->load->model("Cadastros_model");

        $this->Cadastros_model->gravarCategoria($nomeCategoria, $idCategoria);
        redirect("cadastros/categorias/". $msgRetorno);
    }

    public function editarCategoria($id){
        $this->load->model("Cadastros_model");

        $data = array(
            'id' => $id,
            'nomeCategoria' => $this->Cadastros_model->listarCategorias($id)
        );

        $this->load->view("cadastros/nova_categoria", $data);
    }
}
