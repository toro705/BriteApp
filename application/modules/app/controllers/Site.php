<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MX_Controller {


	public function __construct() 
	{
        parent::__construct();
    }

    public function index()
    {
        $photographer_local = $this->db->where('creating_user_id', NULL)->where('user_type_id', 2)->where('state', 1)->where('user_origin_id', 1)->order_by("position", "asc")->get('users')->result();
        $photographer_inter = $this->db->where('creating_user_id', NULL)->where('user_type_id', 2)->where('state', 1)->where('user_origin_id', 2)->order_by("position", "asc")->get('users')->result();
        $work = $this->db->where('creating_user_id', NULL)->where('user_type_id', 2)->where('user_origin_id', 3)->get('users')->row();
        $work->images = $this->db->where('user_id',  $work->id)->limit(15)->order_by('position', 'ASC')->get('user_files')->result();
        // echo "<pre>";
        // print_r($work);
        // echo "</pre>";
        $data['photographer_local'] =  $photographer_local;
        $data['photographer_inter'] =  $photographer_inter;
        $data['work'] =  $work;
        $this->load->view('main', $data, FALSE);

    }
    public function photographer($id)
    {

        if ( $id and is_numeric($id) and $photographer = $this->db->where('creating_user_id', NULL)->where('id', $id)->get('users')->row()) {

            // echo "<pre>";
            // print_r($data['work']);
            // echo "</pre>";
            $photographer->videos = $this->db->where('user_id',  $photographer->id)->where('extension', 'mp4')->order_by('position', 'ASC')->get('user_files')->result();
            $photographer->images = $this->db->where('user_id',  $photographer->id)->where_in('extension', ['jpg', 'png', 'jpeg', 'gif'])->where('active', 1)->order_by('position', 'ASC')->get('user_files')->result();
            $data['photographer'] =  $photographer;

            $this->load->view('photographer', $data, FALSE);
        } else {
            show_404();
        }
    }
    public function works()
    {
        $works = $this->db->where('creating_user_id', NULL)->where('user_type_id', 2)->where('user_origin_id', 3)->get('users')->row();
        $works->images = $this->db->where('user_id',  $works->id)->where_in('extension', ['jpg', 'png', 'jpeg', 'gif'])->limit(200)->order_by('position', 'ASC')->get('user_files')->result();
        $data['works'] =  $works;
        $this->load->view('works', $data, FALSE);

    }

}