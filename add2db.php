<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully<br><hr>";

   // select a database
   $db = $m->mydb;
   echo "Database mydb selected<br><hr>";
   $collection = $db->mycol;
   echo "Collection selected succsessfully<br><hr>";

   // now remove the document
   $collection->remove(array("title"=>"Carrrven"), array("justOne" => true));
   echo "Documents deleted successfully<br><hr>";

   // now display the available documents
   $cursor = $collection->find();

   // iterate cursor to display title of documents
   echo "Updated document<br><hr>";

   foreach ($cursor as $document) {
      echo $document["title"] . "\n";
   }
?>
