<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Public_Controller {

    public function __construct() {
        parent::__construct();

        $this -> value = array(
            [
                'id' => 0,
                'image' => 'https://images.unsplash.com/photo-1529607225807-563e0851ee7e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a958f3f05b989724954088a8ef4b1c67&auto=format&fit=crop&w=1000&q=80',
                'subtitle' => 'our team',
                'title' => 'Restorative New York',
                'description' => 'Maecenas elementum faucibus ligula, eget ullamcorper felis sagittis eget. In finibus eros sed nibh volutpat, ut faucibus felis iaculis. Morbi ut finibus ante. Nulla lobortis cursus leo. Proin sit amet sem tellus. Nulla sodales mauris sed tincidunt mollis. Nunc vel mauris sit amet risus lobortis ultrices. Ut feugiat luctus semper.'
            ],

            [
                'id' => 1,
                'image' => 'https://images.unsplash.com/photo-1523314399-837f3e0c291b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=849e08590bcfafbb6771b7a5c1f95c91&auto=format&fit=crop&w=634&q=80',
                'subtitle' => 'our innovation',
                'title' => 'Breast Enhancement',
                'description' => 'Maecenas elementum faucibus ligula, eget ullamcorper felis sagittis eget. In finibus eros sed nibh volutpat, ut faucibus felis iaculis. Morbi ut finibus ante. Nulla lobortis cursus leo. Proin sit amet sem tellus. Nulla sodales mauris sed tincidunt mollis. Nunc vel mauris sit amet risus lobortis ultrices. Ut feugiat luctus semper.'
            ],

            [
                'id' => 2,
                'image' => 'https://images.unsplash.com/photo-1519976691384-bd9c1d4a95fd?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a2a0d47b8f365052436a68ec76a17a53&auto=format&fit=crop&w=1350&q=80',
                'subtitle' => 'global community',
                'title' => 'The world is our Community',
                'description' => 'Maecenas elementum faucibus ligula, eget ullamcorper felis sagittis eget. In finibus eros sed nibh volutpat, ut faucibus felis iaculis. Morbi ut finibus ante. Nulla lobortis cursus leo. Proin sit amet sem tellus. Nulla sodales mauris sed tincidunt mollis. Nunc vel mauris sit amet risus lobortis ultrices. Ut feugiat luctus semper.'
            ]
        );
    }

    public function index(){
        $this->data['result'] = $this->value;

        $this->render('list_about_view');
    }

    public function detail($id){
        $this->data['detail'] = $this->value[$id];

        $this->render('detail_about_view');
    }
}
