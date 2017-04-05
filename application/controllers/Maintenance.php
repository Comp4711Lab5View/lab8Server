<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Siyuan
 * Date: 2017-04-04
 * Time: 10:53 PM
 */
require APPPATH . '/third_party/restful/libraries/Rest_controller.php';

class Maintenance extends Rest_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('menu');
    }
    // Handle an incoming GET ... 	returns a list of ports
    function index_get()
    {
        $key = $this->get('id');
        if (!$key)
        {
            $this->response($this->menu->all(), 200);
        } else
        {
            $result = $this->menu->get($key);
            if ($result != null)
                $this->response($result, 200);
            else
                $this->response(array('error' => 'Menu item not found!'), 404);
        }
    }

    // Handle an incoming GET ... return 1 menu item
    function item_get()
    {
        $key = $this->get('id');
        $result = $this->menu->get($key);
        if ($result != null)
            $this->response($result, 200);
        else
            $this->response(array('error' => 'Menu item not found!'), 404);
    }


}