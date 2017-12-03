<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=smotik_db;charset=utf8', 'smotik_admin', 'zuQBRwCHx7exXTZx');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
