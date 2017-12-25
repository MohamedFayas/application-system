<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>page1</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.theme.min.css">
  <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
    $( "#datepicker1" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: '1997:2036',
        maxDate: '+30Y',
		dateFormat: 'yy-mm-dd'
    });
  } );
  $( function() {
    $( "#datepicker2" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: '1997:2036',
        maxDate: '+30Y',
		dateFormat: 'yy-mm-dd'
    });
  } );
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
  </script>

</head>
<style>
p.small {
    line-height: 0.1px;
}
hr {
    border-top: 3px solid #ccc;
    margin: 1em 0; 
}
article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
  div#image{
  position:absolute;
  top:0px;
  right:0px;
  height:100px;
  width:150px;
}

</style>
<body>
<?php
$localhost="127.0.0.1";
$username="root";
$password="";
$dbname="primary_db";
$conn= mysql_connect($localhost,$username,$password);
mysql_select_db($dbname,$conn);
?>

<div class="container">
  <div class="row">
    <div class="col-xs-1">
     <center> <img src="logo.jpg" class="img-rounded" alt="Cinque Terre" width="100" height="100"> </center>
    </div>
    <div class="col-xs-10">
      <center><p class="small"><h2><font face="calibri">SRI RAMAKRISHNA MATRIC HIGHER SECONDARY SCHOOL </font></h2><h4><font face="calibri">(Educational Service : M/s.S.N.R Sons's Charitable Trust)</font></h4><h3><font face="calibri">S.N.R COLLEGE ROAD,COIMBATORE-641 006</font></h3><h4><font face="calibri">(Recognised by Dept. of Education, Govt of Tamilnadu)</font></h4></p></center>	
    </div>
    <div class="col-xs-1">
      <img src="srit.jpg" width="100" height="100" class="img-rounded">
    </div>
  </div>
  </div><hr>
<br><br>
<center class="small"><h2><font face="calibri">APPLICATION FORM FOR ADMISSION</font></h2></center><br><br>
 <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
  <div class="col-xs-2 col-xs-offset-10 image"> Passport Size Photo:
	<input type='file' id="photo" name="photo" onchange="readURL(this); showFileSize();" accept="image/*" required/>
    <img id="blah" src="#" alt="your image" />
  </div>
	</div>
	<div class="col-xs-offset-1">
	<div class="form-group">
    <label for="standardofadmission" class="col-xs-3 control-label">Standard of Admission :</label>
    <div class="col-xs-6">
      <input type="number" class="form-control" name="std_of_add" placeholder="In Numbers" required>
    </div>
  </div>
  <div class="form-group">
    <label for="dateofadmission" class="col-xs-3 control-label">Date of Admission :</label>
    <div class="col-xs-6">
	<input type="date" id="datepicker1" name="date_of_add" placeholder="dd-mm-yyyy" required>
    </div>
    </div>
  
  <div class="form-group">
    <label for="inputname" class="col-xs-3 control-label ">Name Of the Student :<br>(in Block Letters) </label>
    <div class="col-xs-6">
      <input type="text" class="form-control" name="name" required="Enter the name of the student">
    </div>
	
  </div>
  <div class="form-group">
    <label for="inputnametamil" class="col-xs-3 control-label">Name in Tamil :</label>
    <div class="col-xs-6">
      <input type="text" class="form-control" name="nametamil" required>
    </div>
  </div>
  <div class="form-group">
    <label name="sex" class="col-xs-3 control-label">Sex :</label>
    <div class="col-xs-6">
	<select name="gender"  required>
    <option value="">Please Select</option>
    <option value="male">Male</option>
    <option value="Female">Female</option>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputnametamil" class="col-xs-3 control-label">Date of Birth :</label>
    <div class="col-xs-6">
	<input type="date" id="datepicker2" name="dob" placeholder="dd-mm-yyyy" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputnametamil" class="col-xs-3 control-label">Date of Birth in words :</label>
    <div class="col-xs-6">
      <input type="text" class="form-control" name="dobinwords" placeholder="e.g twenty six, september, thousand nine hundred and ninety seven" required>
    </div>
  </div>
  
  <div class="form-group">
    <label  class="col-xs-3 control-label">Native Place :</label>
    <div class="col-xs-6">
      <input type="text" class="form-control" name="native" required>
    </div>
  </div>
	<div class="form-group">
    <label  class="col-xs-3 control-label">Religion(only for Statistical purposes) :</label>
    <div class="col-xs-6">
      <input type="text" class="form-control" name="religion" required>
    </div>
  </div>
	<div class="form-group">
    <label class="col-xs-3 control-label"> Community :</label>
    <div class="col-xs-6">
	<select name="community" onchange="showfield5(this.options[this.selectedIndex].value)" required>
	<option selected="selected">Please select ...</option>
      <option  value="OC"> OC</option>
	  <option value="BC">BC</option>
	  <option value="BCM">BCM</option>
	  <option  value="MBC">MBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="SCA">SCA</option>
	  </select>
	  	 <script type="text/javascript">
function showfield5(name){
  if(name!='')document.getElementById('div5').innerHTML='Submit Community Cerificate: <input type="file" name="communityscan" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" required>';
  else document.getElementById('div5').innerHTML='';
}
</script>
<div id="div5"></div>

	 </div>
	 
	</div>
	<div class="form-group">
    <label  class="col-xs-3 control-label">Blood Group :</label>
    <div class="col-xs-6">
      <input type="text" class="form-control" name="bloodgroup" required>
    </div>
  </div>
  <div class="form-group">
    <label class="col-xs-3 control-label">Nationality :</label>
    <div class="col-xs-6">
      <input type="text" class="form-control" name="nationality" required><br>
    </div>
  </div>
  <div class="form-group">
    <label class="col-xs-3 control-label"> State to which the student belongs to:</label>
    <div  class="col-xs-6">
      <select name="state" onchange="showfield1(this.options[this.selectedIndex].value)"  required>
<option selected="selected">Please select ...</option>
<option value="tamil nadu">Tamil Nadu</option>
<option value="Other">Other</option>

</select>

	 <script type="text/javascript">
function showfield1(name){
  if(name=='Other')document.getElementById('div1').innerHTML='<br>Specify The State: <input type="text" name="state" required/>';
  else document.getElementById('div1').innerHTML='';
}
</script>
<div id="div1"></div>
    </div>
	
  </div>
  
  <div class="form-group">
    <label class="col-xs-3 control-label"> Whether living with Parent or Gaurdian:</label>
    <div  class="col-xs-6">
      <select name="pog" onchange="showfield6(this.options[this.selectedIndex].value)"  required>
<option  >Please select ...</option>
<option value="parent">Parent</option>
<option value="gaurdian">Gaurdian</option>

</select>

	 <script type="text/javascript">
function showfield6(name){
  if(name=='parent')document.getElementById('div6').innerHTML='<br>Name of Father: <input type="text" name="fathername" required/><br>Name of Mother: <input type="text" name="mothername"  required /><br>Occupation of Father: <input type="text" name="occufather"  required/><br>Occupation of Mother: <input type="text" name="occumother"  required /><br>Annual Income: <input type="number" name="p_income"  required /><br>Address: <input type="text" name="p_address"  required /><br>Phone: <input type="number" name="p_phone"  required /><br>Pincode: <input type="number" name="p_pincode"  required /> ';
  else if(name=='gaurdian')document.getElementById('div6').innerHTML='<br>Name of Gaurdian: <input type="text" name="gaurdianname" required/><br>Occupation of Gaurdian: <input type="text" name="occugaurd"  required /><br>Annual Income: <input type="number" name="g_income"  required /><br>Address: <input type="text" name="g_address"  required /><br>Phone: <input type="number" name="g_phone"  required /><br>Pincode: <input type="number" name="g_pincode"  required /> ';
  else document.getElementById('div6').innerHTML='';
}
</script>
<div id="div6"></div>
    </div>
	
  </div>
	
  <div class="form-group">
    <label class="col-xs-3 control-label"> Mother Tongue :</label>
    <div class="col-xs-6">
	<select name="mothertongue" onchange="showfield3(this.options[this.selectedIndex].value)"  required>
	<option >Please select ...</option>
      <option  value="tamil"> Tamil</option>
	  <option value="english">English</option>
	  <option value="hindi">Hindi</option>
	  <option  value="telugu">Telugu</option>
	  <option value="malayalam">Malayalam</option>
	  <option value="kannada">Kannada</option>
	  <option value="urdu">Urdu</option>
	  <option value="others">Others</option>
	  </select>
	  <script type="text/javascript">
function showfield3(name){
  if(name=='others')document.getElementById('div3').innerHTML='<br>Specify The Mother Tongue: <input type="text" name="mothertongue"  required/>';
  else document.getElementById('div3').innerHTML='';
}
</script>
<div id="div3"></div>
	 </div>
	</div>
	<div class="form-group">
    <label for="aadharno" class="col-xs-3 control-label">Aadhar ID UID Number :</label>
    <div class="col-xs-6">
      <input type="number" class="form-control" name="aadharno"  required>
    </div>
  </div>
       <div class="container">           
                <div class="form-group" id="reload">  
                	<label for="schlhis" class="col-xs-3 control-label">Is there any Previous School History of the Pupil :</label>
                    <select name="schlhis" id="his"  required>
                    <option>Please select ...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    </select>
                    </div>
                      <div class="col-xs-10" id="showMe" style="display: none">
                      
                      <button type="button" name="add" id="add" class="btn btn-success pull-right">Add More</button>
                          <div>  
                               <table width="100%" class="table table-bordered schl" id="dynamic_field" position="fixed">  
                                    <tr>
                                    <td>Name of School</td>
                                    <td>year</td>
                                    <td>Class last studied</td>
                                    <td>Remove</td>
                                    </tr>
                               </table>  
                                 
                          </div>  
                </div>  
           </div>
  <div class="form-group">
    <label for="previousschl" class="col-xs-3 control-label">Whether Transfer Certificate attached :</label>
    <div class="col-xs-6">
    	<select name="tca"  required>
        <option value="">Please Select</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
        </select>
    </div>
  </div>
  <br>
  <div class="form-group">
    <label for="promotion" class="col-xs-3 control-label">Whether Qualified for Promotion :</label>
    <div class="col-xs-6">
      <select name="qual"  required>
      <option value="">Please Select</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
        </select>
		<br>To Std: <input type="number" name="qualstd">
	  
    </div>
  </div>
  <div class="form-group">
    <label for="seclang" class="col-xs-3 control-label">Language proposed to be taken as Second language :</label>
    <div class="col-xs-6">
      <select name="seclang"  required>
      	<option value="" >Please Select</option>
        <option value="tamil">Tamil</option>
        <option value="hindi">Hindi</option>
        </select>    
        </div>
  </div>
  <br>
  <div class="form-group">
    <label for="protection" class="col-xs-3 control-label">Protection from Small-pox,Whether Vaccinated or Small-pox marked :</label>
    <div class="col-xs-6">
      <select name="protection"  required>
      <option value="">Please Select</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
        </select>
    </div>
  </div>
  <br>
  <div class="form-group">
    <label for="activities" class="col-xs-3 control-label">Any other details(Sports / Extra curricular Activities) :</label>
    <div class="col-xs-6">
      <input type="text" class="form-control" name="activities"  required>
    </div>
  </div>
  </div>
  <hr>
  <center> <h2>&nbsp;</h2>
    <h2>	DECLARATION BY PARENT /GAURDIAN</h2>
    <p>&nbsp;</p>
  </center>
  <div class="col-xs-offset-1">
  <div class="col-xs-11">
  <center>
  <p>        &nbsp &nbsp &nbsp &nbsp &nbsp     I declare that the above is correct and that the pupil has not attenended any other school besides those mentioned above. I further declare that the date of birth of the pupil given in the form is correct to the best of my knowledge and i will not ask for an change of date of birth in future.</p>
  <br><br></center>
  <div class="form-group">
    <label for="promotion" class="col-xs-3 control-label">Declaration :</label>
    <div class="col-xs-6">
      <select name="declaration" required>
      <option>Please Select</option>
      	<option value="yes">Yes</option>
        <option value="no">No</option>
        </select>
	  <br>
      </div>
	</div>
	</div>	  
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
<center><input type="submit" name="submit" value="submit"></center> 
<?php

	if(isset($_POST['submit']))
{
	$rowsql=mysql_query("SELECT * FROM personal_details");
	$id=mysql_num_rows($rowsql);
	$id=$id+1;
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
    $image_name = addslashes($_FILES['photo']['name']);
    $image_size = getimagesize($_FILES['photo']['tmp_name']);
    move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
    $location = "upload/" . $_FILES["photo"]["name"];
    $comm = addslashes(file_get_contents($_FILES['communityscan']['tmp_name']));
    $comm_namew = addslashes($_FILES['communityscan']['name']);
	$comm_name=str_replace(' ', '', $comm_namew);
	move_uploaded_file($_FILES["communityscan"]["tmp_name"], "upload_community/" . $comm_name);
	$location_comm="upload_community/" . $comm_name;
                          
	mysql_query("INSERT INTO personal_details(stu_id,std_of_add,date_of_add,name,name_in_tamil,sex,dob,dob_in_words,native,religion,community,blood_group,nationality,state,image_name,image_path,comm_name,comm_path) VALUES ('".$id."','".$_POST['std_of_add']."','".$_POST['date_of_add']."','".$_POST['name']."','".$_POST['nametamil']."','".$_POST['gender']."','".$_POST['dob']."','".$_POST['dobinwords']."','".$_POST['native']."','".$_POST['religion']."','".$_POST['community']."','".$_POST['bloodgroup']."','".$_POST['nationality']."','".$_POST['state']."','".$image_name."','".$location."','".$comm_name."','".$location_comm."')");
	if($_POST['pog']=="parent")
	{
	mysql_query("INSERT INTO caretaker_details(stu_id,pog,father_name,mother_name,occu_father,occu_mother,p_income,p_address,p_phone,p_pincode) VALUES ('".$id."','".$_POST['pog']."','".$_POST['fathername']."','".$_POST['mothername']."','".$_POST['occufather']."','".$_POST['occumother']."','".$_POST['p_income']."','".$_POST['p_address']."','".$_POST['p_phone']."','".$_POST['p_pincode']."')");
	}
	else
	{
		mysql_query("INSERT INTO caretaker_details(stu_id,pog,gaurd_name,occu_gaurd,g_income,g_address,g_phone,g_pincode) VALUES('".$id."','".$_POST['pog']."','".$_POST['gaurdianname']."','".$_POST['occugaurd']."','".$_POST['g_income']."','".$_POST['g_address']."','".$_POST['g_phone']."','".$_POST['g_pincode']."')");
	}
		mysql_query("INSERT INTO `communal_details`(`stu_id`, `mother_tongue`, `aadhar_no`, `tc_attchd`, `promoted`, `to_std`, `sec_lang`, `protection`, `activities`, `declaration`) VALUES ('".$id."','".$_POST['mothertongue']."','".$_POST['aadharno']."','".$_POST['tca']."','".$_POST['qual']."','".$_POST['qualstd']."','".$_POST['seclang']."','".$_POST['protection']."','".$_POST['activities']."','".$_POST['declaration']."')");
}
if (isset($_POST['name_of_schl'])) {
$csl=$_POST['name_of_schl'];
$count1=count($csl);
//echo $count1;
 if($count1 > 0)  
 {  
      for($i=0; $i<$count1; $i++)  
      {  
	  		//echo $_POST["name_of_schl"][$i],$_POST["year"][$i],$_POST["cls_lst_std"][$i];
			  
                mysql_query("INSERT INTO previous_school(stu_id,name_of_schl,year,cls_lst_std) VALUES('".$id."','". $_POST["name_of_schl"][$i]."','". $_POST["year"][$i]."','". $_POST["cls_lst_std"][$i]."')");    
      }  
 }  
}
?>
</form>
<script>

   $(document).ready(function(){  
      var j=1;  
      $('#add').click(function(){  
           j++;  
           $('#dynamic_field').append('<tr id="row'+j+'"><td><input type="text" name="name_of_schl[]" width="30%" placeholder="Enter School Name" class="form-control name_list" /></td><td><input type="number" name="year[]" placeholder="Enter The Year" class="form-control name_list" /></td><td><input type="number" name="cls_lst_std[]" placeholder="Enter Last Class Studied" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
 });  
 </script>
<script> 
  $(function hideshow() {
    $('#showMe').hide(); 
    $('#his').change(function(){
        if($('#his').val() == 'yes') {
            $('#showMe').show(); 
        } 
		else {
            $('#showMe').hide();
		}	
    });
});




 </script>
</body>
</html>