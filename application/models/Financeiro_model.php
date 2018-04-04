<?php

class Financeiro_model extends CI_Model {

    public function test(){
        $this->db = $this->load->database('mysql', TRUE);

        //$this->db->where("user_email", $email);

        $query = $this->db->get("contas_pagar");
        return $query->result_array();
    }
}