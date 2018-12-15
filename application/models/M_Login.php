<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:41
 */

class M_Login extends CI_Model {
    public function __construct() {
        $this->load->database();
    }



    public function authenticate($email, $password) {
//        $query = $this->db->get('users', ['email' => $email]);
//        if ($query->result_array() !== []) {
            $query = $this->db->get('users', ['email' => $email, 'password' => md5($password)]);
            $data = $query->result_array();
            if ($data !== []) {
                return $data['id'];
            }
//        }
        return 0;
    }

    public function deleteLink($id) {
        $this->db->where('id', $id);
        $this->db->delete('links');
        return true;
    }
}