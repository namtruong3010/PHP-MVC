<?php
class Vidu1{
	protected $name = 'Hello';
	protected $age = 20;

	function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

	public function kethua(){
		echo 'Tên tôi là '.$this->name.' tôi đã: '.$this->age;
	}
}

class Name extends Vidu1{

}

class Concat extends Vidu1{

}


$ten = new Name('Nam Trường',20);
$ten->kethua();
echo '<br>';
$rin = new Concat('Rin', 15);
$rin->kethua();