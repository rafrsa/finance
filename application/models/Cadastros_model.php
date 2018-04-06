<?php

class Cadastros_model extends CI_Model {

    public function listarCategorias(){
        $this->db = $this->load->database('mysql', TRUE);

        $this->db->order_by('id', 'ASC');
        $query = $this->db->get("categorias");
        return $query->result_array();
    }

    public function excluirCategoria($id){
        $this->db = $this->load->database('mysql', TRUE);

        $this->db->where("id", $id);
        $this->db->delete('categorias');
    }

    public function gravarCategoria($nome){
        $this->db = $this->load->database('mysql', TRUE);

        $data = array(
            'nome' => $nome
        );

        $this->db->insert('categorias', $data);
    }
}