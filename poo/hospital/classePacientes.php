<?php

class Paciente{

	public $nomePaciente;
	public $idadePaciente;
	public $doenca;

	public function informarPaciente(){
		return "Paciente: " . $this->nomePaciente . "<br>".
		"Idade: " . $this->idadePaciente . "<br>".
		"Doenca: " . $this->doenca . "<br>";
	}
}

?>