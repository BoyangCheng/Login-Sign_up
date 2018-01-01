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
	    public function sign_up()
    {
		 $this->load->library('form_validation');
	if(isset($_POST[username]))
		$this->form_validation->set_rules('username','username','required');

	if ($this->form_validation->run()==true)
		echo "sign up successfully";
      $this->load->view('sign_up');
  
    }

}

?>
