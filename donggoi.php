<?php
class Vidu1{
	private $name = 'NamNT';
	private $age = 20;

	public function setName($setName){
		$this->name = $setName;
	}
}
class Vidu2{
	private $name = 'Nam Trường';
	private $age = 40;

	static function setName($setName){
		$modal = new static();
		$modal->name = $setName;
		return $modal;
	}
}

$nam = new Vidu1;
$nam->setName('Nam Trường');
print_r($nam);
echo '<br>';
print_r(Vidu2::setname('Trường Hey'));

