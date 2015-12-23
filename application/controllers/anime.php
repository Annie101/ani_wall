<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anime extends CI_Controller {
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

	public function index($animeTitle = null){
		if(!empty($animeTitle)){
			$this->anime($animeTitle);
			return;
		}

		if($_POST)$this->search($_POST);
		$this->_data['artists'] = $this->Artist_Model->getAllArtists();

		for($i=0;$i<count($this->_data['artists']);$i++){
			$this->_data['url'][$i] = $this->Contents_Model->getAllUrlsFromArtistId($this->_data['artists'][$i]->id);
		}
		$this->loadView();
	}

	public function loadView(){
		$this->load->view('top',$this->_data);
	}

	public function search(){
	        $anime = htmlspecialchars($_POST['anime']);
		$this->Request_Model->insertRequestAnime($anime);   
	}

	public function anime($animeTitle){
		$data['animeTitle'] = $animeTitle;
		$this->load->view('anime',$data);
	}
}
