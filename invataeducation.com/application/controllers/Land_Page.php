<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Land_Page extends CI_Controller {

	public function index()
	{
		$data['tittle'] = "Company Profile";
            $this->load->view('company_profile/head_land_page', $data);
            $this->load->view('company_profile/land_page');
            $this->load->view('company_profile/footer_land_page');
	}
}
