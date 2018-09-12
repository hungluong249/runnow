<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Public_Controller {

    public function __construct() {
        parent::__construct();

        $this->value = array(
            [
                'id' => 0,
                'image' => 'pwp_sheet1.jpg',
                'video' => 1,
                'video_link' => 'Fq2CvmgoO7I',
                'subtitle' => "men",
                'title' => 'Nike Epic React Flyknit',
                'price' => '550',
                'price_discount' => '400',
                'discount' => 1,
                'description' => 'Donec molestie nunc id ex ultricies, id aliquet dui auctor. Etiam gravida diam eu faucibus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent hendrerit orci in aliquam lacinia. Nullam id maximus massa, in laoreet massa. Sed nec justo auctor, pharetra massa eu, scelerisque nisl. Maecenas ac turpis et arcu condimentum lobortis sed at elit. Donec luctus mi et luctus accumsan.',
                'size' => array(5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5),
                'detail_images' => array('rn-00.jpg', 'rn-02.jpg', 'rn-03.jpg', 'rn-05.jpg', 'rn-06.jpg'),
                'color' => array('#fff' , '#333', '#5BD1FF' , '#ED2222'),
                'quantity' => 0
            ],
            [
                'id' => 1,
                'image' =>'pwp_sheet2.jpg',
                'video' => 1,
                'video_link' => 'Fq2CvmgoO7I',
                'subtitle' => "men",
                'title' => 'Nike Epic Flyknit',
                'price' => '700',
                'price_discount' => '520',
                'discount' => 1,
                'description' => 'Donec molestie nunc id ex ultricies, id aliquet dui auctor. Etiam gravida diam eu faucibus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent hendrerit orci in aliquam lacinia. Nullam id maximus massa, in laoreet massa. Sed nec justo auctor, pharetra massa eu, scelerisque nisl. Maecenas ac turpis et arcu condimentum lobortis sed at elit. Donec luctus mi et luctus accumsan.',
                'size' => array(7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5),
                'detail_images' => array('rn-04.jpg', 'rn-03.jpg', 'rn-04.jpg', 'rn-01.jpg', 'rn-06.jpg'),
                'color' => array('#333' , '#F9E761' , '#0092AF'),
                'quantity' => 999
            ],
            [
                'id' => 2,
                'image' =>'pwp_sheet3.jpg',
                'video' => 0,
                'video_link' => '',
                'subtitle' => "men",
                'title' => 'Nike React Flyknit',
                'price' => '240',
                'price_discount' => '',
                'discount' => 0,
                'description' => 'Donec molestie nunc id ex ultricies, id aliquet dui auctor. Etiam gravida diam eu faucibus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent hendrerit orci in aliquam lacinia. Nullam id maximus massa, in laoreet massa. Sed nec justo auctor, pharetra massa eu, scelerisque nisl. Maecenas ac turpis et arcu condimentum lobortis sed at elit. Donec luctus mi et luctus accumsan.',
                'size' => array(5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5),
                'detail_images' => array('rn-01.jpg', 'rn-02.jpg', 'rn-03.jpg', 'rn-04.jpg', 'rn-06.jpg'),
                'color' => array('#fff' , '#333', '#5BD1FF' , '#ED2222'),
                'quantity' => 999
            ],
            [
                'id' => 3,
                'image' =>'pwp_sheet4.jpg',
                'video' => 1,
                'video_link' => 'Fq2CvmgoO7I',
                'subtitle' => "men",
                'title' => 'Nike Epic Flyknit',
                'price' => '350',
                'price_discount' => '',
                'discount' => 0,
                'description' => 'Donec molestie nunc id ex ultricies, id aliquet dui auctor. Etiam gravida diam eu faucibus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent hendrerit orci in aliquam lacinia. Nullam id maximus massa, in laoreet massa. Sed nec justo auctor, pharetra massa eu, scelerisque nisl. Maecenas ac turpis et arcu condimentum lobortis sed at elit. Donec luctus mi et luctus accumsan.',
                'size' => array(5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5),
                'detail_images' => array('rn-03.jpg', 'rn-01.jpg', 'rn-04.jpg', 'rn-05.jpg', 'rn-07.jpg'),
                'color' => array('#fff' , '#333'),
                'quantity' => 999
            ],
            [
                'id' => 4,
                'image' =>'pwp_sheet5.jpg',
                'video' => 1,
                'video_link' => 'Fq2CvmgoO7I',
                'subtitle' => "women",
                'title' => 'Nike Flyknit',
                'price' => '300',
                'price_discount' => '',
                'discount' => 0,
                'description' => 'Donec molestie nunc id ex ultricies, id aliquet dui auctor. Etiam gravida diam eu faucibus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent hendrerit orci in aliquam lacinia. Nullam id maximus massa, in laoreet massa. Sed nec justo auctor, pharetra massa eu, scelerisque nisl. Maecenas ac turpis et arcu condimentum lobortis sed at elit. Donec luctus mi et luctus accumsan.',
                'size' => array(5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5),
                'detail_images' => array('rn-05.jpg', 'rn-03.jpg', 'rn-04.jpg', 'rn-01.jpg', 'rn-06.jpg'),
                'color' => array('#fff' , '#333', '#5BD1FF' , '#ED2222'),
                'quantity' => 999
            ],
            [
                'id' => 5,
                'image' =>'pwp_sheet6.jpg',
                'video' => 1,
                'video_link' => 'Fq2CvmgoO7I',
                'subtitle' => "women",
                'title' => 'Nike Epic React',
                'price' => '300',
                'price_discount' => '',
                'discount' => 0,
                'description' => 'Donec molestie nunc id ex ultricies, id aliquet dui auctor. Etiam gravida diam eu faucibus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent hendrerit orci in aliquam lacinia. Nullam id maximus massa, in laoreet massa. Sed nec justo auctor, pharetra massa eu, scelerisque nisl. Maecenas ac turpis et arcu condimentum lobortis sed at elit. Donec luctus mi et luctus accumsan.',
                'size' => array(5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5),
                'detail_images' => array('rn-00.jpg', 'rn-02.jpg', 'rn-03.jpg', 'rn-05.jpg', 'rn-06.jpg'),
                'color' => array('#5BD1FF' , '#ED2222'),
                'quantity' => 999
            ],
            [
                'id' => 6,
                'image' =>'pwp_sheet7.jpg',
                'video' => 0,
                'video_link' => '',
                'subtitle' => "women",
                'title' => 'Nike Epic React Flyknit',
                'price' => '12',
                'price_discount' => '',
                'discount' => 0,
                'description' => 'Donec molestie nunc id ex ultricies, id aliquet dui auctor. Etiam gravida diam eu faucibus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent hendrerit orci in aliquam lacinia. Nullam id maximus massa, in laoreet massa. Sed nec justo auctor, pharetra massa eu, scelerisque nisl. Maecenas ac turpis et arcu condimentum lobortis sed at elit. Donec luctus mi et luctus accumsan.',
                'size' => array(5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5),
                'detail_images' => array('rn-04.jpg', 'rn-01.jpg', 'rn-03.jpg', 'rn-02.jpg', 'rn-07.jpg'),
                'color' => array('#333'),
                'quantity' => 999
            ],
            [
                'id' => 7,
                'image' =>'pwp_sheet8.jpg',
                'video' => 0,
                'video_link' => '0',
                'subtitle' => 'kids',
                'title' => 'Nike Epic React Flyknit',
                'price' => '25',
                'price_discount' => '',
                'discount' => 0,
                'description' => 'Donec molestie nunc id ex ultricies, id aliquet dui auctor. Etiam gravida diam eu faucibus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent hendrerit orci in aliquam lacinia. Nullam id maximus massa, in laoreet massa. Sed nec justo auctor, pharetra massa eu, scelerisque nisl. Maecenas ac turpis et arcu condimentum lobortis sed at elit. Donec luctus mi et luctus accumsan.',
                'size' => array(5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5),
                'detail_images' => array('rn-01.jpg', 'rn-04.jpg', 'rn-03.jpg', 'rn-02.jpg', 'rn-07.jpg'),
                'color' => array('#333'),
                'quantity' => 999
            ],
            [
                'id' => 8,
                'image' =>'pwp_sheet9.jpg',
                'video' => 0,
                'video_link' => '',
                'subtitle' => 'kids',
                'title' => 'Nike Epic React Flyknit',
                'price' => '8',
                'price_discount' => '',
                'discount' => 0,
                'description' => 'Donec molestie nunc id ex ultricies, id aliquet dui auctor. Etiam gravida diam eu faucibus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent hendrerit orci in aliquam lacinia. Nullam id maximus massa, in laoreet massa. Sed nec justo auctor, pharetra massa eu, scelerisque nisl. Maecenas ac turpis et arcu condimentum lobortis sed at elit. Donec luctus mi et luctus accumsan.',
                'size' => array(5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5),
                'detail_images' => array('rn-03.jpg', 'rn-02.jpg', 'rn-01.jpg', 'rn-07.jpg', 'rn-06.jpg'),
                'color' => array('#fff' , '#333', '#5BD1FF' , '#ED2222'),
                'quantity' => 0
            ]
        );
    }

    public function index(){
        $this->data['result'] = $this->value;

        //echo '<pre>';
        //print_r($this->data['result']);die;

        $this->render('list_products_view');
    }

    public function detail($id){
        $this->data['result'] = $this->value;
        $this->data['detail'] = $this->value[$id];

        //echo '<pre>';
        //print_r($this->data['detail']);die;

        $this->render('detail_product_view');
    }
}
