<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Request_Model extends CI_Model {

        function __construct()
        {
                parent::__construct();
        }

        public function getArtistName($id){
                $sql = "SELECT name FROM artist ";
                $sql .= "WHERE id = {$id}";
                $query = $this->db->query($sql);
                $result = $query->result_array();
                return $result[0]['name'];
        }

        public function getAllArtists(){
                $sql = "SELECT name FROM artist ";
                $sql .= "WHERE delete_flag = 0";
                $query = $this->db->query($sql);
                $result = $query->result();
                return $result;
        }

        public function insertRequestAnime($anime){
                $sql = "INSERT INTO request_anime (anime,created_at) VALUES ('".$anime."',".time().");";
                $query = $this->db->query($sql);
                return;
        }
}
