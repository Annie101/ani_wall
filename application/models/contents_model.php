<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contents_Model extends CI_Model {

        function __construct()
        {
                parent::__construct();
        }

        public function getUrlFromArtistId($id){
                $sql = "SELECT url FROM contents ";
                $sql .= "WHERE artist_id = {$id}";
                $query = $this->db->query($sql);
                $result = $query->result_array();
                return $result[0]['url'];
        }

        public function getRandomUrlFromArtistId($id){
                $sql = "SELECT url FROM contents ";
                $sql .= "WHERE artist_id = {$id} ";
                $sql .= "ORDER artist_id DESC";
                $query = $this->db->query($sql);
                $result = $query->result_array();
		shuffle($result);
               return $result[0]['url'];
        }

        public function getAllUrlsFromArtistId($artistId){
                $sql = "SELECT url FROM contents ";
                $sql .= "WHERE artist_id = {$artistId} ";
                $sql .= "AND del_flag = 0";
                $query = $this->db->query($sql);
                $result = $query->result();
                return $result;
        }

	public function getContentsNumFromArtistId($artistId){
                $sql = "SELECT count(*) FROM contents ";
                $sql .= "WHERE artist_id = {$artistId}";
                $sql .= " AND del_flag = 0";
                $query = $this->db->query($sql);
                $result = $query->result_array();
                return $result[0]['count(*)'];
	}
}
