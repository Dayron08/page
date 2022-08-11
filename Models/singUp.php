<?php 
require_once('main_model.php');

class SingUp extends Connection_Mysql {
	// variables to register
	private $user_id;
	private $name;
	private $surname;
	private $password;


	// variables to view profile 
	private $p_email;
	private $p_password;

	private $result;
	private $database;
	public $null = null;

	public $status_id;
	public $status;

	public function __construct()
	{
		$this->database = new Connection_Mysql();

	}

	public function set_user_id($user_id){
        $this->user_id = $user_id;
    }

	public function set_name($name){
        $this->name = $name;
    }

	public function set_surname($surname){
        $this->surname = $surname;
    }

	public function set_password($password){
        $this->password = $password;
    }

	public function set_gmail($gmail){
        $this->gmail = $gmail;
    }

	public function set_query($query){
        $this->query = $query;
    }

	// methods to view profile 
	public function set_p_email($p_email){
        $this->p_email = $p_email;
    }

	public function set_p_password($p_password){
        $this->p_password = $p_password;
    }


	private function execute($query){

		$this->result = $this-> database->set_query($this->query);
		$this-> database->db_close();
		return $this->result;
	}
	
	public function create() {
		$this->query = "CALL P_INSERTAR_DATOS_PERSONA_USU(                
			'".$this->user_id."', 
			'".$this->name."',
			'".$this->surname."',
			NULL,
			NULL,
			'".$this->password."',
			'".$this->gmail."',
			NULL,
			NULL);";
			
		$this->execute($this->query);

	}

	// function to call data profile
	public function call_profile() {
		$this->query = "CALL P_VER_USUARIO_PERFIL(
		'".$this->p_email."',
		'".$this->p_password."');"; 
		$this->execute($this->query);
		$this->result = mysqli_fetch_assoc($this->result);
		return $this->result;
	}

	// function to validate profile profile
	public function validate_person() {
		$this->query = "CALL P_VER_USUARIO_PERFIL(
		'".$this->p_email."',
		'".$this->p_password."');"; 
		$this->execute($this->query);
		$this->result = mysqli_fetch_assoc($this->result);
		return $this->result;
	}

	public function read() {

		session_start();

		$this->query = "CALL P_VALI_LOGIN(
		'".$this->gmail."',
		'".$this->password."');";
		
	    // var_dump($this->get_query());

		// $this->rows = ['hola','m'];
		
		var_dump($this->rows);


		$data = array();

		foreach ($this->rows as $value) {
					array_push($data, $value);
					//$data[$key] =  $value;
		}
		
		$_SESSION['ID_REGISTO_PERSON'] = isset($this->rows["ID_REGISTO_PERSONA"]); 
		

		if($this->rows== null){
		echo "2";
		}else{
			if($this->rows["TIPO_PERSONA"] == 0){  
				echo "0";
			}else if($this->rows["TIPO_PERSONA"] == 1){
				echo "1";
			}
		}

		

		return $data;

	}




	//maria esto no se usa
	// public function update( $status_data = array() ) {
	// 	foreach ($status_data as $key => $value) {
	// 		$$key = $value;
	// 	}

	// 	$this->query = "UPDATE status SET status_id = $status_id, status = '$status' WHERE status_id = $status_id";
	// 	$this->set_query($this->query);
	// }

	// public function delete( $status_id = '' ) {
	// 	$this->query = "DELETE FROM status WHERE status_id = $status_id";
	// 	$this->set_query($this->query);
	// }

	// //to destroy $this
	// public function __destruct() {
	// 	unset($this->database);
	// }
	
}