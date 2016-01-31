<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Title_Model');
		$this->load->model('Picture_Model');
		$this->load->model('Movie_Model');
		$this->load->model('Request_Model');
		$this->load->model('Media_Model');
		$this->load->model('Article_Model');
		$this->load->helper('url');
	}

	public function index($page = 0){
		date_default_timezone_set('Asia/Tokyo');
		$this->newestDate = $this->Article_Model->getNewestDate();
		$oldestDate = 1453613579;

		$limit = $page * 20;
		$data = $this->getArticle($limit);
		if(empty($data))return;

		$data['titleName'] = "News";
		$data['color1']= "orange lighten-1";
		$data['color2']= "white";
		$data['color3']= "orange";
		$data['pageType'] = "top";

		$data['titles'] = $this->Title_Model->getAllTitles();
		$data['headerTitle'] = "Tokyo Track";

		if($page == 0){
			$data['preButton'] = false;
		}else{
			$data['preButton'] = $page - 1;
		}
	
		if(count($data['entry']) < 20){
			$data['nextButton'] = false;
		}else{
			$data['nextButton'] = $page +1;
		}

		$this->load->view('header',$data);
		$this->load->view('news',$data);
		$this->load->view('footer');
	}

	public function getArticle($limit){
		$articles = $this->Article_Model->getArticleByLimit($limit);
		if(count($articles) < 1)return 0;
		for($i=0;$i<count($articles);$i++) {
			$data['entry'][$i]['title'] = $articles[$i]->title;
			$data['entry'][$i]['link'] = $articles[$i]->url;
			$data['entry'][$i]['date'] = $articles[$i]->date;
			$data['entry'][$i]['image'] = $articles[$i]->image;
			$media = $this->Media_Model->getMedia($articles[$i]->media_id);
			$data['entry'][$i]['media'] = $media->title;
			$this->newestDate = $articles[$i]->date;
		}
		return $data;
	}
}
