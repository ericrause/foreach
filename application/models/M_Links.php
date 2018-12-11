<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:41
 */

class M_Links extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function addLink(){
        $dataArr = explode(PHP_EOL,$this->input->post('urls'));
        foreach ($dataArr as $item) {
            $this->db->insert('links', ['url' => $item]);
        }
        //todo: how to set userId
    }

    public function getLinks(){
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('links');
        return $query->result_array();
    }

    public function deleteLink($id) {
        $this->db->where('id', $id);
        $this->db->delete('links');
        return true;
    }
}