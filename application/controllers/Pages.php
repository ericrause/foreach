<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 11:45
 */

class Pages extends CI_Controller {
    public function view($page = 'home') {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            echo APPPATH . 'views/pages/' . $page . '.php';
            show_404();
        }
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
    }
}