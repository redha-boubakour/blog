<?php

class Database
{
    const DB_HOST = 'mysql:host=localhost:3306;dbname=blog;charset=utf8';
    const DB_USER = 'root';
    const DB_PASS = 'motdepasse';

    public function getConnection() 
    {
        try 
        {
            $connection = new PDO(self::DB_HOST,self::DB_USER ,self::DB_PASS);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return 'Connexion OK';
        }
        catch(Exception $errorConnection) 
        {
            die('Erreur de connection:'.$errorConnection->getMessage());
        }
    }
}
