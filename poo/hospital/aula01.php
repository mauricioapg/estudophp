<?php

require_once("classeHospitais.php");
require_once("classeMedicos.php");
require_once("classePacientes.php");

$objHospital = new Hospital();
$objHospital->nomeHospital = "Hospital Salvalus";
$objHospital->enderecoHospital = "Rua Bresser, 1954 - Mooca";

$objPaciente = new Paciente();
$objPaciente->nomePaciente = "João de Carvalho Pinto";
$objPaciente->idadePaciente = 45;
$objPaciente->doenca = "Desvio de Septo";

$objMedico = new Medico();
$objMedico->nomeMedico = "Dr. Abílio Mendes da Costa";
$objMedico->crm = "OS5678M-4";

echo $objHospital->informarHospital();
echo $objMedico->informarMedico();
echo $objPaciente->informarPaciente();

?>