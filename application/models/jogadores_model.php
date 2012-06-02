<?php
  class Jogadores_model extends CI_Model {

    public function __construct() {
      $this->load->database();
    }

    public function get_jogadores($id = FALSE) {
      if ($id === FALSE) {
        //"SELECT a.name, b.position, b.stars, b.scored FROM `Jogadores` a JOIN Info_Jogadores b WHERE a.id = b.playerId and b.gameId = 62087005 and position != '-' order by b.position"
        // Select all Players - ForEach Get the 2 last played games
        $this->db->select('Jogadores.*');
        $this->db->from('Jogadores');
        $query = $this->db->get();

        $jogadores = $query->result_array();
        foreach ( $jogadores as &$jogador ) {
            $jogos = $this->db->order_by('gameId', 'dsc')->get_where(
                                'Info_jogadores',
                                array(
                                    'playerId' => $jogador['id'],
                                    'stars >' => 0
                                    ),
                                2,0)->result_array();

            $jogador['jogos'] = $jogos;
        }

        return$jogadores; 
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
