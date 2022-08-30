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
	public $i;

	public function __construct()
	{
		$this->database = new Connection_Mysql();

	}

	public function set_user_id($user_id){
        $this->user_id = $user_id;
    }

	public function set_id_testi($id){
        $this->id = $id;
    }

	public function set_id_event($idEvent){
        $this->idEvent = $idEvent;
    }

	public function set_id_images($idImagen){
        $this->idImagen = $idImagen;
    }

	public function set_id_consul($idConsul){
        $this->idConsul = $idConsul;
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

	public function set_nameEvent($nameEvent){
        $this->nameEvent = $nameEvent;
    }

	public function set_dscEvent($dscEvent){
        $this->dscEvent = $dscEvent;
    }

	public function set_dateEvent($dateEvent){
        $this->dateEvent = $dateEvent;
    }

	public function set_date($date){
        $this->date = $date;
    }

	public function set_timeEvent($timeEvent){
        $this->timeEvent = $timeEvent;
    }

	public function set_imageEvent($imageEvent){
        $this->imageEvent = $imageEvent;
    }

	
	public function set_image($image){
        $this->image = $image;
    }

	public function set_category($category){
        $this->category = $category;
    }

	public function set_password($password){
        $this->password = $password;
    }

	public function set_gender($gender){
        $this->gender = $gender;
    }

	public function set_dateadmission($dateadmission){
        $this->dateadmission = $dateadmission;
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

	public function insertImage() {
	
		// $this->query = "CALL P_INSERTAR_PERSONA_TESTIMONIO(                
		// 	'".$this->testimony."',
		// 	'".$this->user_id."');"; 
		$this->query = "INSERT INTO `galeria`(`ID_IMAGEN`, `CODIGO_IMG`, `IMG_PATH`, `FECHA`) VALUES (NULL, '".$this->category."', '".$this->image."' ,'2022/08/17')";
		$this->execute($this->query);

	} 

	public function insertEvent() {
	
		$this->query = "CALL P_INSERTAR_EVENTO(                
			'".$this->name."',
			'".$this->nameEvent."',
			'".$this->timeEvent."',
			'".$this->imageEvent."',
			'".$this->dscEvent."',
			'".$this->dateEvent."');"; 
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

		//meti ID_TIPO
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

	public function readimagesTown() {
		
		
		$this->query = 
		"CALL P_VER_FOTOS_CODIGO_P();";
		
		$this->execute($this->query);
		$imagesTown = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$imagesTown[]= array(
				"id"=> $result["ID_IMAGEN"],
				"image" => $result["DIRECCION_DE_IMAGEN"]);
		}

		return $imagesTown;

	}

	public function readimagesYoung() {
		
		
		$this->query = 
		"CALL P_VER_FOTOS_CODIGO_J();";
		
		$this->execute($this->query);
		$imagesYoung = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$imagesYoung[]= array(
				"id"=> $result["ID_IMAGEN"],
				"image" => $result["DIRECCION_DE_IMAGEN"]);
		}
		
		return $imagesYoung;

	}

	public function readimagesChildren() {
		
		
		$this->query = 
		"CALL P_VER_FOTOS_CODIGO_N();";
		
		$this->execute($this->query);
		$imagesYoung = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$imagesYoung[]= array(
				"id"=> $result["ID_IMAGEN"],
				"image" => $result["DIRECCION_DE_IMAGEN"]);
		}
		
		return $imagesYoung;

	}


	public function readTestimonials() {
		
		$this->query = "CALL P_VER_PERSONA_TESTIMONIO();";
		$this->execute($this->query);

	   $testimonials = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$testimonials []= array(
				"idTesti"=> $result["ID_TESTI"],
				"dsc"=> $result["DSC_TESTIMONIO"],
				"name" => $result["NOMBRE"],
				"lastname" => $result["APPELLIDOS"]);
		}
		
		return $testimonials ;

	}
 
		




	public function readEvents() {
		
		$this->query = "CALL P_HISTORICO_EVENTO();";
		$this->execute($this->query);

	   $events = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$events []= array(
				"id"=> $result["ID_EVENT"],
				"nameEvent"=> $result["NOMBRE_EVENTO"],
				"name" => $result["ENCARGADO"],
				"dsc" => $result["DSC_EVENTO"],
				"img" => $result["IMG_PATH"],
				"time" => $result["HORA_EVENTO"],
				"date" => $result["FECHA_EVENTO"]);
		}
		
		return $events ;

	} 

	public function getEvent() {
		 
		$this->query = "CALL P_VER_EVENTO(
		'".$this->idEvent."');";
		
		$this->execute($this->query);

	   $event = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$event []= array(
				"id"=> $result["ID_EVENT"],
				"nameEvent"=> $result["NOMBRE_EVENTO"],
				"name" => $result["ENCARGADO"],
				"dsc" => $result["DSC_EVENTO"],
				"img" => $result["IMG_PATH"],
				"time" => $result["HORA_EVENTO"],
				"date" => $result["FECHA_EVENTO"]);
		}
		
		return $event ;

	} 

	public function readEventsUsers() {
		
		$this->query = "CALL P_VER_EVENTOS();";
		$this->execute($this->query);

	   $events = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$events []= array(
				"nameEvent"=> $result["NOMBRE_EVENTO"],
				"name" => $result["ENCARGADO"],
				"dsc" => $result["DSC_EVENTO"],
				"img" => $result["IMG_PATH"],
				"time" => $result["HORA_EVENTO"],
				"date" => $result["FECHA_EVENTO"]);
		}
		
		return $events ;

	}

	public function readConsul() {
		
		$this->query = "CALL P_VER_CONSULTAS_BY_FECHA();";
		$this->execute($this->query);

	   $consul = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$consul []= array(
				"id"=> $result["ID_CONSULTAS"],
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
		while (($result = mysqli_fetch_assoc($this->result))) {
			$testimonial []= array(
				"dsc"=> $result["DSC_TESTIMONIO"],
				"name" => $result["NOMBRE"],
				"lastname" => $result["APPELLIDOS"]);
			
		}
		
		
		return $testimonial;

	}

	
	public function deleteTesti() {
	
		$this->query = "CALL P_ELIMINAR_PERSONA_TESTIMONIO(                
			'".$this->id."');"; 
		

		// $this->query = "DELETE FROM `persona_testimonios` WHERE `ID_TESTI` = '".$this->id."'";
		
		$this->execute($this->query);

	} 

	public function deleteEvent() {
	
		$this->query = "CALL P_ELIMINAR_EVENTO(                
			'".$this->idEvent."');"; 
		

		// $this->query = "DELETE FROM `eventos` WHERE `ID_EVENT` = '".$this->idEvent."'";
		
		$this->execute($this->query);

	} 

	public function deleteConsul() {

		$this->query = "CALL P_ELIMINAR_CONSULTA(                
			'".$this->idConsul."');"; 
	
		// $this->query = "DELETE FROM `consultas` WHERE `ID_CONSULTAS` = '".$this->idConsul."'";
		
		$this->execute($this->query);

	} 

	public function deleteImages() {

		$this->query = "CALL P_ELIMINAR_IMAGEN(                
			'".$this->idImagen."');"; 
	
		// $this->query = "DELETE FROM `galeria` WHERE `ID_IMAGEN` = '".$this->idImagen."'";
		
		$this->execute($this->query);

	} 

	public function UpdateEvent() {
	 
		$this->query = "CALL P_ACTUALIZAR_EVENTO(                
			'".$this->idEvent."',
			'".$this->name."',
			'".$this->nameEvent."',
			'".$this->timeEvent."',
			'".$this->imageEvent."',
			'".$this->dscEvent."',
			'".$this->dateEvent."');"; 
		
		
		$this->execute($this->query);

	} 

	public function UpdateMyprofile() {
	 
		// $this->query = "CALL P_ACTUALIZAR_EVENTO(                
		// 	'".$this->idEvent."',
		// 	'".$this->name."',
		// 	'".$this->nameEvent."',
		// 	'".$this->timeEvent."',
		// 	'".$this->imageEvent."',
		// 	'".$this->dscEvent."',
		// 	'".$this->dateEvent."');"; 
		
		
		$this->execute($this->query);

	} 
	

}




