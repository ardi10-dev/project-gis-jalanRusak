<?php
function is_logged_in(){
    $ci =get_instance();

    if (!$ci->session->userdata('username') AND !$ci->session->userdata('password')) 
    {
    redirect('auth');
    }

}