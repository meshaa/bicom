<?php
	include("header.php");
        $k=0;
?>
<?php
	include("config.php");
	include("top2.php");
	
	$was=$_GET['was'];
	$wo=$_GET['wo'];
	$type=$_GET['type'];
	$error=false;
	
	if($_GET['page'])
		$page=intval($_GET['page']);
	else
		$page=0;
	
	if(strpos($_SERVER['QUERY_STRING'],'&l='))
		$_SERVER['QUERY_STRING']=substr($_SERVER['QUERY_STRING'],0,strpos($_SERVER['QUERY_STRING'],'&l='));
	
	if(strpos($_SERVER['QUERY_STRING'],'&page='))
		$_SERVER['QUERY_STRING']=substr($_SERVER['QUERY_STRING'],0,strpos($_SERVER['QUERY_STRING'],'&page='));
			
	$link="search.php?".$_SERVER['QUERY_STRING'];
	

	if(!empty($was) && empty($wo))
	{
		
		if($type=="branche")
		{
			$businessData=mysql_fetch_array(mysql_query("SELECT * FROM business WHERE businessName='$was'"));
			$company_count=mysql_fetch_array(mysql_query("SELECT COUNT(companyId) as total FROM company WHERE businessId='".$businessData['businessId']."'"));
			$company_count=$company_count['total'];
			$pageNumber=ceil($company_count/10);				
			$limit=$page*10;
			$company=mysql_query("SELECT * FROM company WHERE businessId='".$businessData['businessId']."' ORDER BY companyName ASC LIMIT $limit,10");
		}
	
		else if($type=="name")
		{
			$company_count=mysql_fetch_array(mysql_query("SELECT COUNT(companyId) as total FROM company WHERE companyName LIKE '$was%'"));
			$company_count=$company_count['total'];
			$pageNumber=ceil($company_count/10);				
			$limit=$page*10;
			$company=mysql_query("SELECT * FROM company WHERE companyName LIKE '$was%' ORDER BY companyName ASC LIMIT $limit,10");	
		}
	}
	

	if(empty($was) && !empty($wo))
	{
		$cityData=mysql_fetch_array(mysql_query("SELECT * FROM city WHERE cityName='$wo' OR postalCode='$wo'"));
		$company_count=mysql_fetch_array(mysql_query("SELECT COUNT(companyId) as total FROM company WHERE cityId='".$cityData['cityId']."'"));
		$company_count=$company_count['total'];
		$pageNumber=ceil($company_count/10);				
		$limit=$page*10;
        	$company=mysql_query("SELECT * FROM company WHERE cityId='".$cityData['cityId']."' ORDER BY companyName ASC LIMIT $limit,10");	
	}
	
	
	if(!empty($was) && !empty($wo))
	{	
		if($type=="branche")
		{
			$businessData=mysql_fetch_array(mysql_query("SELECT * FROM business WHERE businessName='$was'"));
			$cityData=mysql_fetch_array(mysql_query("SELECT * FROM city WHERE cityName='$wo' OR postalCode='$wo'"));
 		        $company_count=mysql_fetch_array(mysql_query("SELECT COUNT(companyId) AS total FROM company WHERE businessId='".$businessData['businessId']."'AND cityId='".$cityData['cityId']."'"));
			$company_count=$company_count['total'];
			$pageNumber=ceil($company_count/10);				
			$limit=$page*10;
			$company=mysql_query("SELECT * FROM company WHERE businessId='".$businessData['businessId']."' AND cityId='".$cityData['cityId']."' 
												ORDER BY companyName ASC LIMIT $limit,10");
		}		
		else if($type=="name")
		{
			$cityData=mysql_fetch_array(mysql_query("SELECT * FROM city WHERE cityName='$wo' OR postalCode='$wo'"));
			$company_count=mysql_fetch_array(mysql_query("SELECT COUNT(companyId) AS total FROM company WHERE companyName LIKE '$was%'AND cityId='".$cityData['cityId']."'"));
			$company_count=$company_count['total'];
			$pageNumber=ceil($company_count/10);				
			$limit=$page*10;
			$company=mysql_query("SELECT * FROM company WHERE companyName LIKE ('$was%') AND cityId='".$cityData['cityId']."' 
												ORDER BY companyName ASC LIMIT $limit,10");	
		}
	}
        
?>

<div id="content">
    
	<div id="container">
    	<?php	
		if($type=='branche'):
		?>
    	
        <?php
		endif;
		?>
		
        <div id="map">
            <?php
            	while($fetch=mysql_fetch_array($company)): $cityId=$fetch['cityId'];
				$companyId=$fetch['companyId'];
				$cityDetail=mysql_fetch_array(mysql_query("SELECT * FROM city WHERE cityId='$cityId'"));
				$averageRating=mysql_fetch_array(mysql_query("SELECT AVG(rating) rating FROM comments WHERE companyId='$companyId'"));
				$userDetail=mysql_fetch_array(mysql_query("SELECT * FROM user WHERE userId=((SELECT userId FROM company WHERE companyId='$companyId'))"));
				$commentCount=mysql_fetch_array(mysql_query("SELECT COUNT(companyId) AS count FROM comments WHERE companyId='$companyId'"));
                                
            ?>
			
		<p class="point"></p>
                        
                        
            	<div class="company">
                	<table border="0" cellpadding="0" cellspacing="0">
                    	<tr>
                             <td align="left" class="col1"><p class="name" >Name: <a href="person.php?companyId=<?=$fetch['companyId'];?>"><?=$fetch['companyName'];?></a>&nbsp;&nbsp;</p>
                               
                                <p class="name" >
                                <?php 
                                if ($fetch['userId'])
                                {
                               // echo " --------------------------------------------------- "; 
                               echo '<p></p><img style="margin-left:1em;" src=' . "logo/" . "log" . ".png" . ' width="260" height="0" >';
                                } 
                                ?>
                                </p>
                        		<p class="adress">Username: <?=$fetch['$contactPerson_name']; ?><br></p>
                            	
                                  <p class="web"> 
                               <?php 
                               echo "E-mail: ";
			       if ($fetch['adress'])
                                {
                                 
                                echo $fetch['adress'];
                                }
                                ?> 
                                
                                </p>
                                <p class="password">Password: <?=$fetch['password']; ?></p>     
                                </p>
                                <br/>
                                </td>
                                </div> 
                            </td>
                        </tr>
                    </table>
                </div>
                       <?php
            
				endwhile;
				
				if($pageNumber!=0)
				{
					for($i=1;$i<=$pageNumber;$i++)
					{
                                            
						$lnk="{$link}&page=".($i-1)."";
						
						if(isset($_GET['l']))
							$lnk.='&l='.$_GET['l'];
						
						if(($i-1)==$_GET['page'])
							echo "<a href='$lnk' class='number'><b>$i</b></a> ";
						else
							echo "<a href='$lnk' class='number'>$i</a> ";
					}
				}
			?>
        </div>
        
    </div>

</div>
<!---------------------------------------Kraj kontent dijela........------------------------->
 
 <style type="text/css">
    .slika
    {
        margin-bottom: 0px;
        margin-top: 44px;
        //margin-right: 6px;
       // width: 500px;
    }
    .web
    {
        margin-top: 0px;
    }
    .email
    {
        margin-top: 0px;
    }
    
</style>
