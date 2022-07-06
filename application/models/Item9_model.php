<?php

class Item9_model extends CI_Model{

    public $tableName = "items9";
    public $categoryTableName = "item_category2";
    public $statusTableName = "item_status";
    public $subjectTableName = "items4";


    public function __construct()
    {
        parent::__construct();
    }

    public function get_all($where = array())
    {
        return $this->db
            ->join('item_category2', 'item_category2.group_id = items9.re_group_no','left')
            ->join('items4', 'items4.ab_id = items9.re_subject_id','left')
            ->join('item_status', 'item_status.i_s_id = items9.re_status','left')
            ->where($where)->get($this->tableName)->result();
    }

    public function get_single($where = array())
    {
        return $this->db
            ->join('item_category2', 'item_category2.group_id = items9.re_group_no')
            ->join('items4', 'items4.ab_id = items9.re_subject_id')
            ->join('item_status', 'item_status.i_s_id = items9.re_status')
            ->where($where)->get($this->tableName)->row();
    }

    public function get_all_item_category()
    {
        return $this->db->get($this->categoryTableName)->result();
    }

    public function get_all_item_subjects()
    {
        return $this->db->get($this->subjectTableName)->result();
    }

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