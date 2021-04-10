<?php
class theloai extends DBControllers{
    
        
        public function __construct(){
            $data = array();
            $message = array();
            parent::__construct();
    
        }
        public function list_theloai(){
            
            $this->load->view('header');
            $theloaimodel = $this->load->model('theloaimodel');
            $table_theloai = 'theloai';
            $data['theloai'] = $theloaimodel->theloai($table_theloai);
            $this->load->view('theloai', $data);
            $this->load->view('footer');
        }
        public function theloaibyid(){
            
            $this->load->view('header');
            $theloaimodel = $this->load->model('theloaimodel');
            $id = 3;
            $table_theloai = 'theloai';
            $data['theloaibyid'] = $theloaimodel->theloaibyid($table_theloai, $id);
            $this->load->view('theloaibyid', $data);
            $this->load->view('footer');
        }
        public function themtheloai(){
            $this->load->view('themtheloai');
        }
        public function inserttheloai(){
            $theloaimodel = $this->load->model('theloaimodel');
            $table_theloai = 'theloai';
            $tenloai = $_POST['TenLoai'];
            $data = array('TenLoai'=> $tenloai);
            // $data['theloaibyid'] = $theloaimodel->theloaibyid($table_theloai,$id);
            $result = $theloaimodel->inserttheloai($table_theloai,$data);
            if($result==1){
				$message['msg'] = "Thêm dữ liệu thành công";
			}else{
				$message['msg'] = "Thêm dữ liệu thất bại";
			}
			$this->load->view('themtheloai',$message);
        }
        public function capnhat(){
            $theloaimodel = $this->load->model('theloaimodel');
            $table_theloai = 'theloai';
            // $tenloai = $_POST['TenLoai'];
            $id = 3;
            $cond = "theloai.ID = '$id'";
            $data = array('TenLoai'=> 'THú');
            // $data['theloaibyid'] = $theloaimodel->theloaibyid($table_theloai,$id);
            $result = $theloaimodel->capnhattheloai($table_theloai,$data,$cond);
            if($result==1){
				echo "Cập nhật dữ liệu thành công";
			}else{
				echo "Cập nhật liệu thất bại";
			}
			// $this->load->view('themtheloai',$message);
        }
        public function xoa(){
            $theloaimodel = $this->load->model('theloaimodel');
            $table_theloai = 'theloai'; 
            $cond = "ID=10";
            $result = $theloaimodel->xoatheloai($table_theloai,$cond);
            if($result==1){
				echo "Xóa dữ liệu thành công";
			}else{
				echo "Xóa dữ liệu thất bại";
			}

        }
    
}

?>