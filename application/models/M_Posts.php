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
    public function getPosts() {
        $userId = $_SESSION['userId'];

        $this->db->order_by('id', 'DESC');
        $this->db->where('userId', $userId);
        $query = $this->db->get('posts');

//        $query = $this->db->query("
//          SELECT p.*, l.url
//          FROM posts p
//          JOIN links l ON l.id = p.urlId
//          WHERE p.userId = $userId AND l.userId = $userId
//          ORDER BY p.id DESC");

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
}