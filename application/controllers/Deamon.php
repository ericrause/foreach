<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-15
 * Time: 15:55
 */

class Deamon {

    public function downloadNews($userId) {
        $links = $this->M_Links->getLinks($userId);
        foreach ($links as $link) {
            $data = $this->M_Parser->getPosts($link['url']);

            foreach ($data as $post) {
                $this->savePost($post, $userId, $link['id']);
            }

        }
    }

    public function savePost($post, $userId, $urlId) {
        $title       = $post['title']       ?? '';
        $description = $post['description'] ?? '';
        $link        = $post['link']        ?? '';
        $pubDate     = $post['pubDate']     ?? '';
        $this->M_Posts->insertPost($userId, $urlId, $title, $description, $link, $pubDate);
    }
}