<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-15
 * Time: 15:55
 */

class M_Deamon extends CI_Model {

    public function downloadNews($userId, $rss, $linkId) {
        $data = $this->M_Parser->getContent($rss);

        foreach ($data as $post) {

            $content = $this->prepareContent($post);
            $this->db->where('title', $post['title']);
            $query = $this->db->get('posts');
            if ($query->result_array() === []) {
                $this->savePost($content, $userId, $linkId);
            }
        }
    }
    public function prepareContent($content) {
        $content = preg_replace("/<img[^>]+\>/i", '', $content);
        $content = preg_replace("/<a[^>]+\>/i", '', $content);
        $content = preg_replace('/<a.*?>(.*?)<\/a>#i/', '\1', $content);



        $content['pubDate'] = date('l Y/m/d H:i', strtotime($content['pubDate']));
        return $content;
    }

    public function savePost($post, $userId, $linkId) {
        $title       = $post['title']       ;
        $description = $post['description'] ;
        $link        = $post['link']        ;
        $pubDate     = $post['pubDate']     ;
        $this->M_Posts->insertPost($userId, $linkId, $title, $description, $link, $pubDate);
        $this->M_Links->updateLinkDT($linkId);
    }

    public function updateNews($userId){
        $links = $this->M_Links->getLinks($userId);
        foreach ($links as $link) {
            $updatedDT = strtotime($link['updatedDT']);
            $timeNow = time() + 10800;
            if ( $timeNow - $updatedDT > 300) {
                $this->downloadNews($userId, $link['url'], $link['id']);
            }
        }


    }
}