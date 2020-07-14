<?php 

// define('NAMA', 'Atha Tsaqif');
// echo NAMA;

// echo '<br>';

// const UMUR = 13;
// echo UMUR;





// class Coba {
// 	const NAMA = "Atha Tsaqif";
// }

// echo Coba::NAMA;



// echo __LINE__;
// echo __FILE__;
// echo __DIR__;

function magicConstant() {
	return __FUNCTION__;
}

echo magicConstant();

class magicConstant {
	public $kelas = __CLASS__;
}

$obj = new magicConstant;
$obj->kelas;
