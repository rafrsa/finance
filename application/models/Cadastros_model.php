<?php

class Cadastros_model extends CI_Model {

    public function test(){
        $this->db = $this->load->database('mysql', TRUE);

        //$this->db->where("user_email", $email);

        $query = $this->db->get("categorias");
        return $query->result_array();
    }
}