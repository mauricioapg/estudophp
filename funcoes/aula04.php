<?php

//FUNÇÕES RECURSIVAS

$hierarquia = array(
	array(
		//INICIO DIRETOR ADMINISTRATIVO
		'nome_cargo'=>'Diretor Administrativo',
		'subordinados'=>array(
			array(
				'nome_cargo'=>'Gerente ADM/financeiro',
				'subordinados'=>array(
					//INICIO GERENTE ADM/FINANCEIRO
					array(
						'nome_cargo'=>'Assistente financeiro'
					),
					array(
						'nome_cargo'=>'Auxiliar Administrativo'
					)
				)
				//FIM GERENTE ADM/FINANCEIRO
			),			
			array(
				'nome_cargo'=>'Gerente de TI',
				'subordinados'=>array(
					//INICIO GERENTE DE TI
					array(
						'nome_cargo'=>'Técnico de Informática'
					),
					array(
						'nome_cargo'=>'Auxiliar Técnico de Informática'
					)
					//FIM GERENTE DE TI
				)									
			)
		)
		//FIM DIRETOR ADMINISTRATIVO
	)								
);	

function exibe($cargos){
	$html = "<ul>";

	foreach($cargos as $cargo){
		$html .= "<li>";
		$html .= $cargo['nome_cargo'];
		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){ 
			$html .= exibe($cargo['subordinados']); //enquanto houver cargos com subordinados, a função chama ela mesma e exiba os cargos
		}
		$html .= "</li>";
	}		

	$html .= "</ul>";

	return $html;
}

echo exibe($hierarquia);

?>