<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Title_Model extends CI_Model {

        function __construct()
        {
                parent::__construct();
        }

        public function getIdFromName($name){
                $sql = "SELECT id FROM title ";
                $sql .= "WHERE name = '{$name}' ";
                $sql .= "AND delete_flag = 0 ";
                $query = $this->db->query($sql);
                $result = $query->result_array();
                return $result[0]['id'];
        }

        public function getNameFromId($id){
                $sql = "SELECT name FROM title ";
                $sql .= "WHERE id = {$id}";
                $query = $this->db->query($sql);
                $result = $query->result_array();
                return $result[0]['name'];
        }

        public function getDescriptionFromId($id){
                $sql = "SELECT description FROM title ";
                $sql .= "WHERE id = {$id}";
                $query = $this->db->query($sql);
                $result = $query->result_array();
                return $result[0]['description'];
        }

        public function getAllTitles(){
                $sql = "SELECT id,name FROM title ";
                $sql .= "WHERE delete_flag = 0 ";
                $sql .= "ORDER BY name ASC";
                $query = $this->db->query($sql);
                $result = $query->result();
                return $result;
        }

        public function getOtherTitles($titleId){
                $sql = "SELECT name,icon,package_name FROM title ";
                $sql .= "WHERE delete_flag = 0 ";
                $sql .= "And id != {$titleId} ";
                $query = $this->db->query($sql);
                $result = $query->result();
                return $result;
        }
}
