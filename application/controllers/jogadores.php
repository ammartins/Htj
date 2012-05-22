<?php
  class Jogadores extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('jogadores_model');
  }

  public function index() {
    $data['jogadores'] = $this->jogadores_model->get_jogadores();

    $this->load->view('templates/header', $data);
    $this->load->view('jogadores/index', $data);
    $this->load->view('templates/footer');
  }

  public function view($page, $id) {
    $data['jogos'] = $this->jogadores_model->get_jogadores($id);

    if (empty($data['jogos'])) {
      show_404();
    }

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
