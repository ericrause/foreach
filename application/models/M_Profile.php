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
    public function getProfile() {
        $userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : 0;
        $this->db->where('userId', $userId);
        $query = $this->db->get('profiles');
        return $query->result_array();
    }

    public function getTemplate($id) {
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

    public function record_count($userId) {
        $this->db->where('userId', $userId);

        return $this->db->count_all('posts');

    }

}