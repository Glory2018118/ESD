<?php
/**
 * Created by PhpStorm.
 * User: DREAM
 * Date: 12/14/2020
 * Time: 9:44 AM
 */
?>
<?php

class Checkout extends CI_Controller {



  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url_helper');
    $this->load->library('session');
  }

  public function index()
  {
    $this->load->view('common/header_html');
    $this->load->view('common/header');
    $this->load->view('checkout');
    $this->load->view('common/footer_html');
    $this->load->view('common/footer');
  }
}

?>