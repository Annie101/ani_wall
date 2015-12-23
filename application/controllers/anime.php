<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anime extends CI_Controller {
	var $titles;
	var $data;

	public function __construct(){
		parent::__construct();
		$this->load->model('Title_Model');
		$this->load->model('Picture_Model');
		$this->load->model('Request_Model');
		$this->load->helper('url');
	}

	public function index($title = null){
		if(!empty($title)){
			$this->anime($title);
			return;
		}
		if($_POST)$this->search($_POST);
		$this->_data['titles'] = $this->Title_Model->getAllTitles();

		for($i=0;$i<count($this->_data['titles']);$i++){
			$this->_data['url'][$i] = $this->Picute_Model->getAllUrlsFromTitleId($this->_data['titles'][$i]->id);
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

	public function anime($title){
		var_dump($titleId);
		$titleId = $this->Title_Model->getIdFromName($title);
		var_dump($titleId);
		$data['animeTitle'] = $title;
		//$this->load->view('anime',$data);
		$this->load->view('movie',$data);
	}
}
