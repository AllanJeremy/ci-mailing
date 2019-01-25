<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	protected $data;

	
	public function __construct()
	{
		parent::__construct();
		$this->output->set_header('Access-Control-Allow-Origin: *');
		$this->data = [];
	}
	
	public function index()
	{
		$this->landing();
	}

	// Handle the form submission ~ NULL == Not submitted, TRUE ~ Success, FALSE ~ failure
	private function _handle_form_submit()
	{
		$email = $this->input->post('email');

		// If the email is not set, no need to attempt storage
		if(empty($email))
		{	return;	}

		// Store location information
		$this->load->helper('geo');
		$geo_data = get_visitor_geodata();

		$data = array(
			'email'=>$email,
			'country'=>@$geo_data['country'],
			'city'=>@$geo_data['city'],
		);
		
		$this->load->model('mailing_model');
		return $this->mailing_model->add($data);
	}

	public function landing()
	{
		$this->load->helper('form');
		$this->data['submit_status'] = $this->_handle_form_submit();
		$this->load->view('pages/landing',$this->data);
	}

}

/* End of file Site.php */
