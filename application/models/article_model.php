<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_Model extends CI_Model {

        function __construct()
        {
                parent::__construct();
        }

        public function getNewestDate(){
                $sql = "SELECT date FROM article ";
                $sql .= "ORDER BY date DESC LIMIT 1";
                $query = $this->db->query($sql);
                $result = $query->result_array();
                return $result[0]['date'];
        }

        public function getArticleByMediaId($mediaId){
                $sql = "SELECT * FROM article ";
                $sql .= "WHERE media_id = {$mediaId} ";
                $sql .= "AND delete_flag = 0 ";
                $sql .= "ORDER BY date DESC";
                $query = $this->db->query($sql);
                $result = $query->result();
               return $result;
        }

        public function getArticle($newestDate){
                $sql = "SELECT * FROM article ";
                $sql .= "WHERE delete_flag = 0 ";
                $sql .= "AND date < {$newestDate} ";
                $sql .= "ORDER BY date DESC ";
                $sql .= "LIMIT 20";
                $query = $this->db->query($sql);
                $result = $query->result();
               return $result;
        }

        public function getArticleByLimit($limit){
                $sql = "SELECT * FROM article ";
                $sql .= "WHERE delete_flag = 0 ";
                $sql .= "AND media_id = 1 ";
                $sql .= "ORDER BY date DESC ";
                $sql .= "LIMIT {$limit},20";
                $query = $this->db->query($sql);
                $result = $query->result();
               return $result;
        }
}
