<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Request_Model extends CI_Model {

        function __construct()
        {
                parent::__construct();
        }

        public function insertRequestAnime($content){
                $sql = "INSERT INTO request (content,created_at) VALUES ('".$content."',".time().");";
                $query = $this->db->query($sql);
                return;
        }
}
