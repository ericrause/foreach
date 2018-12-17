<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:41
 */

class M_Auth extends CI_Model {
    public function __construct() {
        $this->load->database();
    }



    public function authenticate($email, $password) {
//        $query = $this->db->get('users', ['email' => $email]);
//        if ($query->result_array() !== []) {
            $this->db->where('email', $email);
            $this->db->where('password', md5($password));
            $query = $this->db->get('users');

        $data = $query->row_array();
            if ($data !== []) {
                return (int) $data['id'];
            }
//        }
        return 0;
    }



    public function signUp($email, $password) {
        $this->db->insert('users', ['email' => $email, 'password' => md5($password)]);
    }
}