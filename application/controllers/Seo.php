
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Seo extends CI_Controller {

function index()
{

    $data = "fajar baru teknik makmur , conveyor system,conveyor terbaik, conveyor semarang";//select urls from DB to Array
    header("Content-Type: text/xml;charset=iso-8859-1");
    $this->load->view("sitemap",$data);
}
}