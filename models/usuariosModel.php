<?php 
require_once ($_SERVER['DOCUMENT_ROOT']."/models/IUsuario.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/models/DataSource.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/models/usuariosDAO.php");
class UsuarioDAO implements IUsuario
{
	public function selectUsuarios(){

		$data_source = new DataSource();
		$data_table = $data_source->ejecutarConsulta("SELECT * FROM usuarios");
		$usuario = null;
		$usuarios = array();

		foreach ($data_table as $clave => $valor) {
			$usuario = new usuarios();
			$usuario->setIdusuario( $data_table[$clave]["id_usuario"] );
			$usuario->setNombre( $data_table[$clave]["nombre_usuario"] );
			$usuario->setEmail( $data_table[$clave]["email"] );
			$usuario->setDocumento( $data_table[$clave]["documento"] );
			$usuario->setPassword( $data_table[$clave]["password"] );
			
			array_push($usuarios, $usuario);
		}
		return $usuarios;
	}


	public function deleteUsuario($id){
		$data_source = new DataSource();
		$resultado = $data_source->ejecutarActualizacion("DELETE FROM usuarios WHERE idusuario = :idusuario",
			array(':idusuario'=>$id));
		return $resultado;
	}

}

 ?>