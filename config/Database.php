<?php
/*Данный класс осуществляет подключение к БД
================================*/
namespace config;

trait Database
{
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $db_name = "notelets";

	public function connect()
	{
		$link = mysqli_connect($this->host, $this->user, $this->password, $this->db_name) or die(mysqli_connect_error());
		mysqli_query($link, "SET NAMES 'UTf-8'");

		return $link;
	}
}