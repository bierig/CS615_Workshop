<?php 

if (isset($_POST['submit'])){
  
  $module = $_POST['module'];
  $semester = $_POST['semester'];
  $text = $_POST['text'];
  $rating = $_POST['rating'];
  // print "module is $module ; semester is $semester ; text is $text ; rating is $rating";

  // load the previous XML file
  $xml = simplexml_load_file("../xml/data.xml") or die('ERROR: Cannot find the data storage');

  // debug: output the old XML file
  //print_r($xml);
  
  // add a node
  $feedback = $xml->addChild('feedback');
  
  // put data in feedback node
  $feedback->addChild('module', $module);
  $feedback->addChild('semester', $semester);
  $feedback->addChild('text', $text);
  $feedback->addChild('rating', $rating);
  
  // save the node
  $xml->asXML('../xml/data.xml');

} else {
  // nothing happend here, so just go back
  header("Location: ../index.php"); 
}






 ?>