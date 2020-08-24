<?php

class ControllerExtensionPaymentPaytabsAtfawry extends Controller
{
	public $_code = 'atfawry';

	private $paytabsController;


	public function init()
	{
		$this->load->library('paytabs_api');

		$this->paytabsController = new PaytabsCatalogController($this);
	}

	public function index()
	{
		$this->init();

		return $this->paytabsController->index($data);
	}


	public function callback()
	{
		$this->init();

		$this->paytabsController->callback();
	}
}
