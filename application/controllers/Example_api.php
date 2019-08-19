<?php
require APPPATH . '/libraries/REST_Controller.php';

class Example_api extends REST_Controller {

    function user_get()
    {
        // http://localhost/core-naufal/example_api/user/id/12
        $data = array('pos returned: '. $this->get('id'));
        $this->response($data);
    }

    function user_post()
    {
        $data = array('returned: '. $this->post('id'));
        $this->response($data);
    }

    function user_put()
    {
        $data = array('returned: '. $this->put('id'));
        $this->response($data);
    }

    function user_delete()
    {
        $data = array('returned: '. $this->delete('id'));
        $this->response($data);
    }
}
