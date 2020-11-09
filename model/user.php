<?php
// Creamos la clase Usuario que contiene todos los atributos de la base de datos
    class Usuario{
        private $id_usuario;
        private $email;
        private $password;
        private $puesto_trabajo;
        // Al constructor le pasamos todos los parametros, ya que vamos a necesitar todos los datos al hacer el login
        function __construct($id_usuario, $email, $password, $puesto_trabajo){
            $this->id_usuario=$id_usuario;
            $this->email=$email;
            $this->password=$password;
            $this->puesto_trabajo=$puesto_trabajo;
        }

        /**
         * Get the value of id_usuario
         */ 
        public function getId_usuario()
        {
                return $this->id_usuario;
        }

        /**
         * Set the value of id_usuario
         *
         * @return  self
         */ 
        public function setId_usuario($id_usuario)
        {
                $this->id_usuario = $id_usuario;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }
        /*
        /**
         * Get the value of puesto_trabajo
         */ 
        public function getPuesto_trabajo()
        {
                return $this->puesto_trabajo;
        }

        /**
         * Set the value of puesto_trabajo
         *
         * @return  self
         */ 
        public function setPuesto_trabajo($puesto_trabajo)
        {
                $this->puesto_trabajo = $puesto_trabajo;

                return $this;
        }
}
    
?>
