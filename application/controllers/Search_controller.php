<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_controller extends CI_Controller {
// ------------------------------------------
public function search_fc(){
    $table_name = 'users'; 
    $known_value = $this->session->userdata("user_id");
    $col_name_of_known_value = 'user_id';
    $col_name_of_op_value = 'caste';
    $user_caste = $this->get_model->get_any_field_fm($table_name,$known_value,$col_name_of_known_value,$col_name_of_op_value);

    
    $this->db->where('approved','1');
    $query = $this->db->get('highest_education');
    $result = $query->result_array();
    $data['highest_education_list'] = $result;

    $this->db->where('approved','1');
    $query = $this->db->get('professions_list');
    $result = $query->result_array();
    $data['professions_list'] = $result;

    $query = $this->db->get('annual_income');
    $result = $query->result_array();
    $data['annual_income_list'] = $result;

    $this->load->view('templates/head/header');
    $this->load->view('search/search_template',$data);
    $this->load->view('templates/foot/footer');
}
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
}