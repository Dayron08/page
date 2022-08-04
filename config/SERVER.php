<?php
class Configuration{
	
	private static $SERVER="localhost";
	private static $DB="pacvi";
	private static $USER="root";
	private static $PASS="";
	private static $SGBD;

	private function SGBD(){
		$this->SGBD="mysql:host=".$this->SERVER.";dbname=".$this->DB;
	}

	private static $METHOD="AES-256-CBC";
	private static $SECRET_KEY='$PRESTAMOS@2020';
	private static $SECRET_IV='037970';
}