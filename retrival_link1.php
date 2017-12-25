
<style>
a{
	text-decoration : none; 
	color : #000000;
}
a.active{
	text-decoration : none; 
	color : #000000;
}
tr:hover {
	background-color: #f5f5f5;
	}
</style>
<?php
//fetch.php
$localhost="127.0.0.1";
$username="root";
$password="";
$dbname="primary_db";
$conn= mysql_connect($localhost,$username,$password);
$output='';
mysql_select_db($dbname,$conn);
if(isset($_POST["query"]))
{
 $result = "SELECT * FROM personal_details WHERE (`name` LIKE '%".$_POST['query']."%') OR (`stu_id` LIKE '%".$_POST['query']."%')";
 
}

else
{
 $result = " SELECT * FROM personal_details WHERE stu_id=0 ";
 
}
$results=mysql_query($result);
if(mysql_num_rows($results) > 0)
{
 $output .= '<div class="table-responsive"><br><br><br><table class="table table bordered"><tr><th> student id</th><th>name</th><th>dob</th></tr>';
 while($row = mysql_fetch_array($results))
 {
  $output .= '
   <tr>
    <td><a href="retrival_display.php?data='.$row["stu_id"].'">'.$row["stu_id"].'</a></td>
    <td><a href="retrival_display.php?data='.$row["stu_id"].'">'.$row["name"].'</a></td>
	<td><a href="retrival_display.php?data='.$row["stu_id"].'">'.$row["dob"].'</a></td>
   </tr>
  ';
 }
 echo $output;
}

?>

