<!-- ****************************************************
Name: Yolanda Gunter
Assignment: Coding 06
Purpose: MVC Frameworks
Notes: Learning Codeigniter to better understand MVC programming.
********************************************************* -->
<!DOCTYPE html>
<html>
        <head>
            <link rel='stylesheet' type="text/css" href="<?php echo base_url().'css/main.css' ?>"/>
            <title>CodeIgniter Tutorial</title>
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="well">
                            <center>< <h1><?php echo $title; ?></h1></center>
                        </div>
                    </div>
                </div>
         
            <div class="nav-section">
               $this->load->view('pages/home')
               $this->load->view('pages/about') 
            </div>
               