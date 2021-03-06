<?php
  class Jogadores_model extends CI_Model {

    public function __construct() {
      $this->load->database();
    }

    public function get_jogadores($id = FALSE) {
      if ($id === FALSE) {
        $query = $this->db->get_where('Jogadores', array('disponivel' => 2));

        $jogadores = $query->result_array();
        foreach ( $jogadores as &$jogador ) {
            $jogos = $this->db->order_by('gameId', 'dsc')->get_where(
                                'Info_Jogadores',
                                array(
                                    'playerId' => $jogador['id'],
                                    'stars >' => 0,
                                    ),
                                2,0)->result_array();

            $jogador['jogos'] = $jogos;
        }

        return$jogadores; 
      }

      $query = $this->db->get_where(
                                    'Info_Jogadores', 
                                    array(
                                          'playerId' => $id, 
                                          'stars >' => 0
                                          )
                                    ,5,0);

      $jogador_info = $query->result_array();

      $jogador = $this->db->get_where(
                                    'Jogadores',
                                    array(
                                        'id' => $id
                                        ),1,0);
      $jogador = $jogador->result_array();

      $jogador_info = array('jogos' => $jogador_info, 'jogador' => $jogador);

      return $jogador_info;
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

    public function set_status($status, $playerID) {
      $data = array(
                    'disponivel'  => $status
                   );

      $this->db->where('id', $playerID);
      return $this->db->update('Jogadores', $data);

      return json_encode(array( 0 => $status, 1 => $playerID ));
    }
  }
