<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movie_Model extends CI_Model {

        function __construct()
        {
                parent::__construct();
        }

        public function getVideoIdFromTitleId($titleId){
                $sql = "SELECT video_id FROM movie ";
                $sql .= "WHERE title_id = {$titleId}";
                $query = $this->db->query($sql);
                $result = $query->result_array();
          	return $result[0]['video_id'];
        }
}
