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
  $filter=array("title"=> "MBB");

$curs = $collection->find($filter);

foreach ($curs as $document) {
   echo "<p style='color: red;'>".$document["url"] . "</p><hr>\n";
}
  foreach ($cursor as $document) {
     echo $document["_id"] . "<br><hr>\n";
     echo $document["title"] . "<br><hr>\n";
     echo "<a href='".$document["url"] . "'>".$document["url"] ."</a><br><hr>\n";
  }
?>
