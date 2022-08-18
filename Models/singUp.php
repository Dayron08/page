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

	public function set_rol($rol){
        $this->rol = $rol;
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

	public function set_consul($consul){
        $this->consul = $consul;
    }

	public function set_testimony($testimony){
        $this->testimony = $testimony;
    }

	// methods to view profile 
	public function set_p_email($p_email){
        $this->p_email = $p_email;
    }

	public function set_p_password($p_password){
        $this->p_password = $p_password;
    }

	public function set_subjet($subject){
        $this->subject = $subject;
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

	public function insertQuery() {
		$this->query = "CALL P_INSERTAR_CONSULTA(                
			'".$this->name."',
			'".$this->surname."',
			'".$this->gmail."',
			'".$this->subject."',
			'".$this->consul."');";
			
		$this->execute($this->query);

	} 
 
	public function insertTestimony() {
	
		$this->query = "CALL P_INSERTAR_PERSONA_TESTIMONIO(                
			'".$this->testimony."',
			'".$this->user_id."');"; 
		// $this->query = "INSERT INTO `persona_testimonios`(`ID_TESTI`, `DSC_TESTIMONIO`, `FECHA_INGRESO`, `ID_REGISTRO_PERSONA`) VALUES (NULL, '".$this->testimony."', '2022/08/17','".$this->user_id."')";
		$this->execute($this->query);

	} 


	public function insertAdmin() {
		$this->query = "CALL P_INSERTAR_DATOS_PERSONA_ADMIN(                
			'".$this->user_id."', 
			'".$this->name."',
			'".$this->surname."',
			NULL,
			NULL,
			'".$this->rol."',
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

	

	public function read() {

		session_start();
		
		$this->query = "CALL P_VALI_LOGIN(
		'".$this->gmail."',
		'".$this->password."');";
		$this->execute($this->query);
	    $row = mysqli_fetch_assoc($this->result);
		
		$_SESSION['ID_REGISTRO_PERSONA'] = ISSET($row["ID_REGISTRO_PERSONA"]); 
		
		return $row;
	}

	

	public function readimages() {
		
		
		$this->query = 
		"CALL P_VER_FOTOS();";
		// $this->query = "SELECT `ID_IMAGEN`, `IMG_PATH` FROM `galeria`";
		$this->execute($this->query);
		$images = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$images[]= array(
				"id"=> $result["ID_IMAGEN"],
				"image" => $result["IMG_PATH"]);
		}
		return $images;

	}


	public function readTestimonials() {
		
		$this->query = "CALL P_VER_PERSONA_TESTIMONIO();";
		$this->execute($this->query);

	   $testimonials = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$testimonials []= array(
				"dsc"=> $result["DSC_TESTIMONIO"],
				"name" => $result["NOMBRE"],
				"lastname" => $result["APPELLIDOS"]);
		}
		
		return $testimonials ;

	}

	public function readConsul() {
		
		$this->query = "CALL P_VER_CONSULTAS_BY_FECHA();";
		$this->execute($this->query);

	   $consul = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$consul []= array(
				"subject"=> $result["ASUNTO"],
				"consul" => $result["DSC_ASUNTO"],
				"name" => $result["NOMBRE"],
				"gmail" => $result["CORREO"]);
		}
		
		return $consul ;

	}


	public function readTestimonialsHome() {
		
		$this->query = "CALL P_VER_PERSONA_TESTIMONIO();";
		$this->execute($this->query);

	   $testimonial = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$testimonial []= array(
				"dsc"=> $result["DSC_TESTIMONIO"],
				"name" => $result["NOMBRE"],
				"lastname" => $result["APPELLIDOS"]);
		}
		
		
		return $testimonial;

	}

}




