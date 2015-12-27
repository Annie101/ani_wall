<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anime extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Title_Model');
		$this->load->model('Picture_Model');
		$this->load->model('Movie_Model');
		$this->load->model('Request_Model');
		$this->load->helper('url');
	}

	public function index($title = null,$contents=null,$currentNumber = null){
		$data['color1']= "light-blue darken-2";
		$data['color2']= "light-blue lighten-2";
		$data['color3']= "light-blue";

		$data['color1']= "orange";
		$data['color2']= "orange lighten-5";
		$data['color3']= "orange darken-2";
		$titleId = $this->Title_Model->getIdFromName(str_replace("%20", " ", $title));
		$titleName = $this->Title_Model->getNameFromId($titleId);
		//if($_POST)$this->search($_POST);

		$data['titles'] = $this->Title_Model->getAllTitles();
		$data['titleName'] = $titleName;
		$data['description'] = $this->Title_Model->getDescriptionFromId($titleId);
		$data['movies'] = $this->Movie_Model->getVideoIdFromTitleId($titleId);
		$data['imageUrls'] = $this->Picture_Model->getUrlsFromTitleId($titleId);
		$data['tag'] = str_replace(" ","",strtolower($titleName));
		$data['animeTitle'] = $titleName;
		$data['headerTitle'] = "Tokyo Track｜".$titleName;
		//アニメページ
		if(empty($contents)){
			$this->loadView("anime",$data);
		//アニメ > 動画ページ
		}else if($contents == "movie"){
			$this->loadView("movie",$data);
		//アニメ > 画像ページ
		}else if($contents == "illustration"){
			if($currentNumber === null){
				$this->loadView("illustration",$data);
			}else{
				$data['currentNumber'] = $currentNumber;
				$data['previousNumber'] = $currentNumber -1;
				$data['nextNumber'] = $currentNumber +1;
				if($currentNumber == 0){	
					$data['previousNumber'] = count($data['imageUrls']) -1;
				}else if($currentNumber >= count($data['imageUrls'])-1){
					$data['nextNumber'] = 0;
				}
				$this->loadView("picture",$data);
			}
		//アニメ > instagramページ
		}else if($contents == "instagram"){
			$this->loadView("instagram",$data);
		}
	}

	public function loadView($page,$data){
		$this->load->view('header',$data);
		$this->load->view($page,$data);
		//$this->load->view('test',$data);
		$this->load->view('footer');
	}
}
