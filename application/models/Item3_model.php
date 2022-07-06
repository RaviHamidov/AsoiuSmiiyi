<?php

class Item3_model extends CI_Model{

    public $tableName = "items3";
    public $categoryTableName = "item_category3";
    public $statusTableName = "item_status";
    public $specialityTableName = "speciality";

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all($where = array())
    {
        return $this->db
            ->join('speciality', 'speciality.speciality_id = items3.t_speciality')
            ->join('item_category3', 'item_category3.i_c3_id = items3.t_scientific_level_id')
            ->join('item_status', 'item_status.i_s_id = items3.t_status')
            ->where($where)->get($this->tableName)->result();
    }

    public function get_single($where = array())
    {
        return $this->db
            ->join('speciality', 'speciality.speciality_id = items3.t_speciality')
            ->join('item_category3', 'item_category3.i_c3_id = items3.t_scientific_level_id')
            ->join('item_status', 'item_status.i_s_id = items3.t_status')
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