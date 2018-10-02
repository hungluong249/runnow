<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Size extends Admin_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('size_model');
        $this->load->model('product_model');
        $this->load->model('product_category_model');
        $this->load->helper('common');
        $this->data['template'] = build_template();
        $this->data['controller'] = $this->size_model->table;
    }

    public function index() {
        $this->data['keyword'] = '';
        if($this->input->get('search')){
            $this->data['keyword'] = $this->input->get('search');
        }
        $this->load->library('pagination');
        $per_page = 10;
        $total_rows  = $this->size_model->count_searchs($this->data['keyword']);
        $config = $this->pagination_config(base_url('admin/'.$this->data['controller'].'/index'), $total_rows, $per_page, 4);
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->pagination->initialize($config);
        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['result'] = $this->size_model->get_all_with_pagination_searchs('desc',$per_page, $this->data['page'], $this->data['keyword'],'vi');
        $this->render('admin/size/list_size_view');
    }
    public function create(){
        $this->load->helper('form');
        if($this->input->post()){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('vi', 'Tính năng tiếng Việt', 'required');
            $this->form_validation->set_rules('en', 'Tính năng tiếng Anh', 'required');
            if($this->form_validation->run() == TRUE){
                $size_request = array(
                    'vi' => mb_convert_case($this->input->post('vi'), MB_CASE_TITLE, "UTF-8"),
                    'en' => mb_convert_case($this->input->post('en'), MB_CASE_TITLE, "UTF-8"),
                );
                $insert = $this->size_model->common_insert($size_request);
                if($insert){
                    $this->session->set_flashdata('message_success', MESSAGE_CREATE_SUCCESS);
                    redirect('admin/'. $this->data['controller'] .'', 'refresh');
                }else {
                    $this->session->set_flashdata('message_error', MESSAGE_CREATE_ERROR);
                    $this->render('admin/'. $this->data['controller'] .'/create_size_view');
                }
            }
        }
        $this->render('admin/size/create_size_view');
    }
    public function edit($id = null){
        $this->data['detail'] = $this->size_model->get_by_id_size($id);
        $this->load->helper('form');
        $this->load->library('form_validation');
        if($this->input->post()){
            $this->form_validation->set_rules('vi', 'Tính năng tiếng Việt', 'required');
            $this->form_validation->set_rules('en', 'Tính năng tiếng Anh', 'required');
            if($this->form_validation->run() === true){
                $size_request = array(
                    'vi' => mb_convert_case($this->input->post('vi'), MB_CASE_TITLE, "UTF-8"),
                    'en' => mb_convert_case($this->input->post('en'), MB_CASE_TITLE, "UTF-8"),
                );
                $update = $this->size_model->common_update($id, $size_request);
                if($update){
                    $this->session->set_flashdata('message_success', MESSAGE_UPDATE_SUCCESS);
                    redirect('admin/size', 'refresh');
                }else {
                    $this->session->set_flashdata('message_error', MESSAGE_UPDATE_ERROR);
                    $this->render('admin/size/edit/'.$id);
                }
            }
        }
        $this->render('admin/size/edit_size_view');
    }
    function remove(){
        $id = $this->input->post('id');
        if($id &&  is_numeric($id) && ($id > 0)){
            if($this->size_model->find_rows(array('id' => $id,'is_deleted' => 0)) == 0){
                return $this->return_api(HTTP_NOT_FOUND, MESSAGE_ISSET_ERROR);
            }
            $product = $this->product_model->get_all_for_remove($id,'size');// lấy số sản phẩm sử dụng size
            if(count($product) == 0){
                $data = array('is_deleted' => 1);
                $update = $this->size_model->common_update($id, $data);
                if($update){
                    $reponse = array(
                        'csrf_hash' => $this->security->get_csrf_hash()
                    );
                    return $this->return_api(HTTP_SUCCESS,MESSAGE_REMOVE_SUCCESS,$reponse);
                }
                return $this->return_api(HTTP_NOT_FOUND,MESSAGE_REMOVE_ERROR);
            }else{
                return $this->return_api(HTTP_NOT_FOUND,sprintf(MESSAGE_ERROR_REMOVE_size,count($product)));
            }
        }
        return $this->return_api(HTTP_NOT_FOUND,MESSAGE_ID_ERROR);
    }
}
