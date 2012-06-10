<?php
  class Jogadores extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('jogadores_model');
  }

  private function getStatus($player) {
    $status = $player['disponivel'];

    $options = array(
                    0 => 'Retired',
                    1 => 'Main Team',
                    2 => 'Playing',
                    );

    $form = "<select name='status'>";
    for ( $i = 0; $i < sizeof($options); $i++ ) {
      if ( $status == $i ) {
        $form .= "<option selected value='$i'>$i - $options[$i]</option>";
      } else {
        $form .= "<option value='$i'>$i - $options[$i]</option>";
      }
    }
    $form .= '</select>';

    return $form;
  }

  public function index() {
    $data['jogadores'] = $this->jogadores_model->get_jogadores();

    $this->load->view('templates/header', $data);
    $this->load->view('jogadores/index', $data);
    $this->load->view('templates/footer');
  }

  public function view($page, $id) {
    $infoArray = $this->jogadores_model->get_jogadores($id);

    if (empty($infoArray)) {
      show_404();
    }

    $data['jogos'] = $infoArray['jogos'];
    $data['status'] = $this->getStatus($infoArray['jogador'][0]);
    $data['jogador'] = $infoArray['jogador'][0];

    $this->load->view('templates/header', $data);
    $this->load->view('jogadores/view', $data);
    $this->load->view('templates/footer');
  }

  public function create() {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a news item';

    $this->form_validation->set_rules('id', 'id', 'required');
    #$this->form_validation->set_rules('text', 'text', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data); 
      $this->load->view('jogadores/create');
      $this->load->view('templates/footer');
    } else {
      $this->jogadores_model->createPlayer();
#      $this->load->view('news/success');
    }
  }
}
