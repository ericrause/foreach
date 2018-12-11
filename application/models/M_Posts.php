<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:41
 */

class M_Posts extends  CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function getPosts($id = 0){
        if ($id === 0) {
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('posts');
            return $query->result_array();

        }

        //todo: why no \n at TEXT mysql fields????
        $query = $this->db->get('posts', ['id' => $id]);
        return $query->row_array();
    }
}