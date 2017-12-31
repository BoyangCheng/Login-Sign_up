<?php
class Auth extends CI_Controller
{
  public function index()
  {
    echo "jj";
  }
    public function login()
    {
      $this->load->view('login');
    }

}

?>
