<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Size_model extends MY_Model {

    public $table = 'size';

    public function __construct() {
        parent::__construct();
    }
    public function get_all_size() {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('is_deleted', 0);
        return $result = $this->db->get()->result_array();
    }
    public function get_all_group_by() {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('is_deleted', 0);
        $this->db->group_by('size');
        return $result = $this->db->get()->result_array();
    }
    public function get_by_slug_size($slug='') {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('is_deleted', 0);
        $this->db->where('slug', $slug);
        return $result = $this->db->get()->row_array();
    }
    public function get_by_id_size($id='') {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('is_deleted', 0);
        $this->db->where('id', $id);
        return $result = $this->db->get()->row_array();
    }
    
    public function get_all_with_pagination_searchs($order = 'desc',$limit = NULL, $start = NULL, $keywords = '',$lang = 'vi') {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $this->db->like($lang, $keywords);
        $this->db->where($this->table.'.is_deleted', 0);
        $this->db->limit($limit, $start);
        $this->db->order_by($this->table.".id", $order);

        return $result = $this->db->get()->result_array();
    }
    public function count_searchs($keyword = '',$lang = 'en'){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->like($lang, $keyword);
        $this->db->where($this->table .'.is_deleted', 0);

        return $result = $this->db->get()->num_rows();
    }
}
