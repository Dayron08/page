<?php 
require_once('main_model.php');

class SingUp extends Connection_Mysql {
	private $user_id;
	private $name;
	private $surname;
	private $password;

	public $status_id;
	public $status;

	public function set_user_id($user_id){
        $this->user_id = $user_id;
    }

    public function get_user_id(){
        return $this->user_id;
    }

	public function set_name($name){
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }

	public function set_surname($surname){
        $this->surname = $surname;
    }

    public function get_surname(){
        return $this->surname;
    }

	public function set_password($password){
        $this->password = $password;
    }

    public function get_password(){
        return $this->password;
    }

	public function create() {
		$this->query = "CALL P_INSERTAR_DATOS_PERSONA_USU(                
			'".$this->user_id."', 
			'".$this->name."',
			'".$this->surname."',
			'1999/09/27',
			'M',
			'".$this->password."',
			'ran@676gmail.com',
			83195333,
			'../NUEVA_FOTO');";
		$this->set_query($this->query);
	}

	public function read() {
		$this->query = "SELECT * FROM persona";
		
		$this->get_query();
		//var_dump($this->rows);

		$num_rows = count($this->rows);
		//echo $num_rows;

		$data = array();

		//http://php.net/manual/es/control-structures.foreach.php
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
			//$data[$key] =  $value;
		}

		return $data;
	}

	public function update( $status_data = array() ) {
		foreach ($status_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "UPDATE status SET status_id = $status_id, status = '$status' WHERE status_id = $status_id";
		$this->set_query($this->query);
	}

	public function delete( $status_id = '' ) {
		$this->query = "DELETE FROM status WHERE status_id = $status_id";
		$this->set_query($this->query);
	}

	public function __destruct() {
		unset($this->db_name);
	}
}