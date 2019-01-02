<?php
	class DbConfig
	{
		private $_host ="localhost";
		private $_username ="clandust_dk";
		private $_password = "Euro2018";
		private $_database = "clandust_dk";
		protected $conn;
		
		public function __contruct() {
			$this->conn = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
			if (!$this->conn) {
				die("Cannot connect to database server");
			}
		}    
		
		public function getRows($table) {
			$sql = "SELECT * FROM " . $table;
			
			$result = $this->conn->query($sql);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$data[] = $row;
				}
			}
			
			return !empty($data)?$data:false;
		}
	}
?>
