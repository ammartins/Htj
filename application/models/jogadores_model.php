<?php
  class Jogadores_model extends CI_Model {

    public function __construct() {
      $this->load->database();
    }

    public function get_jogadores($id = FALSE) {
      if ($id === FALSE) {
        $query = $this->db->get_where('Jogadores', array('disponivel' => 2));
        return $query->result_array();
      }

      $query = $this->db->get_where(
                                    'Info_jogadores', 
                                    array(
                                          'playerId' => $id, 
                                          'stars >' => 0
                                          )
                                    ,10,0);
      return $query->result_array();
    }

    public function createPlayer() {
      $data = array(
                      'id' => $this->input->post("id"),
                      'name' => $this->input->post("name"),
                      'disponivel' => 2,
                      'birthday' => $this->input->post("date"),
                      'Info' => $this->input->post("description"),
                    );

      return $this->db->insert('Jogadores', $data);
    }
  }
