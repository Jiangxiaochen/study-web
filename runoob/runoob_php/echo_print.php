 = array("volvo","bmw","toyota");
var_dump($cars);

class Car{
	var $color;
	function Car($color = "green"){
		$this->color = $color;
	}
	function what_color(){
		return $this->color;
	}
}

$cars = null;
var_dump($cars);

$cars = NULL;
var_dump($cars);
