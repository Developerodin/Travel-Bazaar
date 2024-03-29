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
		$this->load->view('header');
		$this->load->view('main');
		$this->load->view('footer');
	}
	public function footer_form()
	{
		if (empty($_POST)) {
			redirect(base_url());
		}
		// echo json_encode($_POST);
		// die();
	
		$this->load->library('email');
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'theodinjaipur@gmail.com';
		$config['smtp_pass'] = 'ilhphiqmihlvezxk';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not
	
		$this->email->initialize($config);
	
		$from = $_POST['email'];
		$to = 'travel@travelbazaar.com.au';
		$subject = 'Subscribe Requset';
		$message = 'Hello Team, <br /> You have a Request from TravelBazaar Portal. <br />';
		unset($_POST['g-recaptcha-response']);
	
		foreach ($_POST as $key => $value) {
			$message .= $key . '- ' . $value . '<br>';
		}
	
		// Add the file link to the message
		
		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
	
		// Send the email
		if ($this->email->send()) {
			echo "Email sent successfully"; // For debugging
		} else {
			echo "Email sending failed"; // For debugging
		}
	
		redirect(base_url(''));
	}

}
