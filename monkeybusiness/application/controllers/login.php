<?php
/**
 * Created by PhpStorm.
 * User: dries
 * Date: 3/05/17
 * Time: 16:06
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->helper(array('form'));
        $this->load->view('login_view');
    }

}

?>