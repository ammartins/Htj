<?php


class Jogadores extends CI_Controller {
  
  public function __construct() {
    parent::__construct();
    $this->load->model('jogadores_model');
    $this->load->spark('twiggy/0.8.5');
    //$this->output->enable_profiler(TRUE);
  }

  /*
   *
   * Changes the status of the Player : 0 Retired, 1 Main Team, 2 Junior Team
   * Ajax Call only
   * return success : 1 ? 0
   *
  */
  public function setStatus() {
    if ( !$this->input->is_ajax_request() ) {
      show_404();
    }

    $status = $this->input->post("status");
    $playerID = $this->input->post("playerID");

    //TODO check the Return to the AXAJ call
    echo $this->jogadores_model->set_status($status, $playerID);
  }

  private function getStatus() {

    $options = array(
                    0 => 'Retired',
                    1 => 'Main Team',
                    2 => 'Playing',
                    );

    return $options;
  }

  public function index() {
    $jogadores = $this->jogadores_model->get_jogadores();

    $this->twiggy->set('jogadores', $jogadores);
    $this->twiggy->display('Jogadores/index');
  }

  public function view($view, $id) {
    $infoArray = $this->jogadores_model->get_jogadores($id);

    if ( empty($infoArray) || empty($view) || empty($id) ) {
      show_404();
    }

    $this->twiggy->set('options', $this->getStatus());
    $this->twiggy->set('player', $infoArray['jogador'][0]);
    $this->twiggy->set('games', $infoArray['jogos']);
    $this->twiggy->display('Jogadores/view');
  }

  public function create() {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a news item';

    $this->form_validation->set_rules('id', 'id', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->twiggy->display('Jogadores/create');
    } else {
      $this->jogadores_model->createPlayer();
      redirect('jogadores/');
    }
  }
}
