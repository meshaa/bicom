<div id="overlay" style="position:center; top:0;  opacity : 0.8;  display:none;"></div>

<?php
error_reporting( error_reporting() & ~E_NOTICE );
	  error_reporting( error_reporting() & 0 );
	include("miscFunctions.php");
	if(isset($_POST['signinSend']))
	{
		$username=$_POST['signin_userName'];
		$password=md5($_POST['signin_pass']);
		
		$control=mysql_fetch_array(mysql_query("SELECT COUNT(companyId) AS total FROM company WHERE userId=(SELECT userId FROM user WHERE userName='$username' AND password='$password')"));
		$control=$control['total'];

		if($control==0)
		{
		 echo '<script type="text/javascript">alert("Account not found!");</script>';
		}
		else
		{
			$data=mysql_fetch_array(mysql_query("SELECT companyId,approved FROM company, user WHERE user.userName='$username' AND user.password='$password'"));
			$userId = mysql_fetch_array(mysql_query("SELECT userId FROM user WHERE userName='$username' AND password='$password'"));
			$approved = mysql_fetch_array(mysql_query("SELECT approved FROM user WHERE userId='$userId'"));
			
			if($data['approved']!='1')
			{
				echo '<script type="text/javascript">alert("Account not found!");</script>';
			}
			else
			{	
				$userId2 = $userId['userId'];
				$companyId=mysql_fetch_array(mysql_query("SELECT companyId FROM company WHERE userId='$userId2'"));
				
				if(isset($_POST['remember']))
					setcookie("giris",$companyId['companyId'],time()+3600*24*3);
				else
					setcookie("giris",$companyId['companyId'],time()+3600*24);
					
				header("location:".$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']);
			}
		}
	}
	
	if(isset($_COOKIE['giris']))
	{
		$id=intval($_COOKIE['giris']);
		$control=mysql_fetch_array(mysql_query("SELECT COUNT(companyId) AS total FROM company WHERE companyId='$id'"));
		$control=$control['total'];
		
		if($control>0)
		{
			$data=mysql_fetch_array(mysql_query("SELECT companyId FROM company WHERE companyId='$id'"));
			
			$_SESSION['data']=$data;
		}
	}		
?>
	
<div id="signin" style="display:none;">
	<p style="padding:0;margin:0;color:#246074;font-family:Rockwell;font-size:22px;">Login</p>
	<form action="<?=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];?>" method="post">
	<table border="0" cellpadding="0" cellspacing="0">
    	<tr><td style="height:10px;"></td></tr>
        <tr><td class="lbl">Admin</td><td><input type="text" name="signin_userName" id="signin_userName" class="txt" /></td></tr>
        <tr><td colspan="2" class="Leerzeilen"></td></tr>
        <tr><td class="lbl">Password</td><td><input type="password" name="signin_pass" id="signin_pass" class="txt" /></td></tr>
        <tr><td colspan="2" class="Leerzeilen"></td></tr>
		<tr><td colspan="2"><input type="checkbox" name="remember" /> Remember my password</td></tr>
		<tr><td colspan="2" class="Leerzeilen"></td></tr>
       <tr><td><input type="submit" value="Login!" name="signinSend" /></td></tr>
    </table>
	</form>
</div>	

<div id="signUp" style="display:none;">
	<p style="padding:0;margin:0;color:#246074;font-family:Rockwell;font-size:22px;">Add User</p>
	<table border="0" cellpadding="0" cellspacing="0" id="signUptableform">
    	<tr><td style="height:10px;"></td></tr>
        <tr><td class="lbl">Name</td><td><input type="text" name="company" class="txt"  id="signUp_company" /></td></tr> 
        
        <tr><td colspan="2" class="Leerzeilen"></td></tr>
        <tr><td class="lbl">Username</td><td><input type="text" name="contactPerson_name" id="signUp_contactPerson_name" class="txt"></input></td></tr>
        
        <tr><td colspan="2" class="Leerzeilen"></td></tr>
        <tr><td class="lbl">Email</td><td><input type="text" name="adress" class="txt" id="signUp_adress" /></td></tr>
    	
        <tr><td colspan="2" class="Leerzeilen"></td></tr>
        <tr><td class="lbl">Password</td><td><input type="text" name="password" class="txt" id="signUp_password" /></td></tr>
       
        
	   <tr><td colspan="2" class="Leerzeilen"></td></tr>
       <tr><td><input type="button" value="Add user!" id="sendTo" onclick="signUp()" /></td></tr>
    </table>
	<p id="signUpResult" style="font-family:Myriad Pro; font-size:14px;display:none;">
	Thank you
	</p>
	</div>
     
</div>


<div id="container">

<table border="0" cellpadding="0" cellspacing="0" id="ustlayout">
<tr><td>
    <div id="logo"></div>
</td><td align="left" valign="top">
    <div id="sagkname">
    	<div id="benutzer">
			<?php
				if($_SESSION['data'] === null):
                                    //if($_SESSION['data']==null):
			?>
        	<a href="javascript:openSignInForm()">Login</a> | <a href="javascript:openSignUpForm()">Register</a>
			<?php
				else:
			?>
				 <a href="search.php?was=Designer&wo=&x=71&y=19&type=branche">Start</a> |
				  <a target="_blank" href="http://stranica.6te.net/download_excel.php">Save file</a> |
				 <a href="logout.php?red=<?=str_replace("/","",$_SERVER['PHP_SELF'])."?".$_SERVER['QUERY_STRING'];?>">Logout</a>
			<?php
				endif;
			?>
        </div>
        <div style="margin-top:35px;"></div>
    </div>
</td></tr></table>
</div>
<div id="bar">
	<div id="container"></div>
    <form action="search.php" action="get" onsubmit="return formControl()">
        <table border="0" cellpadding="0" cellspacing="0" id="arama">
            <tr><td width="30"></td><td width="80"><div class="input"><input type="text"  name="was" id="wastxtbx" onkeyup="searchFull(this.value)"
            													value="<?=((isset($_GET['was']))?'':$_GET['was']);?>"  /></div></td>
            	
                <td width="10" style="width:10px;"></td>
                <td width="148"><input type="image" src="images/btn.png" /></td>
            </tr>
            <tr>
            	<td></td>
                	<td style="font-size:13px; padding-top:5px;">
                    	<div id="wasList" style="position:absolute; border:solid 1px #032d3b; background:white; margin-top:-6px; 
                        			width:200px; color:black; display:none; z-index:1000;">
                                    
                        </div>
                	<input type="hidden" name="type" value="branche" id="branche" 
							<?=(($_GET['type'] === 'branche')?'checked="checked"':'checked="checked"');?>
                               />  
                    <input type="hidden" name="type" value="name" id="name" 
							<?=(($_GET['type']=='name')?'checked="checked"':'checked="checked"');?> /> 
                </td>
                <td></td>
                <td></td>
                <td width="64" style="font-size:13px; padding-top:5px;">
                	
                    <div id="woList" style="position:absolute; border:solid 1px #032d3b; background:white; margin-top:-23px; 
                        			width:200px; color:black; display:none; z-index:1001;">
                                    
                     </div>
                </td>
            </tr>
        </table>
        </form>
</div>
</div>

