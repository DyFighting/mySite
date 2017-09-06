<?php

class Db{
	static private  $_instance=null;
	static private  $_connSource=null;
	public  $dbhost='localhost';
	public	$dbuser='root';
	public	$dbpwd='root';
	private function __construct(){
		
	
	}
			
	static public function getInstance(){
		if(!(self::$_instance instanceof self)){
			self::$_instance=new Db();
			
		}
		return self::$_instance;
		
	}
	public function connect(){
		if(!self::$_connSource){
			
		self::$_connSource = mysqli_connect($this->dbhost,$this->dbuser,$this->dbpwd);
		if(!self::$_connSource)
		{
			die('数据库连接错误'.mysql_error);
		}
		mysqli_query(self::$_connSource , "set names utf8");
		mysqli_select_db(self::$_connSource,'website');
		}
		return self::$_connSource;
	}
	
}



?>