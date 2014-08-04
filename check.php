<?php
$dbname='base';
$mytable ="tablename";
if(!class_exists('SQLite3'))
  die("SQLite 3 NOT supported.");

$base=new SQLite3($dbname, 0666);
echo "SQLite 3 supported."; 

$query = "CREATE TABLE $mytable(
            ID bigint(20) NOT NULL PRIMARY KEY,
            post_author bigint(20) NOT NULL,            
            post_date datetime,
            post_content longtext,
            post_title text,
            guid VARCHAR(255)            
            )";
            
//$results = $base->exec($query);

$number = 2;
$title="My first post";
$content="The content of my post...";
$date = strftime( "%b %d %Y %H:%M", time());
$author=1;
$url = "http://www.scriptol.com/sql/sqlite-tutorial.php";
$query2 = "INSERT INTO $mytable(ID, post_title, post_content, post_author, post_date, guid) 
                VALUES ('$number', '$title', '$content', '$author', '$date', '$url')";

$results2 = $base->exec($query2);

$query3 = "SELECT post_title, post_content, post_author, post_date, guid FROM $mytable";
$results3 = $base->query($query3);
$row = $results3->fetchArray();

if(count($row)>0)
{
   $title = $row['post_title'];
   $content = $row['post_content']; 
   $user = $row['post_author'];
   $date = $row['post_date'];
   $url = $row['guid'];
   echo $content;
}     

?>