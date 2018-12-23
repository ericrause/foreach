<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:41
 */

class M_Posts extends CI_Model {
    public function __construct() {
//        $this->load->database();
    }
    public function getPosts($limit, $start, $urlId = 0) {
        $userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : 0;


        $this->db->limit($limit, $start);
//        $this->db->order_by('id', 'DESC');
        $this->db->where('userId', $userId);

        if ($urlId > 0) {
            $this->db->where('urlId', $urlId);
        }
        $query = $this->db->get('posts');


        return $query->result_array();

    }

    public function insertPost($userId, $urlId, $title, $description, $link, $pubDate) {
        $this->db->insert('posts', [
            'userId'      => $userId,
            'urlId'       => $urlId,
            'title'       => $title,
            'description' => $description,
            'link'        => $link,
            'pubDate'     => $pubDate,
        ]);
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