
<?php
//incluye la clase Libro y CrudLibro
require_once('crud_Registro.php');
require_once('usuario.php');

$crud= new CrudRegistro();
$usuario= new Usuario();

	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$usuario->setNombre($_POST['nombre']);
		$usuario->setApellido($_POST['apellido']);
		$usuario->setCedula($_POST['cedula']);
		$usuario->setDireccion($_POST['direccion']);
		$usuario->setFecha_obtencion($_POST['fecha_obtencion']);
		$usuario->setNota_final($_POST['nota_final']);
		$usuario->setAnexo($_POST['anexo']);

		//llama a la función insertar definida en el crud
		$crud->insertar($usuario);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
    $usuario->setNombre($_POST['nombre']);
		$usuario->setApellido($_POST['apellido']);
    $usuario->setCedula($_POST['cedula']);
		$usuario->setDireccion($_POST['direccion']);
    $usuario->setFecha_obtencion($_POST['fecha_obtencion']);
    $usuario->setNota_final($_POST['nota_final']);
    $usuario->setAnexo($_POST['anexo']);
		$crud->actualizar($usuario);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>