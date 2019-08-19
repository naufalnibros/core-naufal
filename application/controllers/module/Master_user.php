<?php
require APPPATH . '/libraries/REST_Controller.php';

class Master_user extends REST_Controller {

    /** Url : http://localhost/core-naufal/module/master_user/user */ 
    function user_get(){
        $data = array('pos returned: '. $this->get('id'));
        $this->response($data);
    }

}
