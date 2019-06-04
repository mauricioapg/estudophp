<?php

class Medico{

	public $nomeMedico;
	public $crm;

	public function informarMedico(){
		return "Médico: " . $this->nomeMedico . "<br>".
		"CRM: " . $this->crm . "<br>";
	}
}

?>