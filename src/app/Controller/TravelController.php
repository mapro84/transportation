<?php
namespace src\app\Controller;

use src\app\Entity\Travel;
use src\Core\Utils\Debug;
use src\Core\DB\Entity;

class TravelController extends AppController{
	
	public function get($data) {
        $travel = Travel::get($data);
		$entities = ['travel' => $travel];
		$this->render('travel',$entities);
	}

}
