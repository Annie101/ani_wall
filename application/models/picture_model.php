<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Picture_Model extends CI_Model {

        function __construct()
        {
                parent::__construct();
        }

        public function getUrlFromTitleId($id){
                $sql = "SELECT url FROM picture ";
                $sql .= "WHERE title_id = {$id}";
                $query = $this->db->query($sql);
                $result = $query->result_array();
                return $result[0]['url'];
        }

        public function getRandomUrlFromTitleId($id){
                $sql = "SELECT url FROM picture ";
                $sql .= "WHERE title_id = {$id} ";
                $sql .= "ORDER title_id DESC";
                $query = $this->db->query($sql);
                $result = $query->result_array();
		shuffle($result);
               return $result[0]['url'];
        }

        public function getAllUrlsFromTitleId($artistId){
                $sql = "SELECT url FROM picture ";
                $sql .= "WHERE title_id = {$artistId} ";
                $sql .= "AND delete_flag = 0";
                $query = $this->db->query($sql);
                $result = $query->result();
                return $result;
        }

        public function getUrlsFromTitleId($titleId){
                $sql = "SELECT id,url FROM picture ";
                $sql .= "WHERE title_id = {$titleId} ";
                $sql .= "AND delete_flag = 0";
                $query = $this->db->query($sql);
                $result = $query->result();
                return $result;
        }

	public function getContentsNumFromTitleId($artistId){
                $sql = "SELECT count(*) FROM picture ";
                $sql .= "WHERE title_id = {$artistId} ";
                $sql .= "delete_flag = 0";
                $query = $this->db->query($sql);
                $result = $query->result_array();
                return $result[0]['count(*)'];
	}
}
