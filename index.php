<?php
   // connect to mongodb
   $m = new MongoClient();

   echo "Connection to database successfully<br><hr>";
   // select a database
   $db = $m->mydb;

   echo "Database mydb selected<br><hr>";
   $collection = $db->mycol;
  echo "Collection selected succsessfully<br><hr>";

  $cursor = $collection->find();


  foreach ($cursor as $document) {
     echo $document["_id"] . "<br><hr>\n";
     echo $document["title"] . "<br><hr>\n";
     echo "<a href='".$document["url"] . "'>".$document["url"] ."</a><br><hr>\n";
  }
?>
