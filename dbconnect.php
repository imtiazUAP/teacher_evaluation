<?php
class bdClass{

	function mysqlConnect($host,$username,$password,$name){
		$connectect = @mysql_connect($host, $username, $password) or die(mysql_error());
		$selected = @mysql_select_db($name) or die(mysql_error());
	}
	
	function myQuery($query, $fieldName){
		$this->query 	= @mysql_query($query) or die(mysql_error());
		$this->rows	= @mysql_fetch_array($this->query);
		$this->count_all = @mysql_num_rows($this->query);
		$value	= $this->rows[$fieldName];
		return $value;
	}
}

$bdconnect = new bdClass;
//('mysqlserver','dbuser','dbpassword','dbname')
$hello = $bdconnect->mysqlConnect('localhost', 'root', '', 'teacher_evaluation' );
?>
