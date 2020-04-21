<?php
class Vidu1{
	private $name;
	private $age;

	 function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

	public function dahinh(){
		echo 'Tên tôi là '.$this->name.' tôi đã: '.$this->age;
	}
}

class Lan1 extends Vidu1{

}

class Lan2 extends Lan1{

}

class Hello extends Lan1{

}

$rex = new Lan2('Nam Trường', 20);
print_r($rex->dahinh());
echo '<br>';
$rex = new Hello('Trường', 15);
print_r($rex->dahinh());
