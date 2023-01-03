<?php 

namespace core;

use library\triangle;
use library\message;

class model
{
	public $db;
	public $return;

	public function __construct()
	{
		$this->db = new triangle();
		$this->return = message::getInstance();
	}
}