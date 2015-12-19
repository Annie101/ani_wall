<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
	var $artists;
	var $data;

	public function __construct(){
		parent::__construct();
		$this->load->model('Artist_Model');
		$this->load->model('Contents_Model');
		$this->load->model('Request_Model');
		$this->load->helper('url');
		$this->_artistId = 1;
	}

	public function index(){
		if($_POST)$this->search($_POST);
		$this->_data['artists'] = $this->Artist_Model->getAllArtists();

		for($i=0;$i<count($this->_data['artists']);$i++){
			$this->_data['url'][$i] = $this->Contents_Model->getAllUrlsFromArtistId($this->_data['artists'][$i]->id);
		}
		//var_dump($this->_data['url']);
		$this->loadView();
	}

	public function loadView(){
		$this->load->view('menu',$this->_data);
	}

	public function search(){
	        $anime = htmlspecialchars($_POST['anime']);
		$this->Request_Model->insertRequestAnime($anime);   
	}
}
