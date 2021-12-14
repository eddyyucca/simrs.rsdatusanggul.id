<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home1 extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $x = date('Y-m-d');
        $str = file_get_contents('http://192.168.11.5:8081/qumatic/standard/api/intkiosk?id=1&date=' . $x);
        $json = json_decode($str, true);
        $data['noantri'] = $json['data'];

        $this->load->view('template', $data);
    }

    function getNum()
    {
        //        $str = file_get_contents('http://192.168.11.15/qumatic/standard/api/intkiosk?id=1');
        ////        $json = json_decode($str, true);
        $x = date('Y-m-d');
        $str = file_get_contents('http://192.168.11.5:8081/qumatic/standard/api/intkiosk?id=1&date=' . $x);
        //$json = json_decode($str, true);
        //$str = '{"data": "0003","type": "donut"}';
        echo $str;
    }
}
