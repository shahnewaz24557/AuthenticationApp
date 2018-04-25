<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function registration($form_data) {
        $this->db->insert('users', $form_data);
    }

    //User Login Check
    public function check_user($phone, $password){

        $query = $this->db
                        ->where(['phone' => $phone, 'password' => $password])
                        ->get("users");

        if($query->num_rows()>0){

            foreach($query->result() as $rows){

                //add all data to session
                $newdata = array(
                    'id'  => $rows->id,
                    'name'  => $rows->name,
                    'phone'    => $rows->phone,
                    'logged_in'  => TRUE
                );
            }

            $this->session->set_userdata($newdata);
            return true;
        }

        return false;
    } //End of Login Check

    public function profile($id) {
    	$result = $this->db->get_where('users', ['id' => $id]);
    	return $result->row_array();
    }
    
}