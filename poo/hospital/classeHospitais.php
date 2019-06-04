<?php

class Hospital{

	public $nomeHospital;
	public $enderecoHospital;

	public function informarHospital(){
		return "Hospital: " . $this->nomeHospital . "<br>".
		"Endereço: " . $this->enderecoHospital . "<br>";		
	}
}

?>