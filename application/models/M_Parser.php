<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:41
 */

class M_Parser extends CI_Model {
    public function __construct() {
//        $this->load->database();
    }

    public function getContent($rss){
        $data = [];
        $xml = @simplexml_load_string(file_get_contents($rss));
        if ($xml === false) {
            return $data;
        }
        foreach($xml->xpath('//item') as $item) {
//        foreach($xml->channel->item as $item) {
            $data[] = [
                'title'       => $item->title,
                'link'        => $item->link,
                'pubDate'     => $item->pubDate,
                'description' => $item->description,
            ];
        }
        return $data;
    }
}