<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Top extends CI_Controller {
	var $artistId;
	var $data;

	public function __construct(){
		parent::__construct();
		$this->load->model('Artist_Model');
		$this->load->model('Contents_Model');
		$this->load->model('Request_Model');
		$this->load->helper('url');
	}

	public function test(){
		echo "test";
	}

	public function index($artistId,$page){
		//if($artistId == 8)$artistId = 13;
		//if($artistId == 9)$artistId = 14;
		if($artistId == 13)$artistId = 8;

		$this->_data['artistName'] = $this->Artist_Model->getArtistName($artistId);
		$this->setPages($artistId,$page);

		$url = $this->Contents_Model->getAllUrlsFromArtistId($artistId);
		shuffle($url);
		$this->_data['url'] = $url[$page]->url;
		$this->_data['artistId'] = $artistId;

		$this->getMenu($artistId);
		$this->loadView();
	}

	public function setPages($artistId,$page){
		$endPageNumber = $this->Contents_Model->getContentsNumFromArtistId($artistId) -1 ;
		if($page >= $endPageNumber){
			$this->_data['PrePage'] = $page - 1;
			$this->_data['NextPage'] = 0;
		}else if($page == 0){
			$this->_data['PrePage'] = $endPageNumber;
			$this->_data['NextPage'] = $page + 1;
		}else{
			$this->_data['PrePage'] = $page - 1;
			$this->_data['NextPage'] = $page + 1;
		}
	}

	public function loadView(){
		$this->load->view('top',$this->_data);
	}

	public function getMenu($artistId){
		$this->_data['artists'] = $this->Artist_Model->getOtherArtists($artistId);
	}

	public function getImage($artistId){
		$imageUrl = $this->Contents_Model->getRandomUrlFromArtistId($artistId);
		$arr = array('url' => $imageUrl);
		echo json_encode($arr);
	}
}
