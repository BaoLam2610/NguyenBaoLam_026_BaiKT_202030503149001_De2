<?php 
	include "models/KtraDkiModel.php";
	class KtraDkiController extends Controller{
		use KtraDkiModel;
		public function chitiet(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$data = $this->getNguoiDki($id);
			$this->loadView("ChiTietDkiView.php",array('data'=>$data));
		}
		public function index(){
			$data = $this->getDsDki();
			$this->loadView("KtraDkiView.php",array('data'=>$data));
		}
		
	}
 ?>