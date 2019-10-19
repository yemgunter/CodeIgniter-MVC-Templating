<?php

/*
 * Name: Yolanda Gunter
 * Assignment: Coding 06
 * Purpose: MVC Frameworks
 * Notes: Learning Codeigniter to better understand MVC programming.
 */

class News_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
}