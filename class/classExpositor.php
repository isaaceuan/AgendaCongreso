<?php




class Expositor extends Conexion{



    // public $expositor = "";
    public function __construct(){
      parent::__construct();
  }



public function guardarDatosExpositor($nombre,$representante,$correo_exp){
    $id_evento = 1;
    $sql = "INSERT INTO expositor VALUES(null, '$nombre','$representante','$correo_exp','$id_evento')";
    $registrar_miembro = $this->conexion_db->query($sql);

}



}

?>