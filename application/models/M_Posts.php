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
            $query = $this->db->get('posts');
            return $query->result_array();

        }

        $query = $this->db->get('posts', ['id' => $id]);
        return $query->row_array();
    }

    public function addLink(){
        $data = [
            'url' => $this->input->post('urls')
        ];
        //todo: explode everything and set userId
        return $this->db->insert('links', $data);
    }

}