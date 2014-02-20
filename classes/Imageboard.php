<?php

class Imageboard {

	private $_db;
	private $_data;

	public function __construct($user = null) {
		$this->_db = DB::getInstance();

	}	

	public function recent_images() {
		$image_obj = $this->_db->specific_get('comment, img, thumb, username', 'image_board', array('id', '<' , '11'));
		$images_obj = $this->_db->results('image_board', array('id', '<' , '11'));

		return $images_obj;
	}


}
?>