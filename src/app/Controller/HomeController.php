<?php
namespace src\app\Controller;

use src\app\Entity\Transportation;
use src\Core\Utils\Debug;
use src\Core\DB\Entity;

class HomeController extends AppController{
	
	public function show() {
        $transportations = Transportation::getAll();
		$entities = ['transportations' => $transportations];
		$this->render('home',$entities);
	}
}
