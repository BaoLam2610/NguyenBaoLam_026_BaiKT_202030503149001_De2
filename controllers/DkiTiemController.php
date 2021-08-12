<?php 
	//load file model
	include "models/DkiTiemModel.php";
	class DkiTiemController extends Controller{
		use DkiTiemModel;
		public function index(){
			$tgTiem = $this->getTgTiem();
			$diaDiemTiem = $this->getNoiTiem();
			$nhomUuTien = $this->getNhomUTien();
			$this->loadView("DkiTiemView.php",array('tgTiem'=>$tgTiem,'diaDiemTiem'=>$diaDiemTiem,'nhomUuTien'=>$nhomUuTien));
		}
		public function thanhcong(){
			$this->loadView("DkiThanhCongView.php");
		}
		public function checkout(){
			//kiem tra neu user chua dang nhap thi di chuyen den trang dang nhap
			if(isset($_SESSION["nguoidung"]) == false)
				header("location:index.php?controller=account&action=login");
			else{
				header("location:index.php?controller=DkiTiem");
			}
		}
		public function dangky(){
			$this->dangkyPost();
		}
	}	
 ?>