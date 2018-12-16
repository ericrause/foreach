<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:21
 */

class Links extends  CI_Controller {
    public function showLinks(){
        session_start();
        $userId = $_SESSION['userId'] ?? 0;
        $data['links']  = $this->M_Links->getLinks($userId);


        $this->load->view('templates/header');
        $this->load->view('links/links', $data);
        $this->load->view('templates/footer');
    }

    public function addLink() {
        $data['title'] = 'Add link';

        $this->form_validation->set_rules('urls', 'Urls', 'required');

        if($this->form_validation->run() === false ){
            $this->load->view('templates/header');
            $this->load->view('links/addLink', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_Links->addLink();
            redirect('links');

//            $this->showLinks();
        }
    }

    public function deleteLink($id){
        $this->M_Links->deleteLink($id);
        redirect('links');
    }
}