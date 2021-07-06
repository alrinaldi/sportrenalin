<?php
Class Lapangan extends CI_Controller{

function search_lapangan(){
    $this->load->view('v_search_lapangan');
}
function detail_lapangan(){
    $this->load->view('v_detail_lapangan');
}

}