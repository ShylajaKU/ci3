<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_controller extends CI_Controller {
// ------------------------------------------
public function search_fc(){
    // /search page
    $table_name = 'users'; 
    $known_value = $this->session->userdata("user_id");
    $col_name_of_known_value = 'user_id';
    $col_name_of_op_value = 'caste';
    $user_caste = $this->get_model->get_any_field_fm($table_name,$known_value,$col_name_of_known_value,$col_name_of_op_value);
    $col_name_of_op_value = 'gender'; // female or male
    $user_gender = $this->get_model->get_any_field_fm($table_name,$known_value,$col_name_of_known_value,$col_name_of_op_value);

    $where = array(
        'caste' => $user_caste,
    );
    $this->db->where($where);
    $query = $this->db->get('caste_id');
    $result = $query->result_Array();

    $data['user_id_table'] = $result;
    $data['user_gender'] = $user_gender;
    if($user_gender == 'female'){$data['gender'] = 'male';}
    if($user_gender == 'male'){$data['gender'] = 'female';}
    $data['user_caste'] = $user_caste;

    $this->form_validation->set_rules('hidden','Education','required');
    // $this->form_validation->set_rules('highest_education','Education','required');
    // $this->form_validation->set_rules('occupation','Education','required');
    // $this->form_validation->set_rules('income_bracket','Education','required');
    // $this->form_validation->set_rules('family_class','Education','required');
    // $this->form_validation->set_rules('marital_status','Education','required');
    // $this->form_validation->set_rules('mother_tounge','Education','required');
    if(!$this->form_validation->run()){
    $this->load->view('templates/head/header');
    $this->load->view('search/search_template',$data);
    $this->load->view('templates/foot/footer');
    }else{
        echo $edu = $this->input->post('highest_education');
        echo $pro = $this->input->post('occupation');
        echo $inc = $this->input->post('income_bracket');
        echo $class = $this->input->post('family_class');
        echo $mar = $this->input->post('marital_status');
        echo $lan = $this->input->post('mother_tounge');
        // if($user_gender == 'female'){
        //     $gender = 'male';
        // }
        // if($user_gender == 'male'){
        //     $gender = 'female';
        // }
        // $where = array(
        //     'gender' => $gender,
        //     'caste' => $user_caste,
        //     'user_active' => 1,
        // );
        // if($edu){
        //     $a = array('education' => $edu,);
        //     $where = array_merge($where,$a);
        // }
        // if($pro){
        //     $a = array('occupation' => $pro,);
        //     $where = array_merge($where,$a);
        // }
        // if($inc){
        //     $a = array('income_bracket' => $inc,);
        //     $where = array_merge($where,$a);
        // }
        // if($class){
        //     $a = array('family_class' => $class,);
        //     $where = array_merge($where,$a);
        // }
        // if($mar){
        //     $a = array('marital_status' => $mar,);
        //     $where = array_merge($where,$a);
        // }
        // if($lan){
        //     $a = array('mother_tounge' => $lan,);
        //     $where = array_merge($where,$a);
        // }
        // var_dump($where);
        $result = $this->search_model->find_results($user_gender,$user_caste,$edu,$pro,$inc,$class,$mar,$lan);
        var_dump($result);
    }

}
// ------------------------------------------
public function search_by_education_fc($gender,$user_caste){
    $edu = $this->input->post('highest_education');

    $where = array(
        'gender' => $gender,
        'caste' => $user_caste,
        'user_active' => 1,
        'education' => $edu,
    );
    var_dump($where);
    // $result = $this->search_model->find_results($where);
    $this->db->where($where);
    $query = $this->db->get('users');
    $result = $query->result_array();
var_dump($result);

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

















































}