<?php
	class config {
		protected $mysqli;
		
		public function __construct() {
			$this->mysqli = new mysqli('http://185.27.134.10/','epiz_25823569','xVIXoExaris','epiz_25823569_database');
		}
	}
?>