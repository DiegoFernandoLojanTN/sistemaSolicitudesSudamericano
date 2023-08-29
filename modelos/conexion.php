<?php
class DBConexion{
    public $conexion;
    protected $db;
    private $host;
    private $usuario;
    private $clave;
    private $base;
    public function __construct(){
        $this->conexion="";
        $this->db="sistema_gestion";
        $this->host="localhost";
        $this->usuario="root";
        $this->clave="";
    }
    public function Conectar(){
        $this->conexion= mysqli_connect($this->host,$this->usuario,$this->clave,$this->db);
        if(!$this->conexion) die("Error en la conexion" . mysqli_connect_error($this->conexion) );
        $this->base=mysqli_select_db($this->conexion, $this->db);
        if($this->base==0) die("Error en la conexion con la base de datos". mysqli_connect_error($this->conexion) );
        return $this->conexion;
    }
}

?>