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
    public function getPosts($show = false){
        if (!$show) {
            $query = $this->db->get('posts');
            return $query->result_array();

        }

        $query = $this->db->get('posts', ['show' => $show]);
        return $query->row_array();

    }

}