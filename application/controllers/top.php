<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Top extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Title_Model');
		$this->load->model('Picture_Model');
		$this->load->model('Movie_Model');
		$this->load->model('Request_Model');
		$this->load->helper('url');
	}

	/* トップページ */
	public function index($animeTitle = null){

		if($_POST)$this->search($_POST);
		$data['titles'] = $this->Title_Model->getAllTitles();

		for($i=0;$i<count($data['titles']);$i++){
			$data['url'][$i] = $this->Picture_Model->getAllUrlsFromTitleId($data['titles'][$i]->id);
		}
		$this->loadView("top",$data);
	}

	/* アニメページ */
	public function anime($title = null,$contents=null){
		$titleId = $this->Title_Model->getIdFromName(str_replace("%20", " ", $title));
		$titleName = $this->Title_Model->getNameFromId($titleId);
		//if($_POST)$this->search($_POST);

		$data['titles'] = $this->Title_Model->getAllTitles();
		$data['titleName'] = $titleName;
		$data['description'] = $this->Title_Model->getDescriptionFromId($titleId);
		$data['movie'] = $this->Movie_Model->getVideoIdFromTitleId($titleId);
		$data['url'] = $this->Picture_Model->getUrlsFromTitleId($titleId);
		$data['tag'] = str_replace(" ","",strtolower($titleName));
		$data['animeTitle'] = $titleName;
		if(empty($contents)){
			$this->loadView("anime",$data);
		}else if($contents == "movie"){
			$this->loadView("movie",$data);
		}else if($contents == "illustration"){
			$this->loadView("illustration",$data);
		}else if($contents == "instagram"){
			$this->loadView("instagram",$data);
		}
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
