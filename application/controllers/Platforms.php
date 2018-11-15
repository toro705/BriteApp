<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Platforms extends MX_Controller {

	public function __construct() 
	{
        parent::__construct();
    }

    public function index()
    {
        $domain = $_SERVER['SERVER_NAME'];
        switch ($domain) {

            case 'www.admin.briteproductions.com.ar':
            case 'admin.briteproductions.com.ar':
                echo modules::run('admin/users/signIn');
                break;

            case 'www.briteproductions.com.ar':
            case 'briteproductions.com.ar':
                echo modules::run('app/site/index');
                break;
            
            default:
                die('Default switch Domain');
                break;

        }
    }
}