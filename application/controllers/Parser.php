<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-15
 * Time: 18:18
 */

class Parser extends  CI_Controller {
    public function getRss($rss){
        return $this->M_Parser->getPosts($rss);

    }

    public function index() {
        $this->getRss('https://news.yandex.ru/society.rss');
    }

}