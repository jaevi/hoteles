<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
?>

<?php	
class Cadena {

	var $cadena;

	function get_cadena(){
		return $this->cadena;
	}

	function set_cadena($cadena){
		$this->cadena=$cadena;
	}

	function comprobar_parentesis($cadena) {
		return (substr_count($cadena, "(") != substr_count($cadena, ")")) ? "Exception Mismatched Parenthesis" : "Successful";
	}

	function comprobar_cadena() {
		echo "Entrada: <b>".$this->cadena."</b>";
		echo "<br>Salida: <b>".$this->comprobar_parentesis($this->cadena)."</b>";
	}
}

$cadena= new Cadena();

$cadena->set_cadena("Hello (my name) is (Josh");
$cadena->comprobar_cadena();

echo "<br><br>";

$cadena->set_cadena("Hello (my name) is (())Josh");
$cadena->comprobar_cadena();

?>