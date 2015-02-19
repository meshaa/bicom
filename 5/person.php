<html>

<body bgcolor="#FFFFCC "onload="javaScript:RefreshPage(3000);" >

    <div id="content">
    <div id="container">
    <div id="map">
          
		
<?php
	include("header1.php");
	include("config.php");
	include("top2.php");
	$companyId=intval($_GET['companyId']);
    error_reporting( error_reporting() & ~E_NOTICE );
	error_reporting( error_reporting() & 0 );
       
	
	if(isset($_POST['update_send']))
		{
			$companyName=$_POST['update_companyName'];
			$contactPerson_name=$_POST['update_contactPerson_name'];
			$adress=$_POST['update_adress'];
			$password=$_POST['update_password'];
			
			mysql_query("UPDATE company SET password='$password',contactPerson_name='$contactPerson_name',adress='$adress',companyName='$companyName' WHERE companyId='$companyId'");
			mysql_query("UPDATE user SET userName='$userName' WHERE userId=(SELECT userId FROM company WHERE companyId='$companyId')");
		}
		
		    $company=mysql_fetch_array(mysql_query("SELECT * FROM company WHERE companyId='$companyId'"));
		
    if(isset($_POST['fertig']))
       {
            $conn=mysql_connect($host,$user,$pass);
    if(! $conn )
       {
           die('Could not connect: ' . mysql_error());
       }

           $companyId=$company['companyId'];
           $sql1="DELETE FROM company WHERE companyId=$companyId" ; 
           mysql_select_db($test);
           $retval = mysql_query( $sql1, $conn );

    if(! $retval )
       {
           die('Could not enter data: ' . mysql_error());
       }
           echo 'alert(\'Fertig\');';
           echo 'console.log(\'Fertig\');';

           mysql_close($conn);
       }

           echo '</script>';

				
				?>
	
    <form method="post" action="" >
    <table width="400" border="0" cellspacing="1" cellpadding="2">
       <tr>
       <td width="100"></td>
       <td><input value="<?=$company['contactPerson_name'];?>" name="subject" type="hidden" id="subject"></td>
       </tr>

       <tr>
       <td width="100"></td>
       <td><input value="<?=$company['companyId'];?>" name="companyId" type="hidden" id="companyId"></td>
       </tr>

       
       <tr>
       <td width="100"></td>
       <td> <input value="<?=$company['contactPerson_name'];?>" name="vorname" type="hidden" id="vorname"></td>
       </tr>

       <tr>
       <td width="100"></td>
       <td> <input value="<?=$company['adress'];?>" name="strasse" type="hidden" id="strasse"></td>
       </tr>

       <tr>
       <td width="100"></td>
       <td> <input value="<?=$company['password'];?>" name="tel" type="hidden" id="tel"></td>
       </tr>

       </td></tr>

       </table>

   <div class="company">
                 
        <table border="0" cellpadding="0" cellspacing="0">
        <tr>
        <td align="left" class="col1">
                   
  <form action="" method="post"> 
                     
        <p class="name" >  <tr><td>Name</td><td> &#160;&#160; <input size="30" type="text" name="update_companyName" id="update_companyName" class="txt" value="<?=$company['companyName'];?>" </td></tr></p>
        <tr><td>&nbsp; </td><td> </td></tr>
        <tr><td>Username</td><td> &#160;&#160;  <input size="30" type="text" name="update_adress" id="update_adress" class="txt" value="<?=$company['adress'];?>" />     </td></tr>
        <tr><td>&nbsp; </td><td> </td></tr>
        <tr><td>E-mail</td><td>&#160;&#160;<input size="30" type="text" name="update_website" id="update_website" class="txt" value="<?=$company['website']; ?> " />
        </td></tr>
        <tr><td>&nbsp; </td><td> </td></tr>
        <tr><td>Password</td><td> &#160;&#160; <input size="30" type="text" name="update_password" id="update_password" class="txt" value="<?=$company['password'];?>" /> 
	</td></tr>
        <tr><td>&nbsp; </td><td> </td></tr>
              
        <tr><td></td><td>
        </td></tr>
               
   <input type="hidden" size="1" type="text" name="update_Lat" id="update_Lat" class="txtarea" value="<?=$company['Lat'];?>"/>  
   <input type="hidden" size="1" type="text" name="upda_Lat" id="upda_Lat" class="txtarea" value="<?=$company['Lat'];?>"/>      
              
        <tr><td></td><td> 	
      	<p>&nbsp; </p>
	
   <input  type="submit" value="Save edit" name="update_send" onClick="alert( 'Save' )"  style="margin-left:-50px; margin-top:20px;" />
   <input type="submit" value="Delete user" name="fertig" style="margin-left:50px; margin-top:20px;"  />
		  
	    
        </p>
    
        <font align="right" size="6" color="red"><?=$company['Lat'];?></font> 
        </form>
        </form>
   
        </td>								
        </table>
<body>
</html>

