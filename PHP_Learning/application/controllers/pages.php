<?php

/*
    learn CI 
 */
class Pages extends CI_Controller{
    public function view($page = 'home'){
        if(!file_exists(APPPATH . 'views/pages/' . $page . '.php')){
            //the page donot exists
            show_404();
        }
        $data['title']=ucfirst($page);
        
        $this->load->view('templates/header' , $data);
        $this->load->view('pages/' . $page , $data);
        $this->load->view('templates/footer' , $data);
    }
}