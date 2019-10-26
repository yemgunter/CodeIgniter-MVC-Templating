<?php

/*
 * Name: Yolanda Gunter
 * Assignment: Coding 06
 * Purpose: MVC Frameworks
 * Notes: Learning Codeigniter to better understand MVC programming.
 */

class About extends CI_Controller {

        public function index($page = 'about')
{
        if ( ! file_exists(APPPATH.'pages'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

}