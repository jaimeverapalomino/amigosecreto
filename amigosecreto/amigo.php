<?php

class Amigo
{
	private $nombre;
	private $correo;
	private $excluir;

	function __construct($_nombre, $_correo, $_excluir)
	{
		$this->nombre = $_nombre;
		$this->correo = $_correo;
		$this->excepcion = $_excepcion;
	}

	public function giveName()
	{
		return $this->nombre;
	}

	public function giveCorreo()
	{
		return $this->correo;
	}

	public function giveExcluir()
	{
		return $this->excluir;
	}

	public function isValid()
	{
		return true;
	}
}

?>