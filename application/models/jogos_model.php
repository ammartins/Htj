<?php
  class Jogos_model extends CI_Model {

    public function __construct() {
      $this->load->database();
    }

    public function get_jogos($id = FALSE) {
      if ($id === FALSE) {
        $query = $this->db->get_where('Jogos');
        return $query->result_array();
      }

      $query = $this->db->get_where(
                                    'Jogos', 
                                    array(
                                          'gameId' => $id, 
                                          )
                                    ,10,0);
      $jogo = $query->result_array();

      $query = $this->db->get_where(
                                    'Info_Jogadores',
                                    array(
                                          'gameId' => $id,
                                          'stars >' => 0, 
                                         )
                                    ,15,0);

      $jogadores = $query->result_array();

      $res = array( $jogo, $jogadores );

      return $res;
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
