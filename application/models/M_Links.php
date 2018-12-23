<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:41
 */

class M_Links extends CI_Model {
    public function __construct() {
//        $this->load->database();
    }

    public function addLink($userId) {
        $dataArr = explode(PHP_EOL,$this->input->post('urls'));
        foreach ($dataArr as $item) {
            $this->db->insert('links', ['url' => $item, 'userId' => $userId]);
        }
        //todo: how to set userId
    }

    public function getLinks($userId = 0) {
        $this->db->order_by('id', 'DESC')->where('userId', $userId);

        $query = $this->db->get('links');
        return $query->result_array();
    }

    public function updateLinkDT($linkId) {
        $this->db->where('id', $linkId);
//        $this->db->update('links', ['updatedDT', time()]);
//        $this->db->query("UPDATE links SET updatedDT = date('Y-m-d H:i:s','".time()."') WHERE id = ".$linkId);
        $this->db->query("UPDATE links SET updatedDT = FROM_UNIXTIME('".time()."') WHERE id = ".$linkId);
        return true;
    }

    public function deleteLink($id) {
        $this->db->where('id', $id);
        $this->db->delete('links');
        return true;
    }
}