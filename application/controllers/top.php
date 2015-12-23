<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Top extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Artist_Model');
		$this->load->model('Contents_Model');
		$this->load->model('Request_Model');
		$this->load->helper('url');
	}

	/* トップページ */
	public function index($animeTitle = null){

		if($_POST)$this->search($_POST);
		$data['artists'] = $this->Artist_Model->getAllArtists();

		for($i=0;$i<count($data['artists']);$i++){
			$data['url'][$i] = $this->Contents_Model->getAllUrlsFromArtistId($data['artists'][$i]->id);
		}
		$this->loadView("top",$data);
	}

	/* アニメページ */
	public function anime($animeTitle = null){
		if($_POST)$this->search($_POST);
		$data['artists'] = $this->Artist_Model->getAllArtists();
		$data['tag'] = str_replace("%20", "", strtolower($animeTitle));
		$data['animeTitle'] = str_replace("%20", " ", $animeTitle);
		$this->loadView("anime",$data);
	}

	public function loadView($page,$data){
		$this->load->view('header',$data);
		$this->load->view($page,$data);
		$this->load->view('footer');
	}

	public function search(){
	        $anime = htmlspecialchars($_POST['anime']);
		$this->Request_Model->insertRequestAnime($anime);   
	}

}
