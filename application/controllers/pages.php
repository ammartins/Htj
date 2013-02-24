<?php

class Pages extends CI_Controller {
  public function view($page = 'home') {
    // Load Twiggy
    $this->load->spark('twiggy/0.8.5'); 
    if ( !file_exists('application/views/pages/'.$page.'.php')) {
      //Whoops, we don't have a page for that!
      show_404();
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter
    $this->twiggy->display();
  }
}
