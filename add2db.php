<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";

   // select a database
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->mycol;
   echo "Collection selected succsessfully";

   $document = array(
      "title" => "MBB",
      "description" => "MBB do4ka",
      "likes" => 43,
      "url" => "https://do4ka.mbb.bucha.org/",
      "by" => "Carrrven"
   );

   $collection->insert($document);
   echo "Document inserted successfully";
?>
