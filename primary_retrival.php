<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Details</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.theme.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
<center><h1>SEARCH APPLICANT</h1></center><br><br><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<h3>Enter the Student details to search:</h3>
<div class="row">
	<div class="col-xs-1"></div>
    	<div class="col-xs-8">
		<input type="text" name="search_text" id="search_text" placeholder="Enter a keyword " class="form-control" />
        </div>
        </div>
        
</form>
<?php
$localhost="127.0.0.1";
$username="root";
$password="";
$dbname="primary_db";
$conn= mysql_connect($localhost,$username,$password);
mysql_select_db($dbname,$conn);
?>
   <div id="result"></div>
<?php 
	if(isset($_POST['submit']))
	{
		$stu_idf=$_POST['stuid'];
		$sql1=mysql_query("SELECT * FROM personal_details");
		
		while($record = mysql_fetch_array($sql1))
		{
			
			if($stu_idf==$record['stu_id'])
			{
				$std_add=$record['stu_id'];
				$date_add=$record['date_of_add'];
				$name=$record['name'];
				$name_tamil=$record['name_in_tamil'];
				$sex=$record['sex'];
				$dob=$record['dob'];
				$dob_words=$record['dob_in_words'];
				$native=$record['native'];
				$religion=$record['religion'];	
				$community=$record['community'];
				$blood_group=$record['blood_group'];
				$nationality=$record['nationality'];
				$state=$record['state'];	
				$imagepath=$record['image_path'];
				echo "<img src=".$imagepath.">";
			}
		}
		
		$sql2=mysql_query("SELECT * FROM caretaker_details");
		
		while($record1 = mysql_fetch_array($sql2))
		{
			if($stu_idf==$record1['stu_id'])
			{
				$pog=$record1['pog'];
				$father_name=$record1['father_name'];
				$mother_name=$record1['mother_name'];
				$occu_father=$record1['occu_father'];
				$occu_mother=$record1['occu_mother'];
				$p_income=$record1['p_income'];
				$p_address=$record1['p_address'];
				$p_phone=$record1['p_phone'];
				$p_pincode=$record1['p_pincode'];
				$gaurd_name=$record1['gaurd_name'];
				$occu_gaurd=$record1['occu_gaurd'];
				$g_income=$record1['g_income'];
				$g_address=$record1['g_address'];
				$g_phone=$record1['g_phone'];
				$g_pincode=$record1['g_pincode'];		
				echo $pog;
			}
		}
		
		$sql3=mysql_query("SELECT * FROM communal_details");
		
		while($record2 = mysql_fetch_array($sql3))
		{
			if($stu_idf==$record2['stu_id'])
			{
				$mother_tongue=$record2['mother_tongue'];
				$aadhar_no=$record2['aadhar_no'];
				$tc_attchd=$record2['tc_attchd'];
				$promoted=$record2['promoted'];
				$to_std=$record2['to_std'];
				$sec_lang=$record2['sec_lang'];
				$protection=$record2['protection'];
				$activities=$record2['activities'];
				$declaration=$record2['declaration'];
				echo $mother_tongue;
				
			}
		}
		$i=0;
		$sql4=mysql_query("SELECT * FROM previous_school");
		
		while($record3 = mysql_fetch_array($sql4))
		{
			if($stu_idf==$record3['stu_id'])
			{
				$name_of_schl[$i]=$record3['name_of_schl'];
				$year[$i]=$record3['year'];
				$cls_lst_std[$i]=$record3['cls_lst_std'];
				$i++;	
			}
		}
		for($i=0;$i<count($year);$i++)
		{
			echo "schl".$i.":".$name_of_schl[$i];
			echo "year".$i.":".$year[$i];
			echo "last studied".$i.":".$cls_lst_std[$i];
			
		}
		
		
	}
	   
?>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"retrival_link1.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
</body>
</html>