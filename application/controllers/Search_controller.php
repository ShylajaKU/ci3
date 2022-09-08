<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_controller extends CI_Controller {
// ------------------------------------------
public function search_fc(){
    if(!$this->session->userdata('logged_in')){redirect('login');}
    $verified = $this->verification_model->verify_user_fm();
    if(!$verified){redirect('login');}
    // $this->search_model->insert_information_array_into_caste_id_fm_for_all_caste();
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

    if(!$this->form_validation->run()){
    $this->load->view('templates/head/header');
    $this->load->view('search/search_template',$data);
    $this->load->view('templates/foot/footer');
    }else{
        $edu = $this->input->post('highest_education');
        $pro = $this->input->post('occupation');
        $inc = $this->input->post('income_bracket');
        $class = $this->input->post('family_class');
        $mar = $this->input->post('marital_status');
        $lan = $this->input->post('mother_tounge');

        $result = $this->search_model->find_results($user_gender,$user_caste,$edu,$pro,$inc,$class,$mar,$lan);
        $data['matches'] = $result; // for home page
    $this->load->view('templates/head/header');
    $this->load->view('search/search_template',$data);
	$this->load->view('home/home',$data);
    $this->load->view('templates/foot/footer');

        // var_dump($result);

    }

}
// ------------------------------------------
public function view_profile_fc($no,$salt){
    //$no = ($user_id*102548)-(25450/$user_id)
    // from home.php view page
    $user_id = $no / (102548-$salt);
    $known_value = $user_id;
    $known_value_col_name = 'user_id';
    $table_name = 'users';
    $data['user'] = $this->search_model->get_all_columns_fm($known_value,$known_value_col_name,$table_name);
    $table_name = 'user_images';
    $data['images'] = $this->search_model->get_all_columns_fm($known_value,$known_value_col_name,$table_name);
	$this->load->view('templates/head/header');
	$this->load->view('search/view_profile',$data);
	$this->load->view('templates/foot/footer');
}
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
// ------------------------------------------
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