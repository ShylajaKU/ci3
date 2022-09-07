<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model
{
// ---------------------------------------
// for registered users only
public function home_page_results_fm(){
    //  by gender and caste  
    //  on  /home page
    // default on page  not search
    $user_id = $this->session->userdata('user_id');

    $caste = $this->db->where('user_id',$user_id)->get('users')->result_array()[0]['caste'];
    $marital_status = $this->db->where('user_id',$user_id)->get('users')->result_array()[0]['marital_status'];
    $gender_of_user = $this->db->where('user_id',$user_id)->get('users')->result_array()[0]['gender'];
    if($gender_of_user == 'male'){
        $gender_to_search_for = 'female';
    }else{
        $gender_to_search_for = 'male';
    }

    $where_array = array(
        'user_active' => 1,
        'caste' => $caste,
        'marital_status' => $marital_status,
        'gender' => $gender_to_search_for,
    );
    $this->db->where($where_array);
    // $result = $this->db->get('users')->result_array();
    // return $result;

    $this->db->select('*');
    $this->db->from('users');
    $this->db->join(
        'user_images',
        'user_images.user_id = users.user_id and user_images.profile_photo = 1'
    );
    $query = $this->db->get()->result_array();
    return $query;
}
// ---------------------------------------
public function insert_information_array_into_caste_id_fm_for_all_caste(){
    $q = $this->db->get('caste_id');
    $caste_table = $q->result_array();
    $nu = $q->num_rows();
    // var_dump($caste_table);
    
    foreach($caste_table as $ip){
        $caste = $ip['caste'];
        $gender = 'female';
        $this->search_model->preample($caste,$gender);
        $gender = 'male';
        $this->search_model->preample($caste,$gender);
    }
}

// ---------------------------------------
public function preample($caste,$gender){
    if($gender == 'female'){
    $caste_id_table_col = 'highest_education_brides';
    $users_table_col = 'education';
    $this->search_model->action($caste,$caste_id_table_col,$users_table_col,$gender);

    $caste_id_table_col = 'professions_list_brides';
    $users_table_col = 'occupation';
    $this->search_model->action($caste,$caste_id_table_col,$users_table_col,$gender);

    $caste_id_table_col = 'annual_income_brides';
    $users_table_col = 'income_bracket';
    $this->search_model->action($caste,$caste_id_table_col,$users_table_col,$gender);

    $caste_id_table_col = 'family_class_brides';
    $users_table_col = 'family_class';
    $this->search_model->action($caste,$caste_id_table_col,$users_table_col,$gender);

    $caste_id_table_col = 'language_list_brides';
    $users_table_col = 'mother_tounge';
    $this->search_model->action($caste,$caste_id_table_col,$users_table_col,$gender);

    $caste_id_table_col = 'marital_status_brides';
    $users_table_col = 'marital_status';
    $this->search_model->action($caste,$caste_id_table_col,$users_table_col,$gender);
    }

    if($gender == 'male'){
    
    $caste_id_table_col = 'highest_education_grooms';
    $users_table_col = 'education';
    $this->search_model->action($caste,$caste_id_table_col,$users_table_col,$gender);

    $caste_id_table_col = 'professions_list_grooms';
    $users_table_col = 'occupation';
    $this->search_model->action($caste,$caste_id_table_col,$users_table_col,$gender);

    $caste_id_table_col = 'annual_income_grooms';
    $users_table_col = 'income_bracket';
    $this->search_model->action($caste,$caste_id_table_col,$users_table_col,$gender);

    $caste_id_table_col = 'family_class_grooms';
    $users_table_col = 'family_class';
    $this->search_model->action($caste,$caste_id_table_col,$users_table_col,$gender);

    $caste_id_table_col = 'language_list_grooms';
    $users_table_col = 'mother_tounge';
    $this->search_model->action($caste,$caste_id_table_col,$users_table_col,$gender);

    $caste_id_table_col = 'marital_status_grooms';
    $users_table_col = 'marital_status';
    $this->search_model->action($caste,$caste_id_table_col,$users_table_col,$gender);
    }
}
// ---------------------------------------
public function action($caste,$caste_id_table_col,$users_table_col,$gender){
    // gender_id 0 gender male 1 female
$array = array();
$where = array('caste' => $caste, 'user_active' => 1 , 'gender' => $gender);
$this->db->where($where);
$query = $this->db->get("users");
$users_table = $query->result_array();
// var_dump($users_table);
$num_rows = $query->num_rows();
if($gender == 'female'){
    $no_of = 'no_of_brides';
}
if($gender == 'male'){
    $no_of = 'no_of_grooms';
}
if($num_rows == 0){
    $data = array(
        $no_of => 0,
        $caste_id_table_col => NULL,
    );
    $update_where = array('caste' => $caste);
    $this->db->where($update_where);
    $this->db->update('caste_id',$data);
    return;
}

foreach($users_table as $user){
    $marital_status = $user[$users_table_col];
    if(!in_array($marital_status,$array)){
    array_push($array,$marital_status);
    }
}

// var_dump($array);
// print_r (implode(",",$array));
$comma_string = implode(",",$array);

$data = array(
            $caste_id_table_col => $comma_string,
            $no_of => $num_rows,
            );

$update_where = array('caste' => $caste);
$this->db->where($update_where);
$this->db->update('caste_id',$data);
}
// ---------------------------------------
// ---------------------------------------
// public function find_results($where){

//     $this->db->where($where);
//     $query = $this->db->get('users');
//     return $result = $query->result_array();
// }
// ---------------------------------------
public function find_results($user_gender,$user_caste,$edu,$pro,$inc,$class,$mar,$lan){
    if($user_gender == 'female'){
        $gender = 'male';
    }
    if($user_gender == 'male'){
        $gender = 'female';
    }
    $where = array(
        'gender' => $gender,
        'caste' => $user_caste,
        'user_active' => 1,
    );
    if($edu){
        $a = array('education' => $edu,);
        $where = array_merge($where,$a);
    }
    if($pro){
        $a = array('occupation' => $pro,);
        $where = array_merge($where,$a);
    }
    if($inc){
        $a = array('income_bracket' => $inc,);
        $where = array_merge($where,$a);
    }
    if($class){
        $a = array('family_class' => $class,);
        $where = array_merge($where,$a);
    }
    if($mar){
        $a = array('marital_status' => $mar,);
        $where = array_merge($where,$a);
    }
    if($lan){
        $a = array('mother_tounge' => $lan,);
        $where = array_merge($where,$a);
    }
    // var_dump($where);

    $this->db->where($where);
    // $query = $this->db->get('users');
    // $this->db->join(
    //     'user_images',
    //     'user_images.user_id = users.user_id and user_images.profile_photo = 1'
    // );
    // return $result = $query->result_array();
    $this->db->from('users');
    $this->db->join(
        'user_images',
        'user_images.user_id = users.user_id and user_images.profile_photo = 1'
    );
    $query = $this->db->get()->result_array();
    return $query;

}
// ---------------------------------------
public function get_all_columns_fm($known_value,$known_value_col_name,$table_name){
    $where = array(
        $known_value_col_name => $known_value,
    );
    $this->db->where($where);

    $this->db->from($table_name);

    $query = $this->db->get()->result_array();
    return $query;
}
// ---------------------------------------
// ---------------------------------------
// ---------------------------------------



}