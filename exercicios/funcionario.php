<?php

//7-a

/*class funcionario{
	public $departamento;
	public $salario;
	public $dataEntrada;
	public $cpf;

	public function __construct($departamento,$salario,$dataEntrada,$cpf){
		$this->departamento = $departamento;
		$this->salario = $salario;
		$this->dataEntrada = $dataEntrada;
		$this->cpf = $cpf;

	}

	public function recebeAumento(){

		$this->salario = $this->salario+($this->salario*0.1);

	}
}



$empresa = new funcionario('empresa','1000','10/10/2018','0100');
$empresa->departamento='empresa';
$empresa->salario=1000;
$empresa->dataEntrada='10/10/2018';
$empresa->cpf=0100;
$empresa->recebeAumento();
print_r($empresa);

*/

class Funcionario {

	public $departamento;
	public $salario;
	public $dataEntrada;
	public $cpf;

	public function __construct($departamento, $dataEntrada,$cpf){
		$this->departamento = $departamento;
		$this->salario = 987.30;
		$this->dataEntrada = $dataEntrada;
		$this->cpf = $cpf;

	}

	public function recebeAumento(){

		$this->salario = $this->salario+($this->salario*0.1);

	}

	public function calculaGanhoAnual(){
		return $this->salario * 12;
	}

}





