<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends MY_Controller {

        public function __construct(){
                parent::__construct();
                require_once(APPPATH.'core/MY_Controller.php');
                $this->load->model('User_Model');
                $this->load->model('Contents_Model');
                $this->load->helper('url');
        }

        public function setNewUser(){
                $data = array(
                'device',
                'udid',
                );
                $this->getPost($data);
                if($this->_post['device'] === false
                || $this->_post['udid'] === false
                ){
                        $this->returnError('invalied_post_value');
                        return;
                }
                $User_TB = new User_TB;
                $User_TB->_device = $this->_post['device'];
                $User_TB->_udid = $this->_post['udid'];
                $User_TB->_createdAt = $this->_time;
                $User_TB->_updatedAt = $this->_time;
                $User_TB->_state = "1";
                $this->_return['userId'] = $this->User_Model->insertNewUser($User_TB);
                $this->returnSuccess();
        }
}
