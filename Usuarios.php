<?php
    class Usuarios
    {
        private $usuarioId;
        private $usuarioNombre;
        private $usuarioPass;
        private $usuarioNivel;

        //constructor
        function Usuarios(){

        }

        public function getUsuarioId()
        {
                return $this->usuarioId;
        }
        
        public function getUsuarioNombre()
        {
                return $this->usuarioNombre;
        }
       
        public function getUsuarioPass()
        {
                return $this->usuarioPass;
        }
        
        public function getUsuarioNivel()
        {
                return $this->usuarioNivel;
        }
        
        public function setUsuarioId($usuarioId)
        {
                $this->usuarioId = $usuarioId;

                return $this;
        }
        
        public function setUsuarioNombre($usuarioNombre)
        {
                $this->usuarioNombre = $usuarioNombre;

                return $this;
        }
        
        public function setUsuarioPass($usuarioPass)
        {
                $this->usuarioPass = $usuarioPass;

                return $this;
        }
        
        public function setUsuarioNivel($usuarioNivel)
        {
                $this->usuarioNivel = $usuarioNivel;

                return $this;
        }

        //acciones de usuario
        public function validar(){
             $nivel = "";
            $conexion = new mysqli('localhost', 'root','','sisv11');//conexion al sql
            $sql= "SELECT nivel FROM usuarios WHERE nombreuser = '".$this->getUsuarioNombre()."' and pass = '".$this->getUsuarioPass()."'";
            if ($resultado = $conexion->query($sql)) {
                $usuarios = $resultado->fetch_assoc();//convierte a un arreglo asosiativo el resultado de la consulta
                $nivel = $usuarios["nivel"];
                var_dump($nivel);// imprime el contenido de la variable
                return $nivel;
            }else {
                echo "No se ha podido conectar la DB";
                return $nivel;
                exit;
            }
        }
     }

//     $obj = new Usuarios();
//     $obj-> setUsuarioNombre('Juan');
//     $obj-> setUsuarioPass('123');
//     $obj-> validar(); 
?>