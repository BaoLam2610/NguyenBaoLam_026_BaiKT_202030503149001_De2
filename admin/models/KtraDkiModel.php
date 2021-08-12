<?php 
	trait KtraDkiModel{
		public function getDsDki(){
			$conn = Connection::getInstance();
			$data = $conn->query("select * from danhsachdki");
			return $data->fetchAll();
		}
		public function getNguoiDki($id){
			$conn = Connection::getInstance();
			$data = $conn->query("select * from danhsachdki where id=$id");
			return $data->fetch();
		}
	}
 ?>