<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('website/index');
	}

	public function about()
	{
		$this->load->view('website/about');
	}
	public function shell()
	{
		$this->load->view('website/shell');
	}
public function	houghton(){
		$this->load->view('website/houghton');
}
public function contitech()
{
	$this->load->view('website/contitech');
}
public function quaker_houhton()
{
	$this->load->view('website/quaker_houhton');
}





public function send_mail(){
	$name = $this->input->post('name');
	$email = $this->input->post('email');
	$subject = $this->input->post('subject');
	$message = $this->input->post('message');

     $recipient = "jvdunung@dataone.in";
     $subject = "Mail From web";
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= 'From: '.$email."\r\n".
                 'Reply-To: '.$email."\r\n" .
                 'X-Mailer: PHP/' . phpversion();
     if(mail($recipient, $subject, $message, $headers)){
      $this->session->set_flashdata("contact_status","email_success");
     }
     else{
      $this->session->set_flashdata("contact_status","email_error");
     }
     header('location:'.base_url().'Welcome');
 }

}
