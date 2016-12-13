<?php

class Database{

	private static $conn=null;

	private static function connect(){
		try {
			self::$conn = new PDO("mysql:host=localhost;dbname=online_shop","root","123456");
			self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			self::$conn->query('SET NAMES "utf8"'); 
		} catch (PDOException $e) {
			echo "Ket noi that bai". $e->getMessage();
		}
	}

	public static function select($sql){
		self::connect();
		$stmt=self::$conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetch();
		$conn=null;
		return $result;
	}

	public static function getNumber($sql){
		self::connect();
		$stmt=self::$conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_NUM);
		$result = $stmt->fetch();
		$conn=null;
		return $result[0];
	}

	public static function selectAll($sql){
		self::connect();
		$stmt=self::$conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetchAll();
		self::$conn=null;
		return $result;
	}

	public static function insert($sql){
		self::connect();
		self::$conn->exec($sql);
		self::$conn=null;
	}

	public static function insertGetId($sql){
		self::connect();
		self::$conn->exec($sql);
		$last_id=self::$conn->lastInsertId();
		self::$conn=null;
		return $last_id;
	}

	public static function update($sql){
		self::connect();
		$stmt=self::$conn->prepare($sql);
		$stmt->execute();
		self::$conn=null;
	}

	public static function delete($sql){
		self::connect();
		self::$conn->exec($sql);
		self::$conn=null;
	}
}

?>