<?php
	class Usuario{
		private $id;
		private $nombre;
		private $apellido;
		private $cedula;
		private $direccion;
		private $fecha_obtencion;
		private $nota_final;
		private $anexo;


		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

    public function getApellido(){
			return $this->apellido;
		}

		public function setApellido($apellido){
			$this->apellido = $apellido;
		}

		public function getCedula(){
			return $this->cedula;
		}

		public function setCedula($cedula){
			$this->cedula = $cedula;
		}

		public function getDireccion(){
		return $this->direccion;
		}

		public function setDireccion($direccion){
			$this->direccion= $direccion;
		}
		public function getFecha_obtencion(){
			return $this->fecha_obtencion;
		}

		public function setFecha_obtencion($fecha_obtencion){
			$this->fecha_obtencion = $fecha_obtencion;
		}
		public function getNota_final(){
			return $this->nota_final;
		}

		public function setNota_final($nota_final){
			$this->nota_final = $nota_final;
		}
		public function getAnexo(){
			return $this->anexo;
		}

		public function setAnexo($anexo){
			$this->anexo = $anexo;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>

