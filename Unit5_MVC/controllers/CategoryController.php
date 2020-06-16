<?php 
	require_once('models/Category.php');
	class CategoryController{
		var $cate_model;

		function __construct(){
			$this->cate_model = new Category();
		}

		public function list(){
			$data = array();
			$data = $this->cate_model->All();
			require_once('views/category/list.php');
		}

		public function detail(){
			$id=isset($_GET['id'])?$_GET['id']:0;

			$cate = $this->cate_model->find($id);

			require_once('views/category/detail.php');
		}

		public function add(){
			echo "<br> Thêm mới category";
		}
	}
 ?>