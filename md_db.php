<?php

if (!function_exists('ArrayFromSQL')) {

function ArrayFromSQL(String $query)
{
   $serverName = 'psychpress-mssql-13.cmnrpljemhoe.ap-southeast-2.rds.amazonaws.com,1433';
   $database   = 'mindexperts_dev';
   $uid        = 'pp_web';
   $pwd        = '?9AK5#wL';
   $res_query  = [];
   try {
       $conn = new PDO(
           "sqlsrv:server=$serverName;Database=$database",
           $uid,
           $pwd,
           [
             // PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
           ]
       );
   } catch (PDOException $e) {
       die('Error connecting to SQL Server: '.$e->getMessage());
   }
   $stmt = $conn->query($query);
   $i    = 0;
   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
       $res_query[$i] = $row;
       $i++;
   }
   $stmt = null;
   $conn = null;
   // return
   return $res_query;
}//end ArrayFromSQL()

}

if (!function_exists('safeSQL')) {

// customised real_escape_string function
function safeSQL(String $paramString)
{
   return str_replace("'", "''", trim($paramString));

}//end safeSQL()

}

if (!function_exists('executeSQL')) {

function executeSQL(String $query)
{
   $serverName = 'psychpress-mssql-13.cmnrpljemhoe.ap-southeast-2.rds.amazonaws.com,1433';
   $database   = 'mindexperts_dev';
   $uid        = 'pp_web';
   $pwd        = '?9AK5#wL';
   $res_query  = [];
   try {
       $conn = new PDO(
           "sqlsrv:server=$serverName;Database=$database",
           $uid,
           $pwd,
           [
             // PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
           ]
       );
   } catch (PDOException $e) {
       die('Error connecting to SQL Server: '.$e->getMessage());
   }

   $stmt = $conn->query($query);
   $stmt = null;
   $conn = null;

}//end executeSQL()

}