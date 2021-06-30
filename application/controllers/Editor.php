<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends CI_Controller {

	public function index()
	{
		$this->load->view('editor/editor_view');
	}


	public function post(){
		$data['post'] = $this->editor_model->fetch();
		$this->load->view('template/header');
		$this->load->view('editor/post',$data);
		$this->load->view('template/footer');
	}

	public function insertData(){
	//  $data = $this->input->post('content');
	 $data = $_POST['content'];
		$this->editor_model->db_insert($data);
		

	}

	public function upload(){
		//upload images/////////////////////////////////////////////////////////
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'mp4|jpeg|png|jpg';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload',$config);
        //////////////////////img////////////// 
        if(!empty($_FILES['image']['name'])){
			if (!$this->upload->do_upload('image'))
			{
			   $error = array('error' => $this->upload->display_errors());
			   print_r($error);
			}
			else
			{
			   $data = $this->upload->data();
			   echo json_encode($data['file_name']);          
			}
        }else{
			$error = 'file not exist';
          echo json_encode($error);
        }


		
		
		
	}

	public function save(){
		// $data['url']  = $this->input->post('url');
		$data['crop'] = $this->input->post('crop');
		$coordinates = $this->input->post('crop');
		$coordinates = explode(",",$coordinates );
		$r_y1 = $coordinates[0];
		$r_x1 = $coordinates[1];
		$r_y2 = $coordinates[2];
		$r_x2 = $coordinates[3];

		$data['alt'] = 'this is title';
		if(isset($data['crop']) and ($data['crop'] != "0,0,1,1")){

			$data['old_img']  = $this->input->post('url');
			$ext = strrchr($data['old_img'], ".");
			list($width, $height) = getimagesize($data['old_img']);

			$y1 = $height * $r_y1;
			$x1 = $width * $r_x1;
			$y2 = $height * $r_y2;
			$x2 = $width * $r_x2;
			$new_width = ($x2 - $x1);
			$new_height = ($y2 - $y1);
			
			// echo json_encode($ext);

			if(($ext == '.PNG') or ($ext == '.png')){
				// echo json_encode($data['old_img']);
				$im = imagecreatefrompng($this->input->post('url'));
				$im2 = imagecrop($im, ['x' => $x1, 'y' => $y1, 'width' => $new_width, 'height' => $new_height]);
				$img_name  = md5(time());
				if ($im2 !== FALSE) {
					imagepng($im2, $_SERVER["DOCUMENT_ROOT"].'\editor\assets\images\\'.$img_name.'.png');
					// imagedestroy($im2);
				}
				// imagedestroy($im);
				$data['url'] = base_url() . 'assets/images/'.$img_name.'.png';
				$data['size'] = '600600';
				echo json_encode($data);
				
			}elseif(($ext == '.jpeg') or ($ext == '.jpg')){
				$im = imagecreatefromjpeg($this->input->post('url'));
				$im2 = imagecrop($im, ['x' => $x1, 'y' => $y1, 'width' => $new_width, 'height' => $new_height]);
				$img_name  = md5(time());
				if ($im2 !== FALSE) {
					imagejpeg($im2, $_SERVER["DOCUMENT_ROOT"].'\editor\assets\images\\'.$img_name.'.jpg');
					// imagedestroy($im2);
				}
				// imagedestroy($im);
				$data['url'] = base_url() . 'assets/images/'.$img_name.'.jpg';
				$data['size'] = '600600';
				echo json_encode($data);
			}else{
				$data['size'] = '600600';
				$data['url'] = $this->input->post('url');
			}
			

		}else{
			// $data['old_img']  = $this->input->post('url');
			// $ext = strrchr($data['old_img'], ".");
			$data['size'] = '600600';
			$data['url'] = $this->input->post('url');
			$data['error'] = "no crop";
			// // // 	$data['url_new'] = base_url().'assets/images/'.$img_name.'.png';
			echo json_encode($data);
		}
					
	}



	public function rotateImg(){
		$data['url'] = $this->input->post('url');
		$data['direction'] = $this->input->post('direction');
		if($data['direction'] == 'CCW'){
			// $ext = pathinfo($data['url'], PATHINFO_EXTENSION);
			$ext = strrchr($data['url'], ".");
			

			switch ($ext) {
				case $ext == '.png' || $ext == '.PNG':

					$img_old = pathinfo($this->input->post('url'), PATHINFO_FILENAME);
					$data['source'] = imagecreatefrompng($this->input->post('url'));
					$rotate = imagerotate($data['source'], -90, 0);
					$img_name  = md5(time());
					$data['new_img']  =  imagepng($rotate,$_SERVER["DOCUMENT_ROOT"].'\editor\assets\images\\'.$img_name.'.png');
					$data['url_new'] = base_url().'assets/images/'.$img_name.'.png';
					
					imagedestroy($data['source']);
				
					echo json_encode($data['url_new']);
					// unlink($_SERVER["DOCUMENT_ROOT"].'/editor/assets/images/'.$img_old.$ext); 
					
					break;
				case $ext == '.jpg' || $ext == '.JPG' || $ext == '.jpeg':

					$img_old = pathinfo($this->input->post('url'), PATHINFO_FILENAME);
					$data['source'] = imagecreatefromjpeg($this->input->post('url'));
					$rotate = imagerotate($data['source'], -90, 0);
					$img_name  = md5(time());
					$data['new_img']  =  imagejpeg($rotate,$_SERVER["DOCUMENT_ROOT"].'\editor\assets\images\\'.$img_name.'.jpg');
					$data['url_new'] = base_url().'assets/images/'.$img_name.'.jpg';
					
					imagedestroy($data['source']); 
					echo json_encode($data['url_new']);
					// unlink($_SERVER["DOCUMENT_ROOT"].'/editor/assets/images/'.$img_old.$ext);
					break;
				default:
				// echo json_encode($ext);
					$data['url_new'] = base_url().'assets/err/err.png';
					echo json_encode($data['url']);
					break;
			}

			
		}else{
					// $ext = pathinfo($data['url'], PATHINFO_EXTENSION);
			$ext = strrchr($data['url'], ".");
			

			switch ($ext) {
				case $ext == '.png' || $ext == '.PNG':

					$img_old = pathinfo($this->input->post('url'), PATHINFO_FILENAME);
					$data['source'] = imagecreatefrompng($this->input->post('url'));
					$rotate = imagerotate($data['source'], 90, 0);
					$img_name  = md5(time());
					$data['new_img']  =  imagepng($rotate,$_SERVER["DOCUMENT_ROOT"].'\editor\assets\images\\'.$img_name.'.png');
					$data['url_new'] = base_url().'assets/images/'.$img_name.'.png';
					
					imagedestroy($data['source']);
				
					echo json_encode($data['url_new']);
					// unlink($_SERVER["DOCUMENT_ROOT"].'/editor/assets/images/'.$img_old.$ext); 
					break;
				case $ext == '.jpg' || $ext == '.JPG' || $ext == '.jpeg':

					$img_old = pathinfo($this->input->post('url'), PATHINFO_FILENAME);
					$data['source'] = imagecreatefromjpeg($this->input->post('url'));
					$rotate = imagerotate($data['source'], 90, 0);
					$img_name  = md5(time());
					$data['new_img']  =  imagejpeg($rotate,$_SERVER["DOCUMENT_ROOT"].'\editor\assets\images\\'.$img_name.'.jpg');
					$data['url_new'] = base_url().'assets/images/'.$img_name.'.jpg';
					
					imagedestroy($data['source']);
					
					echo json_encode($data['url_new']);
					// unlink($_SERVER["DOCUMENT_ROOT"].'/editor/assets/images/'.$img_old.$ext); 
					break;
				default:
				// echo json_encode($ext);
					$data['url_new'] = base_url().'assets/err/err.png';
					echo json_encode($data['url']);
					break;
			}

		}
		
	}
}