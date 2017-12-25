<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Details</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.theme.min.css">
</head>
<style>

table, td, th {    
    border: 2px solid #ACBDC3;
    text-align: center;
}

table {
    border-collapse: collapse;
    width: 80%;
	table-layout:fixed; 
}

th, td {
    padding: 10px;
}
body {
	font-size: 15px;
}
</style>
<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>
<?php
$localhost="127.0.0.1";
$username="root";
$password="";
$dbname="primary_db";
$conn= mysql_connect($localhost,$username,$password);
$count=0;
mysql_select_db($dbname,$conn);
if(isset($_GET['data']))
	{
		$stu_idf=$_GET['data'];
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
				$comm_path=$record['comm_path'];
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
				$count++;	
			}
		}
		
		
		
	}
?>
<body>
<center>
<div id="page" >

<h2>APPLICANT DETAILS</h2>
<br><br>
<table width="70%">
  <tbody>
  <tr>
      <td> <img src="<?php echo $imagepath; ?> " width="150" height="150"></td>
      </tr>
      <tr>
      	<td bgcolor="#7CFC00"><b><h3>PERSONAL DETAILS</h3></b></td>
      </tr>
      </tbody>
</table>
<table width="66%">
    <tr>
      <td>Name:</td>
      <td><?php echo $name; ?> </td>
    </tr>
    <tr> 
      <td>Standard of addmission:</td>
      <td><?php echo $std_add; ?> </td>
    </tr>
    <tr>
      <td>Date  of addmission:</td>
      <td><?php echo $date_add; ?> </td>
    </tr>
    <tr>
      <td>Name in tamil:</td>
      <td><?php echo $name_tamil; ?> </td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td><?php echo $sex; ?> </td>
    </tr>
    <tr>
      <td>Date of birth:</td>
      <td><?php echo $dob; ?> </td>
    </tr>
    <tr>
      <td>Date of birth in words:</td>
      <td><?php echo $dob_words; ?> </td>
    </tr>
    <tr>
      <td>Native:</td>
      <td><?php echo $native; ?> </td>
    </tr>
    <tr>
      <td>Religion:</td>
      <td><?php echo $religion; ?> </td>
    </tr>
    <tr>
      <td>Community:</td>
      <td><?php echo $community; ?> <a href="<?php echo $comm_path; ?>"> &nbsp;Click to view cc</a></td>
    </tr>
    <tr>
      <td>Blood group:</td>
      <td><?php echo $blood_group; ?> </td>
    </tr>
    <tr>
     <td>State:</td>
      <td><?php echo $state; ?> </td>
    </tr>
    <tr>
      <td>Nationality:</td>
      <td><?php echo $nationality; ?> </td>
    </tr>    
</table>
<table>
	<tr>
    <td bgcolor="#7CFC00"><b><h3>PARENT / GAURDIAN DETAILS</h3></b></td>
    </tr>
 </table>
 <table>
 	<tr>
 		<td>Living with Parent/Gaurdian:</td>
        <td><?php echo $pog; ?></td>
 	</tr>
    <?php
	if($pog=="parent")
	{
		?>
    <tr>
 		<td>Father Name:</td>
        <td><?php echo $father_name; ?></td>
 	</tr>    
    <tr>
 		<td>Mother Name:</td>
        <td><?php echo $mother_name; ?></td>
 	</tr>
    <tr>
 		<td>Occupation of Father:</td>
        <td><?php echo $occu_father; ?></td>
 	</tr>
    <tr>
 		<td>Occupation of Mother:</td>
        <td><?php echo $occu_mother; ?></td>
 	</tr>
    <tr>
 		<td>Annual Income:</td>
        <td><?php echo $p_income; ?></td>
 	</tr>
    <tr>
 		<td>Address:</td>
        <td><?php echo $p_address; ?></td>
 	</tr>			
    <tr>
 		<td>Phone No:</td>
        <td><?php echo $p_phone; ?></td>
 	</tr>
    <tr>
 		<td>Pincode:</td>
        <td><?php echo $p_pincode; ?></td>
 	</tr>
        
	<?php } else { ?>
	<tr>
 		<td>Gaurdian Name:</td>
        <td><?php echo $gaurd_name; ?></td>
 	</tr>
	<tr>
 		<td>Occupation of the Gaurdian:</td>
        <td><?php echo $occu_gaurd; ?></td>
 	</tr>
    <tr>
 		<td>Annual Income:</td>
        <td><?php echo $g_income; ?></td>
 	</tr>
    <tr>
 		<td>Address:</td>
        <td><?php echo $g_address; ?></td>
 	</tr>
    <tr>
 		<td>Pincode:</td>
        <td><?php echo $g_pincode; ?></td>
 	</tr>
   <?php } ?>
 </table>
 <table>
 	<tr>
 		<td bgcolor="#7CFC00"><b><h3>PREVIOUS SCHOOL DETAILS</h3></b></td>
 	</tr>
 </table>
 <table>
 <tr>
 	<td>Name of the School</td>
    <td>Year</td>
    <td>Class last Studied</td>
 </tr>
 	<?php for($i=0;$i<$count;$i++)
	{ ?>
 	<tr>
 		<td><?php echo $name_of_schl[$i]; ?> </td>
        <td><?php echo $year[$i]; ?> </td>
        <td><?php echo $cls_lst_std[$i]; ?> </td>
 	</tr>
    <?php } ?>
 </table>
 <table>
 	<tr>
 		<td bgcolor="#7CFC00"><b><h3>OTHER DETAILS</h3></b></td>
 	</tr>
 </table>
 <table>
 	<tr>
 		<td>Mother Tongue:</td>
        <td><?php echo $mother_tongue; ?></td>
 	</tr>
    <tr>
 		<td>Aadhar No:</td>
        <td><?php echo $aadhar_no; ?></td>
 	</tr>
    <tr>
 		<td>Whether TC attached:</td>
        <td><?php echo $tc_attchd; ?></td>
 	</tr>
    <tr>
 		<td>Whether qualified for Promotion:</td>
        <td><?php echo $promoted; ?>&nbsp;/ &nbsp; To Std: &nbsp; <?php echo $to_std; ?> </td>
 	</tr>
    <tr>
 		<td>Language proposed to be taken as Second language:</td>
        <td><?php echo $sec_lang; ?></td>
 	</tr>
    <tr>
 		<td>Protection from Small-pox, whether Vaccinated or Small-pox marked:</td>
        <td><?php echo $protection; ?></td>
 	</tr>
    <tr>
 		<td>Any other details(Sports/Extra Curricular Activities):</td>
        <td><?php echo $activities; ?></td>
 	</tr>
    <tr>
 		<td>Whether accepted the Declaration:</td>
        <td><?php echo $declaration; ?></td>
 	</tr>
 </table>
<br>
<br><br>
</div>
<button type="button" class="btn btn-lg btn-default hidden-print" onClick="print('page')">Print</button>
<button type="button" class="btn btn-lg btn-default hidden-print" onClick="print('page')">Print TC</button> 
<script>

 
    WinPrint.document.write('<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">');
    
  	// To keep styling
    /*var file = WinPrint.document.createElement("link");
    file.setAttribute("rel", "stylesheet");
    file.setAttribute("type", "text/css");
    file.setAttribute("href", 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    WinPrint.document.head.appendChild(file);*/

    
    WinPrint.document.write(prtContent.innerHTML);
    WinPrint.document.close();
    WinPrint.setTimeout(function(){
      WinPrint.focus();
      WinPrint.print();
      WinPrint.close();
    }, 1000);
		
</script>
</center>

</body>
</html>