<?php 
require_once('main_model.php');

class Resources extends Connection_Mysql {
	// Video
	private $idVideo;
	private $video_code;
	private $category;

	// live
	private $live_category;
	private $live_code;

	// image
	private $category_image;
	private $path_img;

    //variables to this class
	private $result;
	private $database;
	public $null = null;


	public function __construct()
	{
		$this->database = new Connection_Mysql();

	}

	public function set_video_code($video_code){
        $this->video_code = $video_code;
    }

	public function set_category($category){
        $this->category = $category;
    }

	public function set_idVideo($idVideo){
        $this->idVideo = $idVideo;
    }

	public function set_live_category($live_category){
        $this->live_category = $live_category;
    }

	public function set_live_code($live_code){
        $this->live_code = $live_code;
    }

	public function set_category_image($category_image){
        $this->category_image = $category_image;
    }

	public function set_path_img($image_name){
		$this->path_img = $image_name;
    }

	private function execute($query){

		$this->result = $this-> database->set_query($this->query);
		$this-> database->db_close();
		return $this->result;
	}
	  
	public function insert_video() {
		$this->query = "CALL P_INSERTAR_VIDEO_ENVIVOS(     
			'".$this->category."',           
			'".$this->video_code."');";
			
		$this->execute($this->query);

	}

    public function view_videos() {
		
		$this->query = "CALL P_VER_VIDEO_RECIENTE();";
		$this->execute($this->query);

	   $video = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$video []= array(
				"codigo"=> $result["ID_VIDEO"],
				"url"=> $result["DIRECCION_DE_VIDEO"]);
		}
		
		return $video;

	}

	public function deleteVideo() {
	
		$this->query = "CALL P_ELIMINAR_VIDEO(                
			'".$this->idVideo."');"; 		
		$this->execute($this->query);

	} 

	public function insert_live() {
	
		$this->query = "CALL P_INSERTAR_VIDEO(  
			'".$this->live_code."',             
			'".$this->live_category."');";           
				
		
		if($this->execute($this->query)){
			return true;
		}else{
			return false;
		}

	} 

	public function view_liveVideos() {
		// se necesita procedimiento
		$this->query = "CALL P_VER_ENVIVO();";
		$this->execute($this->query);

	   $lives = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$lives []= array(
				"codigo"=> $result["ID_VIDEO"],
				"url"=> $result["DIRECCION_DE_VIDEO"]);
		}
		
		return $lives;

	}

	public function deletelive() {
	// se necesita procedimiento
		$this->query = "CALL P_ELIMINAR_ENVIVO_ID(                
			'".$this->live_code."');"; 		
		if($this->execute($this->query)){
			return true;
		}else{
			return false;
		}

	} 

	public function insertImage() {
	
		$this->query = "CALL P_INSERTAR_GALERIA(  
			'".$this->category_image."',             
			'".$this->path_img."');";           
				
		
		if($this->execute($this->query)){
			return true;
		}else{
			return false;
		}

	} 





}