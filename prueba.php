<?php

if(extension_loaded("mongodb"))
{
	echo"<br>";
	echo("El archivo DLL de MongoDB se ha iniciado correctamente");
	echo"<br>";
	echo"<br>";
	try
	{
		$manager = new MongoDB\Driver\Manager("mongodb+srv://kevin-sys:V0Cf554phpuPh8qd@sandbox.m9ts4.mongodb.net/test?authSource=admin&replicaSet=atlas-nff83a-shard-0&readPreference=primary&appname=MongoDB%20Compass&ssl=true");

		$query = new MongoDB\Driver\Query([]);
		$cursor = $manager->executeQuery("mydb.users", $query);

		foreach($cursor as $document)
		{
			var_dump($document);
		}
	}
	catch (MongoConnectionException $e)
	{
		echo($e);
	}
}

?>