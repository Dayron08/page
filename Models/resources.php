<?php 
require_once('main_model.php');

class Resources extends Connection_Mysql {
	// insert video
	private $video_code;

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


	private function execute($query){

		$this->result = $this-> database->set_query($this->query);
		$this-> database->db_close();
		return $this->result;
	}
	  
	public function insert_video() {
		$this->query = "CALL P_INSERTAR_VIDEO(                
			'".$this->video_code."');";
			
		$this->execute($this->query);

	}

    public function view_videos() {
		
		$this->query = "CALL P_VER_VIDEO_RECIENTE();";
		$this->execute($this->query);

	   $video = array();
		while ($result = mysqli_fetch_assoc($this->result)) {
			$video []= array(
				"url"=> $result["DIRECCION_DE_VIDEO"]);
		}
		
		return $video;

	}


}