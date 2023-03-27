<?php
namespace src\app\Entity;

use src\Core\DB\Entity;
use src\Core\DB\DB;
use src\Core\Utils\Debug;

class Location extends Entity{
    public $id;
    public $name;
    public $latitude;
    public $longitude;
}
