<?php

class Item_model extends CI_Model{

    public $tableName = "items";
    public $categoryTableName = "item_category";
    public $statusTableName = "item_status";


    public function __construct()
    {
        parent::__construct();
    }

    public function get_all($where = array())
    {
        return $this->db->order_by('id','DESC')->where($where)->get($this->tableName)->result();
    }

    public function get_single($where = array())
    {
        return $this->db
            
            ->join('item_status', 'item_status.i_s_id = items.status')
            ->where($where)->get($this->tableName)->row();
    }

    // public function get_all_item_category()
    // {
    //     return $this->db->get($this->categoryTableName)->result();
    // }

    public function get_all_item_status()
    {
        return $this->db->get($this->statusTableName)->result();
    }

    public function add($data = array()){
        $this->db->insert($this->tableName, $data);
    }

    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }

}