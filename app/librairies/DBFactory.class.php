<?php

class DBFactory
{

	private static $_instance;
		/* Constructeur : héritage public obligatoire par héritage de PDO
		 */
		public function __construct( ) {
		}
		/* Singleton */
		public static function getMysqlConnexionWithPDO()
		{
			if (!isset(self::$_instance)) {
				try {
					//self::$_instance = new PDO('mysql:dbname=u823418616_bbp;host=localhost', 'u823418616_bbp', 'Rumonge2015',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
					self::$_instance = new PDO('mysql:dbname=acosyst;host=localhost', 'root', 'admin',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
					self::$_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch (PDOException $e) {
					echo $e->getMessage();
				}catch (Exception $ex)
			    {
			        die('Erreur SQL : '.$ex->getMessage());
			    }
		
			}
			return self::$_instance;
		}	
}