<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
	
	var $getUrl;
	var $author;
	var $sitename;
	var $thumbnail;

	public function __construct()
	{
		parent::__construct();

		$this->getUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$this->author = '';
		$this->sitename = 'Celebes Maritim';
		$this->thumbnail = base_url() . 'assets/logo/logo.jpg';
	}

	function index()
	{
		$this->data['Menu'] = 'Home';

		$this->data['Title'] = $this->sitename . ' | ' . $this->data['Menu'];
		$this->data['Author'] = $this->author;
		$this->data['Keyword'] = 'Celebes Maritim';
		$this->data['Description'] = 'Celebes Maritim';

		$this->data['MetaTitle'] = $this->sitename . ' | ' . $this->data['Menu'];
		$this->data['Url'] = $this->getUrl;
		$this->data['SiteName'] = $this->sitename . ' | ' . $this->data['Menu'];
		$this->data['Image'] = $this->thumbnail;

		return view('Home.views.index', $this->data);
	}

}
