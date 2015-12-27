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
		$data['color1']= "light-blue darken-2";
		$data['color2']= "light-blue lighten-2";
		$data['color3']= "light-blue";

		if($_POST)$this->search($_POST);
		$data['titles'] = $this->Title_Model->getAllTitles();

		for($i=0;$i<count($data['titles']);$i++){
			$data['url'][$i] = $this->Picture_Model->getAllUrlsFromTitleId($data['titles'][$i]->id);
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
