<?php
	class Figura{
		public function calcu_area(){
			return "Mi area es 0";
		}
		public function calcu_perimetro(){
			return "Mi perimetro es 0";
		}
	
	}
	class Triangulo  extends Figura{
		private $lado1 = 2;
		private $lado2 = 3;
		private $lado3 = 4;
		private $base = 12;
		private $altura = 14;
		
		function __construct($lado1,$lado2,$lado3){
			$this->lado1 = $lado1;
			$this->lado2 = $lado2;
			$this->lado3 = $lado3;
		}
		//public function calcu_area(){
		//	return $this->base * $this->altura / 2;
		//}//
		public function calcu_perimetro(){
			return $this->lado1 + $this->lado2 + $this->lado3;
		}
	}
	$trian = new Triangulo(3,6,7);
	echo "El area del Triangulo es : " . $trian->calcu_area() . "<br>";
	echo "El perimetro del Triangulo es : " . $trian->calcu_perimetro();
?>