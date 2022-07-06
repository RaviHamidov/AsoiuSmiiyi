<?php

class Item2_model extends CI_Model{

    public $tableName = "items2";
    public $categoryTableName = "item_category2";
    public $statusTableName = "item_status";
    public $specialityTableName = "speciality";

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all($where = array())
    {
        return $this->db
            ->join('item_category2', 'item_category2.group_id = items2.s_group_id')
            ->join('item_status', 'item_status.i_s_id = items2.status')
            ->join('speciality', 'speciality.speciality_id = item_category2.i_speciality_id')
            ->where($where)->get($this->tableName)->result();
    }

    public function get_single($where = array())
    {
        return $this->db
            ->join('item_category2', 'item_category2.group_id = items2.s_group_id')
            ->join('item_status', 'item_status.i_s_id = items2.status')
            ->join('speciality', 'speciality.speciality_id = item_category2.i_speciality_id')
            ->where($where)->get($this->tableName)->row();
    }

    public function get_all_item_category()
    {
        return $this->db->get($this->categoryTableName)->result();
    }

    public function get_all_item_status()
    {
        return $this->db->get($this->statusTableName)->result();
    }
    public function get_all_item_speciality()
    {
        return $this->db->get($this->specialityTableName)->result();
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