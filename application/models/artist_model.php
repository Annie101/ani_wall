<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artist_Model extends CI_Model {

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
                $sql = "SELECT id,name FROM artist ";
                $sql .= "WHERE del_flag = 0 ";
                $sql .= "ORDER BY name ASC";
                $query = $this->db->query($sql);
                $result = $query->result();
                return $result;
        }

        public function getOtherArtists($artistId){
                $sql = "SELECT name,icon,package_name FROM artist ";
                $sql .= "WHERE del_flag = 0 ";
                $sql .= "And id != {$artistId} ";
                $query = $this->db->query($sql);
                $result = $query->result();
                return $result;
        }
}
