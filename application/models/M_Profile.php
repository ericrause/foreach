<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:41
 */

class M_Profile extends CI_Model {
    public function __construct() {
//        $this->load->database();
    }
    public function getProfile($userId) {
//        $userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : 0;
        $this->db->where('userId', $userId);
        $query = $this->db->get('profiles');
        return $query->row_array();
    }

    public function getTemplate($id) {
        $this->db->select('id, title');
        $this->db->where('id', $id);
        $query = $this->db->get('templates');
        return $query->row_array();
    }

    public function getTemplateList() {
        $this->db->select('id, title');
        $query = $this->db->get('templates');
        return $query->result_array();
    }


    public function deletePosts($id) {
        $this->db->where('urlId', $id);
        $this->db->delete('posts');
        return true;
    }

    public function updateProfile($userId,$password,$phone,$themeSelector,$name,$biography) {
        $this->db->where('userId', $userId);
        $data = [
//            'password'      => $password,
            'phone'     => $phone,
            'template'  => $themeSelector,
            'name'      => $name,
            'biography' => $biography
        ];
        $this->db->update('profiles', $data);
    }

}