<?php

function logged_in()
{
    $ci= get_instance();

    if(!$ci->session->userdata('email')){
        redirect('user');
    }else {
        $id_role = $ci->session->userdata('id_role');
        $menu = $ci->uri->segment(1);

        $querymenu = $ci->db->get_where('user_menu',['menu'=>$menu])->row_array();

        $id_menu = $querymenu['id_menu'];

        $queryaccmenu = $ci->db->get_where(
            'user_access_menu',
            [
                'id_role'=>$id_role,
                'id_menu'=>$id_menu
        
        
            ]
            );
        
        if ($queryaccmenu->num_rows() < 1) {
            redirect('user/blocked');
        }
    }
}