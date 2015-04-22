<?php

	class Tabla {
		public $inicio;
		public $tabla;
		public $numero_tablas;

		public function __construct($inicio = 0, $tabla = 1, $numero_tablas = 10){
			$this->inicio = $inicio;
			$this->tabla = $tabla;
			$this->numero_tablas = $numero_tablas;
        }

        public function calcular() {
        	/*
        	for($i = $this->tabla; $i < $this->numero_tablas; $i++) {
        		for($j = $this->inicio; $j <= $this->numero_tablas; $j++) {
        			echo "$i x $j =".($i*$j);
        			echo "<br/>";
        		}
        		echo "<br/>";
        	}*/

        	//for($i = $this->tabla; $i < $this->numero_tablas; $i++) {
        		for($i = $this->tabla, $j = $this->inicio; $j < ($this->numero_tablas + $this->inicio); $j++) {
        			echo "$i x $j =".($i*$j);
        			echo "<br/>";
        		}
        		//echo "<br/>";
        	//}

        }
	}


	$tabla = new Tabla($_POST["inicio"],$_POST["tabla"],$_POST["numero_tablas"]);

	$tabla->calcular();
?>