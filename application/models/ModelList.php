<?php

class ModelList extends CI_Model {

    public function get()
    {
        $query = $this->db->get('lists');
        return $query->result_array();
    }

    public function insert($list) 
    {
        $data = array('list' => $list);
        $this->db->insert('lists', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('lists');
    }
}

?>