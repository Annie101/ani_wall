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

	public function index($animeTitle = null){
		$data['color1']= "orange lighten-1";
		$data['color2']= "white";
		$data['color3']= "orange";

		if($_POST){
			$this->search($_POST);
		}
		$data['titles'] = $this->Title_Model->getAllTitles();
		$data['newTitles'] = $this->Title_Model->getAllTitlesOrderByCreatedAt();
		for($i=0;$i<count($data['newTitles']);$i++){
			$data['url'][$i] = $this->Picture_Model->getAllUrlsFromTitleId($data['newTitles'][$i]->id);
		}
		$data['headerTitle'] = "Tokyo Track";
		$this->load->view('header',$data);
		$this->load->view('top',$data);
		$this->load->view('footer');
	}

	public function search(){
	        $anime = htmlspecialchars($_POST['anime']);
		$this->Request_Model->insertRequestAnime($anime);   
	}

}
