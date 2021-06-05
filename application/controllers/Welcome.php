<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('url', 'form', 'nohp'));
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function send_message()
	{
		$no_hp   = hp($this->input->post('no_hp'));
		$message = $this->input->post('message');

		if ($this->agent->is_mobile()) {
			$linkWhatsapp = 'https://api.whatsapp.com/send?phone=' . $no_hp . '&text=';
		} else {
			$linkWhatsapp = 'https://web.whatsapp.com/send?phone=' . $no_hp . '&text=';
		}

		redirect($linkWhatsapp . urlencode($message));
	}
}
