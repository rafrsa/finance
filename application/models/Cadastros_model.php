<?php

class Cadastros_model extends CI_Model {

    public function listarCategorias($id = false){
        $this->db = $this->load->database('mysql', TRUE);

        if($id){
            $this->db->where("id", $id);
        }

        $this->db->order_by('id', 'ASC');
        $query = $this->db->get("categorias");
        return $query->result_array();
    }

    public function excluirCategoria($id){
        $this->db = $this->load->database('mysql', TRUE);

        $this->db->where("id", $id);
        $this->db->delete('categorias');
    }

    public function gravarCategoria($nome, $id = false){
        $this->db = $this->load->database('mysql', TRUE);

        $data = array(
            'nome' => $nome
        );

        if($id){
            $set = array(
                'nome' => $nome
            );

            $this->db->set($set);
            $this->db->where("id", $id);
            $this->db->update('categorias');
        }else{
            $this->db->insert('categorias', $data);
        }
    }
}