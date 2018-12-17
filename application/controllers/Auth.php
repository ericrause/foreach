<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:21
 */

class Auth extends CI_Controller {
    public function showLogin($msg = '', $msgType = '') {
        $data['msg'] = $msg;
        $data['msgType'] = $msgType;

        $this->load->view('templates/header');
        $this->load->view('pages/login', $data);
        $this->load->view('templates/footer');
    }

    public function showSignUp($msg = '', $msgType = '') {
        $data['msg']     = $msg;
        $data['msgType'] = $msgType;

        $this->load->view('templates/header');
        $this->load->view('pages/signup', $data);
        $this->load->view('templates/footer');
    }

    public function authentication() {
        session_start();
        $email    = $_POST['email']    ?? '';
        $password = $_POST['password'] ?? '';
        $authId   = $this->M_Auth->authenticate($email, $password);
        if($authId > 0) {
            $_SESSION['active']   = true;
            $_SESSION['timeout']  = time();
            $_SESSION['username'] = $email;
            $_SESSION['userId']   = $authId;
            redirect('posts');
        } else {
            $this->showLogin('incorret email/pass','danger');
        }
    }


    public function signUp() {
        $email    = $_POST['email']    ?? '';
        $password = $_POST['password'] ?? '';
        $authId   = $this->M_Auth->authenticate($email, $password);
        if($authId > 0) {
            $this->showSignUp('this email is already registered','danger');
        } else {
            $this->M_Auth->signUp($email, $password);
            $this->showLogin('now you can authorise with your email/password','success');

        }
    }

    public function logout() {
        session_start();

        $_SESSION['active']   = false;
        $_SESSION['timeout']  = time();
        $_SESSION['username'] = '';
        $_SESSION['userId']   = 0;
        session_abort();
        redirect('home');
    }


}