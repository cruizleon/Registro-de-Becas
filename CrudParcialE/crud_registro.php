
<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudRegistro{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($usuario){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO lista values(NULL,:nombre,:apellido,:cedula,:direccion,:fecha_obtencion,:nota_final,:anexo)');
			$insert->bindValue('nombre',$usuario->getNombre());
			$insert->bindValue('apellido',$usuario->getApellido());
			$insert->bindValue('cedula',$usuario->getCedula());
			$insert->bindValue('direccion',$usuario->getDireccion());
			$insert->bindValue('fecha_obtencion',$usuario->getFecha_obtencion());
			$insert->bindValue('nota_final',$usuario->getNota_final());
			$insert->bindValue('anexo',$usuario->getAnexo());
			$insert->execute();

		}

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaUsuarios=[];
			$select=$db->query('SELECT * FROM lista');

			foreach($select->fetchAll() as $usuario){
				$myUsuario= new Usuario();
				$myUsuario->setId($usuario['id']);
				$myUsuario->setNombre($usuario['nombre']);
        $myUsuario->setApellido($usuario['apellido']);
				$myUsuario->setCedula($usuario['cedula']);
				$myUsuario->setDireccion($usuario['direccion']);
				$myUsuario->setFecha_obtencion($usuario['fecha_obtencion']);
				$myUsuario->setNota_final($usuario['nota_final']);
				$myUsuario->setAnexo($usuario['anexo']);
				$listaUsuarios[]=$myUsuario;
			}
			return $listaUsuarios;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM lista WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerUsuario($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM lista WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$usuario=$select->fetch();
			$myUsuario= new Usuario();
			$myUsuario->setId($usuario['id']);
			$myUsuario->setNombre($usuario['nombre']);
			$myUsuario->setApellido($usuario['apellido']);
			$myUsuario->setCedula($usuario['cedula']);
			$myUsuario->setDireccion($usuario['direccion']);
			$myUsuario->setFecha_obtencion($usuario['fecha_obtencion']);
			$myUsuario->setNota_final($usuario['nota_final']);
			$myUsuario->setAnexo($usuario['anexo']);
			return $myUsuario;
		}

		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($usuario){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE lista SET nombre=:nombre, apellido=:apellido, cedula=:cedula,direccion=:direccion,fecha_obtencion=:fecha_obtencion,nota_final=:nota_final,anexo=:anexo  WHERE ID=:id');
			$actualizar->bindValue('id',$animal->getId());
			$actualizar->bindValue('nombre',$usuario->getNombre());
      $actualizar->bindValue('apellido',$usuario->getApellido());
			$actualizar->bindValue('cedula',$usuario->getCedula());
			$actualizar->bindValue('direccion',$usuario->getDireccion());
			$actualizar->bindValue('fecha_obtencion',$usuario->getFecha_obtencion());
			$actualizar->bindValue('nota_final',$usuario->getNota_final());
			$actualizar->bindValue('anexo',$usuario->getAnexo());
			$actualizar->execute();
		}
	}
?>
