<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_Log_Model extends CI_Model {

        function __construct()
        {
                parent::__construct();
        }

	public function insertViewLog($titleId,$contentTypeId,$contentId){
		$sql = "INSERT INTO view_log (title_id,content_type_id,content_id,created_at) VALUES (".$titleId.",".$contentTypeId.",".$contentId.",".time().");";
                $query = $this->db->query($sql);
		return;
	}
}
