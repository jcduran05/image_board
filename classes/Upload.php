<?php

class Upload
{
	private $_db;
	public $tmp_image = '';
	public $image_name = '';
	public $thumb_name = '';

	public function __construct() {
           $this->_db = DB::getInstance();
	}

	public function checkImageUpload ($tmp_image) {
		if ( is_uploaded_file( $tmp_image['tmp_name']) === true ) {
			$image_info = getimagesize( $tmp_image['tmp_name'] );
			//var_dump( $image_info );
			$image_mime = $image_info['mime'];

			    if ( $tmp_image['size'] > 1048576 ) {
				    $img_msg = "The limit on uploads is 1MB.";
			    } elseif ( preg_match( '/^image\/jpeg/', $image_mime ) === 0) {
				    $img_msg = "Only JPEG files are allowed.";
			    } elseif ( move_uploaded_file( $tmp_image['tmp_name'] , 'upload/image_' . time() . '.jpg' ) === true ) {
				    $this->image_name = 'upload/image_' . time() . '.jpg';
				    // $img_msg = "The image has been donwloaded.";
				    $this->create_thumbnail($this->image_name);
			    }else{
	                $img_msg ='null';            
			    }
		}
		return $tmp_image;
	}

	public function create_thumbnail ($tmp_image) {
		$img_source = $tmp_image;
		list($width, $height) = getimagesize($img_source); // image width & height
		$myImage = imagecreatefromjpeg($img_source); // saving image to manipulate with GD library
		
		if($width > $height) { // detemine if x or y is bigger for centered crop
			$biggestSide = $width;
		} else {
			$biggestSide = $height;
		}

		//The crop size will be half that of the largest side
		$cropPercent = .5;
		$cropWidth   = $biggestSide*$cropPercent;
		$cropHeight  = $biggestSide*$cropPercent;


		//getting the top left coordinate
		$c1 = array("x"=>($width-$cropWidth)/2, "y"=>($height-$cropHeight)/2);

		//Create thumbnail
		$thumbSize = 150;
		$thumb = imagecreatetruecolor($thumbSize, $thumbSize);
		imagecopyresampled($thumb, $myImage, 0, 0, $c1['x'], $c1['y'], $thumbSize, $thumbSize, $cropWidth, $cropHeight);

		//final output

		$save_thumb = imagejpeg( $thumb, $this->thumb_name = 'upload/thumb_' . time() . '.jpg' );

		return true;
	}

		public function insert_image ($username, $comment) {
		$fields = array(
					'username' => $username,
					'comment' => $comment,
					'img' => $this->image_name,
					'thumb' => $this->thumb_name
				);

		$this->_db->insert('image_board', $fields);
		return true;
	}

}
?>