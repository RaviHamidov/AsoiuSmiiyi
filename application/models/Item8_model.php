<?php

class Item8_model extends CI_Model{

    public $tableName = "items8";
    public $categoryTableName = "items4";
    public $statusTableName = "item_status";
    public $groupTableName = "item_category2";
    public $studentTableName = "items2";

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all($where = array())
    {
        return $this->db->order_by('ce_id','DESC')->where($where)->get($this->tableName)->result();
    }

    public function get_single($where = array())
    {
        return $this->db
            ->join('item_category8', 'item_category8.i_c8_id = items8.ce_category')
            ->join('item_status', 'item_status.i_s_id = items8.ce_status')
            ->where($where)->get($this->tableName)->row();
    }

    public function get_all_item_category()
    {
        return $this->db->get($this->categoryTableName)->result();
    }

    public function get_all_item_group()
    {
        return $this->db->get($this->groupTableName)->result();
    }
    

    public function get_all_item_status()
    {
        return $this->db->get($this->statusTableName)->result();
    }

    public function get_all_students_by_group_id($group_id)
    {
        return $this->db->where('s_group_id',$group_id)->get($this->studentTableName)->result();
    }
    public function get_all_students_by_gid_sid($group_id,$subject_id)
    {
        
        $sql = "select * from items2 where c_id not in (select po_student_id from point where po_group_id = $group_id and po_subject_id = $subject_id) and s_group_id = $group_id;";

        $query = $this->db->query($sql)->result();

        return $query;
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