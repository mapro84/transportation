<?php
namespace src\Core\DB;

use src\Core\DB\DB;
use src\Core\Utils\Debug;

class Entity{

	public $id;
	public $name;
	public $description;
	public $further;
	public $skill_id;
	public $url;
	public $url_id;
	public $item_id;
	public $kill_id;
	public $logo;


    public static function getAll($table){
    	$query = 'SELECT * FROM ' . strtolower($table);
        return DB::prepare($query, [], get_called_class());
    }

    public static function find($id,$table) {
    	$query = "SELECT * FROM ". strtolower($table) ." WHERE id = ?";
    	$parameters = [$id];
    	return DB::prepare($query, $parameters, get_called_class(),true);
    }

    public static function findBy($targertTable, $id, $tableCategory) {
    	$query = "SELECT * FROM ".$targertTable." WHERE {$tableCategory}_id = ?";
    	$parameters = [$id];
    	return DB::prepare($query, $parameters, get_called_class());
    }

    public static function findByName($table,$name) {
    	$query = "SELECT * FROM ".$table." WHERE name = ?";
    	$parameters = [$name];
    	return DB::prepare($query, $parameters, get_called_class(),true);
    }
    
    public static function insert($table,$params){
    	$query = "INSERT INTO ".$table." (";
    	$interrogationMark = " VALUES (";
    	$parameters = [];
    	$sizeParams = count($params);
    	$i = 0;
    	foreach ($params as $key => $value){
    		$i++;
    		$query .= $key;
    		$interrogationMark .= '?';
    		$query .= $i !== $sizeParams ? ',' : '';
    		$interrogationMark .= $i !== $sizeParams ? ',' : '';
    		array_push($parameters,$value);
    	}
    	$query .= ")";
    	$interrogationMark .= ")";
    	$query .= $interrogationMark;
    	return DB::prepare($query, $parameters, get_called_class(),true);
    }
    
    public static function update($table,$params){
    	$query = "UPDATE ".$table." SET ";
    	$parameters = [];
    	$sizeParams = count($params);
    	$i = 0;
    	foreach ($params as $key => $value){
    		$i++;
    		if($key === 'id') continue;
    		$query .= $key."=?";
    		$query .= $i !== $sizeParams ? ', ' : ' ';
    		array_push($parameters,$value);
    	}
    	$query .= " WHERE id=".$params['id'].';';
    	return DB::prepare($query, $parameters, get_called_class(),true);
    }
    
    public static function delete($table,$id){
    	$query = "DELETE FROM ".$table." WHERE id = ?";
    	$parameters = [$id];
    	return DB::prepare($query, $parameters, get_called_class());
    }
    
    public static function deleteBy($targertTable, $id, $tableCategory){
    	$query = "DELETE FROM ".$targertTable." WHERE {$tableCategory}_id = ?";
    	$parameters = [$id];
    	return DB::prepare($query, $parameters, get_called_class());
    }
    
}