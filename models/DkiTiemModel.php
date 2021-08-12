<?php 
	trait DkiTiemModel{
		public function getTgTiem(){
			$conn = Connection::getInstance();
			$data = $conn->query("select * from thoigiantiem");
			return $data->fetchAll();
		}
		public function getNoiTiem(){
			$conn = Connection::getInstance();
			$data = $conn->query("select * from noitiem");
			return $data->fetchAll();
		}
		public function getNhomUTien(){
			$conn = Connection::getInstance();
			$data = $conn->query("select * from doituonguutien");
			return $data->fetchAll();
		}
		public function dangkyPost(){
			$HoTen = $_POST["HoTen"];
			$NgaySinh = $_POST["NgaySinh"];
			$SDT = $_POST["SDT"];
			$CMND = $_POST["CMND"];
			$BHYT = $_POST["BHYT"];
			$DiaChi = $_POST["DiaChi"];
			$TgTiem = $_POST["TgTiem"];
			$NoiTiem = $_POST["NoiTiem"];
			$NhomUuTien = $_POST["NhomUuTien"];
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into danhsachdki set HoTen=:var_HoTen,NgaySinh=:var_NgaySinh,SDT=:var_SDT,CMND=:var_CMND,BHYT=:var_BHYT,DiaChi=:var_DiaChi,TgTiem=:var_TgTiem,NoiTiem=:var_NoiTiem,NhomUuTien=:var_NhomUuTien");
			$query->execute(array("var_HoTen"=>$HoTen,"var_NgaySinh"=>$NgaySinh,"var_SDT"=>$SDT,"var_CMND"=>$CMND,"var_BHYT"=>$BHYT,"var_DiaChi"=>$DiaChi,"var_TgTiem"=>$TgTiem,"var_NoiTiem"=>$NoiTiem,"var_NhomUuTien"=>$NhomUuTien));
			header("location:index.php?controller=DkiTiem&action=thanhcong");
		}
	}
 ?>