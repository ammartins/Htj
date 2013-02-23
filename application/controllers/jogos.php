<?php
class Jogos extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('jogos_model');
    $this->load->model('jogadores_model');
  }

  public function index() {
    $data['jogos'] = $this->jogos_model->get_jogos();

    $this->load->view('templates/header', $data);
    $this->load->view('jogos/index', $data);
    $this->load->view('templates/footer');
  }

  public function view($id) {
    $data['jogo'] = $this->jogos_model->get_jogos($id);

    if (empty($data['jogo'])) {
      show_404();
    }
    $data['jogos'] = array();

    $this->load->view('templates/header', $data);
    $this->load->view('jogos/index', $data);
    $this->load->view('templates/footer');
  }

  public function create() {
#$this->load->helper('form');
#$this->load->library('form_validation');

    $data['title'] = 'Create a news item';
    $jogadores = $this->jogadores_model->get_jogadores();

    $options = array();
    foreach ( $jogadores as $jogador ) {
      var_dump(($jogador['name']));
      if ( $jogador['jogos'] ) {
        $options[$jogador['id']] = "<option>".$jogador['name']." => ".$jogador['jogos'][0]['position']." : ".$jogador['jogos'][0]['stars']."</option>";
      } else {
        $options[$jogador['id']] = "<option>".$jogador['name']."</option>";
      }
    }

    $data['team_select'] = $options;
#$this->form_validation->set_rules('id', 'id', 'required');
#$this->form_validation->set_rules('text', 'text', 'required');

#if ($this->form_validation->run() === FALSE) {
    $this->load->view('templates/header', $data); 
    $this->load->view('jogos/create');
    $this->load->view('templates/footer');
#} else {
#  $this->jogos_model->createPlayer();
#      $this->load->view('news/success');
#}
  }
}
