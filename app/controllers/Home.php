<?php

class Home extends Controller{

    
    public function index(){

        $model = new Model;
        $arr['id']  = 1;

        $result = $model->where($arr);

        seewhat($result);
     
        $this->view('home');

    }

}