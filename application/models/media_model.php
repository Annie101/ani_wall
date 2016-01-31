<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Media_Model extends CI_Model {

        function __construct()
        {
                parent::__construct();
        }

        public function getMedia($mediaId){
                $sql = "SELECT * FROM media ";
                $sql .= "WHERE id = {$mediaId} ";
                $query = $this->db->query($sql);
                $result = $query->result();
                return $result[0];
        }
}
