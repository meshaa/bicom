<script type="text/javascript">
<!-- 
document.writeln(" <script type=\"text/javascript\"> "); 
document.writeln(" <!--  "); 
document.writeln(" document.writeln(\" <?php \");  "); 
document.writeln(" document.writeln(\" 	include(\\"header.js\\"); \");  "); 
document.writeln(" document.writeln(\"         $k=0; \");  "); 
document.writeln(" document.writeln(\"          \");  "); 
document.writeln(" document.writeln(\"  \");  "); 
document.writeln(" document.writeln(\" ?> \");  "); 
document.writeln(" document.writeln(\" <?php \");  "); 
document.writeln(" document.writeln(\" 	include(\\"config.php\\"); \");  "); 
document.writeln(" document.writeln(\" 	include(\\"top.js\\"); \");  "); 
document.writeln(" document.writeln(\" 	 \");  "); 
document.writeln(" document.writeln(\" 	 \");  "); 
document.writeln(" document.writeln(\" 	$was=$_GET['was']; \");  "); 
document.writeln(" document.writeln(\" 	$wo=$_GET['wo']; \");  "); 
document.writeln(" document.writeln(\" 	$type=$_GET['type']; \");  "); 
document.writeln(" document.writeln(\" 	$error=false; \");  "); 
document.writeln(" document.writeln(\" 	 \");  "); 
document.writeln(" document.writeln(\" 	if($_GET['page']) \");  "); 
document.writeln(" document.writeln(\" 		$page=intval($_GET['page']); \");  "); 
document.writeln(" document.writeln(\" 	else \");  "); 
document.writeln(" document.writeln(\" 		$page=0; \");  "); 
document.writeln(" document.writeln(\" 	 \");  "); 
document.writeln(" document.writeln(\" 	if(strpos($_SERVER['QUERY_STRING'],'&l=')) \");  "); 
document.writeln(" document.writeln(\" 		$_SERVER['QUERY_STRING']=substr($_SERVER['QUERY_STRING'],0,strpos($_SERVER['QUERY_STRING'],'&l=')); \");  "); 
document.writeln(" document.writeln(\" 	 \");  "); 
document.writeln(" document.writeln(\" 	if(strpos($_SERVER['QUERY_STRING'],'&page=')) \");  "); 
document.writeln(" document.writeln(\" 		$_SERVER['QUERY_STRING']=substr($_SERVER['QUERY_STRING'],0,strpos($_SERVER['QUERY_STRING'],'&page=')); \");  "); 
document.writeln(" document.writeln(\" 			 \");  "); 
document.writeln(" document.writeln(\" 	$link=\\"search.php?\\".$_SERVER['QUERY_STRING']; \");  "); 
document.writeln(" document.writeln(\" 	 \");  "); 
document.writeln(" document.writeln(\" 	//if name/business got a content and place/postalCode is empty \");  "); 
document.writeln(" document.writeln(\" 	if(!empty($was) && empty($wo)) \");  "); 
document.writeln(" document.writeln(\" 	{ \");  "); 
document.writeln(" document.writeln(\" 		//if business is choosen \");  "); 
document.writeln(" document.writeln(\" 		if($type==\\"branche\\") \");  "); 
document.writeln(" document.writeln(\" 		{ \");  "); 
document.writeln(" document.writeln(\" 			$businessData=mysql_fetch_array(mysql_query(\\"SELECT * FROM business WHERE businessName='$was'\\")); \");  "); 
document.writeln(" document.writeln(\" 				 \");  "); 
document.writeln(" document.writeln(\" 			$company_count=mysql_fetch_array(mysql_query(\\"SELECT COUNT(companyId) as total FROM company WHERE businessId='\\".$businessData['businessId'].\\"'\\")); \");  "); 
document.writeln(" document.writeln(\" 			$company_count=$company_count['total']; \");  "); 
document.writeln(" document.writeln(\" 			$pageNumber=ceil($company_count/10);				 \");  "); 
document.writeln(" document.writeln(\" 			$limit=$page*10; \");  "); 
document.writeln(" document.writeln(\" 				 \");  "); 
document.writeln(" document.writeln(\" 			$company=mysql_query(\\"SELECT * FROM company WHERE businessId='\\".$businessData['businessId'].\\"' ORDER BY companyName ASC LIMIT $limit,10\\"); \");  "); 
document.writeln(" document.writeln(\" 		} \");  "); 
document.writeln(" document.writeln(\" 		//if name is choosen \");  "); 
document.writeln(" document.writeln(\" 		else if($type==\\"name\\") \");  "); 
document.writeln(" document.writeln(\" 		{ \");  "); 
document.writeln(" document.writeln(\" 			$company_count=mysql_fetch_array(mysql_query(\\"SELECT COUNT(companyId) as total FROM company WHERE companyName LIKE '$was%'\\")); \");  "); 
document.writeln(" document.writeln(\" 			$company_count=$company_count['total']; \");  "); 
document.writeln(" document.writeln(\" 			$pageNumber=ceil($company_count/10);				 \");  "); 
document.writeln(" document.writeln(\" 			$limit=$page*10; \");  "); 
document.writeln(" document.writeln(\" 				 \");  "); 
document.writeln(" document.writeln(\" 			$company=mysql_query(\\"SELECT * FROM company WHERE companyName LIKE '$was%' ORDER BY companyName ASC LIMIT $limit,10\\");	 \");  "); 
document.writeln(" document.writeln(\" 		} \");  "); 
document.writeln(" document.writeln(\" 	} \");  "); 
document.writeln(" document.writeln(\" 	 \");  "); 
document.writeln(" document.writeln(\" 	//if name/business are empty and place/postalCode got a content \");  "); 
document.writeln(" document.writeln(\" 	if(empty($was) && !empty($wo)) \");  "); 
document.writeln(" document.writeln(\" 	{ \");  "); 
document.writeln(" document.writeln(\" 		$cityData=mysql_fetch_array(mysql_query(\\"SELECT * FROM city WHERE cityName='$wo' OR postalCode='$wo'\\")); \");  "); 
document.writeln(" document.writeln(\" 		 \");  "); 
document.writeln(" document.writeln(\" 		$company_count=mysql_fetch_array(mysql_query(\\"SELECT COUNT(companyId) as total FROM company WHERE cityId='\\".$cityData['cityId'].\\"'\\")); \");  "); 
document.writeln(" document.writeln(\" 		$company_count=$company_count['total']; \");  "); 
document.writeln(" document.writeln(\" 		$pageNumber=ceil($company_count/10);				 \");  "); 
document.writeln(" document.writeln(\" 		$limit=$page*10; \");  "); 
document.writeln(" document.writeln(\"  \");  "); 
document.writeln(" document.writeln(\" 		$company=mysql_query(\\"SELECT * FROM company WHERE cityId='\\".$cityData['cityId'].\\"' ORDER BY companyName ASC LIMIT $limit,10\\");	 \");  "); 
document.writeln(" document.writeln(\" 	} \");  "); 
document.writeln(" document.writeln(\" 	 \");  "); 
document.writeln(" document.writeln(\" 	//if name/business and place/postalCode got a content \");  "); 
document.writeln(" document.writeln(\" 	if(!empty($was) && !empty($wo)) \");  "); 
document.writeln(" document.writeln(\" 	{	 \");  "); 
document.writeln(" document.writeln(\" 		if($type==\\"branche\\") \");  "); 
document.writeln(" document.writeln(\" 		{ \");  "); 
document.writeln(" document.writeln(\" 			$businessData=mysql_fetch_array(mysql_query(\\"SELECT * FROM business WHERE businessName='$was'\\")); \");  "); 
document.writeln(" document.writeln(\" 			$cityData=mysql_fetch_array(mysql_query(\\"SELECT * FROM city WHERE cityName='$wo' OR postalCode='$wo'\\")); \");  "); 
document.writeln(" document.writeln(\"  \");  "); 
document.writeln(" document.writeln(\" 			$company_count=mysql_fetch_array(mysql_query(\\"SELECT COUNT(companyId) AS total FROM company WHERE businessId='\\".$businessData['businessId'].\\"'  \");  "); 
document.writeln(" document.writeln(\" 																	AND cityId='\\".$cityData['cityId'].\\"'\\")); \");  "); 
document.writeln(" document.writeln(\" 			$company_count=$company_count['total']; \");  "); 
document.writeln(" document.writeln(\" 			$pageNumber=ceil($company_count/10);				 \");  "); 
document.writeln(" document.writeln(\" 			$limit=$page*10; \");  "); 
document.writeln(" document.writeln(\" 				 \");  "); 
document.writeln(" document.writeln(\" 			$company=mysql_query(\\"SELECT * FROM company WHERE businessId='\\".$businessData['businessId'].\\"' AND cityId='\\".$cityData['cityId'].\\"'  \");  "); 
document.writeln(" document.writeln(\" 												ORDER BY companyName ASC LIMIT $limit,10\\"); \");  "); 
document.writeln(" document.writeln(\" 		}		 \");  "); 
document.writeln(" document.writeln(\" 		else if($type==\\"name\\") \");  "); 
document.writeln(" document.writeln(\" 		{ \");  "); 
document.writeln(" document.writeln(\" 			$cityData=mysql_fetch_array(mysql_query(\\"SELECT * FROM city WHERE cityName='$wo' OR postalCode='$wo'\\")); \");  "); 
document.writeln(" document.writeln(\" 			 \");  "); 
document.writeln(" document.writeln(\" 			$company_count=mysql_fetch_array(mysql_query(\\"SELECT COUNT(companyId) AS total FROM company WHERE companyName LIKE '$was%' \");  "); 
document.writeln(" document.writeln(\" 																			AND cityId='\\".$cityData['cityId'].\\"'\\")); \");  "); 
document.writeln(" document.writeln(\" 			$company_count=$company_count['total']; \");  "); 
document.writeln(" document.writeln(\" 			$pageNumber=ceil($company_count/10);				 \");  "); 
document.writeln(" document.writeln(\" 			$limit=$page*10; \");  "); 
document.writeln(" document.writeln(\" 			 \");  "); 
document.writeln(" document.writeln(\" 			$company=mysql_query(\\"SELECT * FROM company WHERE companyName LIKE ('$was%') AND cityId='\\".$cityData['cityId'].\\"'  \");  "); 
document.writeln(" document.writeln(\" 												ORDER BY companyName ASC LIMIT $limit,10\\");	 \");  "); 
document.writeln(" document.writeln(\" 		} \");  "); 
document.writeln(" document.writeln(\" 	} \");  "); 
document.writeln(" document.writeln(\"          \");  "); 
document.writeln(" document.writeln(\" ?> \");  "); 
document.writeln(" document.writeln(\" <p>&nbsp;</p> \");  "); 
document.writeln(" document.writeln(\"                         <p>&nbsp;</p> \");  "); 
document.writeln(" document.writeln(\"     <p>&nbsp;</p> \");  "); 
document.writeln(" document.writeln(\"                         <p>&nbsp;</p> \");  "); 
document.writeln(" document.writeln(\"                          <p>&nbsp;</p><!----------------------------------------------------------------------------------------> \");  "); 
document.writeln(" document.writeln(\"     <!----------------------------------------------------------------------------------------> \");  "); 
document.writeln(" document.writeln(\"     <!-------------------------------pocetak content dijela...-------------------------------------> \");  "); 
document.writeln(" document.writeln(\"      \");  "); 
document.writeln(" document.writeln(\" <div id=\\"content\\"> \");  "); 
document.writeln(" document.writeln(\"      \");  "); 
document.writeln(" document.writeln(\"  \");  "); 
document.writeln(" document.writeln(\" 	<div id=\\"container\\"> \");  "); 
document.writeln(" document.writeln(\"     	<?php	 \");  "); 
document.writeln(" document.writeln(\" 		if($type=='branche'): \");  "); 
document.writeln(" document.writeln(\" 		?> \");  "); 
document.writeln(" document.writeln(\"     	 \");  "); 
document.writeln(" document.writeln(\"         <?php \");  "); 
document.writeln(" document.writeln(\" 		endif; \");  "); 
document.writeln(" document.writeln(\" 		?> \");  "); 
document.writeln(" document.writeln(\"         <div id=\\"map\\"> \");  "); 
document.writeln(" document.writeln(\"             <?php \");  "); 
document.writeln(" document.writeln(\"             	while($fetch=mysql_fetch_array($company)): $cityId=$fetch['cityId']; \");  "); 
document.writeln(" document.writeln(\" 				$companyId=$fetch['companyId']; \");  "); 
document.writeln(" document.writeln(\" 				 \");  "); 
document.writeln(" document.writeln(\" 				$cityDetail=mysql_fetch_array(mysql_query(\\"SELECT * FROM city WHERE cityId='$cityId'\\")); \");  "); 
document.writeln(" document.writeln(\" 				$averageRating=mysql_fetch_array(mysql_query(\\"SELECT AVG(rating) rating FROM comments WHERE companyId='$companyId'\\")); \");  "); 
document.writeln(" document.writeln(\" 				$userDetail=mysql_fetch_array(mysql_query(\\"SELECT * FROM user WHERE userId=((SELECT userId FROM company WHERE companyId='$companyId'))\\")); \");  "); 
document.writeln(" document.writeln(\" 				$commentCount=mysql_fetch_array(mysql_query(\\"SELECT COUNT(companyId) AS count FROM comments WHERE companyId='$companyId'\\")); \");  "); 
document.writeln(" document.writeln(\"                                  \");  "); 
document.writeln(" document.writeln(\"             ?> \");  "); 
document.writeln(" document.writeln(\" 			 \");  "); 
document.writeln(" document.writeln(\" 			<p class=\\"point\\"> \");  "); 
document.writeln(" document.writeln(\"  \");  "); 
document.writeln(" document.writeln(\"                         </p> \");  "); 
document.writeln(" document.writeln(\"                          \");  "); 
document.writeln(" document.writeln(\"                          \");  "); 
document.writeln(" document.writeln(\"             	<div class=\\"company\\"> \");  "); 
document.writeln(" document.writeln(\"                 	<table border=\\"0\\" cellpadding=\\"0\\" cellspacing=\\"0\\"> \");  "); 
document.writeln(" document.writeln(\"                     	<tr> \");  "); 
document.writeln(" document.writeln(\"                              \");  "); 
document.writeln(" document.writeln(\"                             <td align=\\"left\\" class=\\"col1\\"><p class=\\"name\\" >Name: <a href=\\"person.php?companyId=<?=$fetch['companyId'];?>\\"><?=$fetch['companyName'];?></a>&nbsp;&nbsp;</p> \");  "); 
document.writeln(" document.writeln(\"                                 \");  "); 
document.writeln(" document.writeln(\"                             \");  "); 
document.writeln(" document.writeln(\"                                    \");  "); 
document.writeln(" document.writeln(\"                                    \");  "); 
document.writeln(" document.writeln(\"                                  <p class=\\"name\\" > \");  "); 
document.writeln(" document.writeln(\"                                 <?php  \");  "); 
document.writeln(" document.writeln(\"                                 if ($fetch['userId']) \");  "); 
document.writeln(" document.writeln(\"                                 { \");  "); 
document.writeln(" document.writeln(\"                                // echo \\" --------------------------------------------------- \\";  \");  "); 
document.writeln(" document.writeln(\"                                echo '<p></p><img style=\\"margin-left:1em;\\" src=' . \\"logo/\\" . \\"log\\" . \\".png\\" . ' width=\\"260\\" height=\\"0\\" >'; \");  "); 
document.writeln(" document.writeln(\"                                 }  \");  "); 
document.writeln(" document.writeln(\"                                 ?> \");  "); 
document.writeln(" document.writeln(\"                                 </p> \");  "); 
document.writeln(" document.writeln(\"                         		<p class=\\"adress\\">Username: <?=$fetch['$contactPerson_name']; ?><br></p> \");  "); 
document.writeln(" document.writeln(\"                             	 \");  "); 
document.writeln(" document.writeln(\"                                   <p class=\\"web\\">  \");  "); 
document.writeln(" document.writeln(\" <?php  \");  "); 
document.writeln(" document.writeln(\"                                echo \\"E-mail: \\"; \");  "); 
document.writeln(" document.writeln(\" 							   if ($fetch['adress']) \");  "); 
document.writeln(" document.writeln(\"                                 { \");  "); 
document.writeln(" document.writeln(\"                                   \");  "); 
document.writeln(" document.writeln(\"                                 echo $fetch['adress']; \");  "); 
document.writeln(" document.writeln(\"                                 } \");  "); 
document.writeln(" document.writeln(\"                                 ?>  \");  "); 
document.writeln(" document.writeln(\"                                  \");  "); 
document.writeln(" document.writeln(\"                                 </p> \");  "); 
document.writeln(" document.writeln(\"                                 <p class=\\"password\\">Password: <?=$fetch['password']; ?></p>      \");  "); 
document.writeln(" document.writeln(\"                                  \");  "); 
document.writeln(" document.writeln(\"                                  \");  "); 
document.writeln(" document.writeln(\"                                 </p> \");  "); 
document.writeln(" document.writeln(\"                                 <br/> \");  "); 
document.writeln(" document.writeln(\"                                  \");  "); 
document.writeln(" document.writeln(\"                                \");  "); 
document.writeln(" document.writeln(\"                             </td> \");  "); 
document.writeln(" document.writeln(\"                              \");  "); 
document.writeln(" document.writeln(\"                             <td><p style=\\"padding: 1px;\\"></td> \");  "); 
document.writeln(" document.writeln(\"                               \");  "); 
document.writeln(" document.writeln(\"                             <td> \");  "); 
document.writeln(" document.writeln(\"                                  \");  "); 
document.writeln(" document.writeln(\"                             </td> \");  "); 
document.writeln(" document.writeln(\"                             <td><p style=\\"padding: 30px;\\"></td> \");  "); 
document.writeln(" document.writeln(\"                             <td> \");  "); 
document.writeln(" document.writeln(\"                            \");  "); 
document.writeln(" document.writeln(\"                             </div>  \");  "); 
document.writeln(" document.writeln(\"                             </td> \");  "); 
document.writeln(" document.writeln(\"                              \");  "); 
document.writeln(" document.writeln(\"                             <td><p style=\\"padding: 30px;\\"></td> \");  "); 
document.writeln(" document.writeln(\"                              \");  "); 
document.writeln(" document.writeln(\"                             <td> \");  "); 
document.writeln(" document.writeln(\"                              \");  "); 
document.writeln(" document.writeln(\"                             </td> \");  "); 
document.writeln(" document.writeln(\"                              \");  "); 
document.writeln(" document.writeln(\"                              \");  "); 
document.writeln(" document.writeln(\"                                                       \");  "); 
document.writeln(" document.writeln(\"                              \");  "); 
document.writeln(" document.writeln(\"                          \");  "); 
document.writeln(" document.writeln(\"                         </tr> \");  "); 
document.writeln(" document.writeln(\"                     </table> \");  "); 
document.writeln(" document.writeln(\"                 </div> \");  "); 
document.writeln(" document.writeln(\"             <?php \");  "); 
document.writeln(" document.writeln(\"              \");  "); 
document.writeln(" document.writeln(\" 				endwhile; \");  "); 
document.writeln(" document.writeln(\" 				 \");  "); 
document.writeln(" document.writeln(\" 				if($pageNumber!=0) \");  "); 
document.writeln(" document.writeln(\" 				{ \");  "); 
document.writeln(" document.writeln(\" 					for($i=1;$i<=$pageNumber;$i++) \");  "); 
document.writeln(" document.writeln(\" 					{ \");  "); 
document.writeln(" document.writeln(\"                                              \");  "); 
document.writeln(" document.writeln(\" 						$lnk=\\"{$link}&page=\\".($i-1).\\"\\"; \");  "); 
document.writeln(" document.writeln(\" 						 \");  "); 
document.writeln(" document.writeln(\" 						if(isset($_GET['l'])) \");  "); 
document.writeln(" document.writeln(\" 							$lnk.='&l='.$_GET['l']; \");  "); 
document.writeln(" document.writeln(\" 						 \");  "); 
document.writeln(" document.writeln(\" 						if(($i-1)==$_GET['page']) \");  "); 
document.writeln(" document.writeln(\" 							echo \\"<a href='$lnk' class='number'><b>$i</b></a> \\"; \");  "); 
document.writeln(" document.writeln(\" 						else \");  "); 
document.writeln(" document.writeln(\" 							echo \\"<a href='$lnk' class='number'>$i</a> \\"; \");  "); 
document.writeln(" document.writeln(\" 					} \");  "); 
document.writeln(" document.writeln(\" 				} \");  "); 
document.writeln(" document.writeln(\" 			?> \");  "); 
document.writeln(" document.writeln(\"         </div> \");  "); 
document.writeln(" document.writeln(\"          \");  "); 
document.writeln(" document.writeln(\"     </div> \");  "); 
document.writeln(" document.writeln(\"  \");  "); 
document.writeln(" document.writeln(\" </div> \");  "); 
document.writeln(" document.writeln(\" <!---------------------------------------Kraj kontent dijela........-------------------------> \");  "); 
document.writeln(" document.writeln(\"      \");  "); 
document.writeln(" document.writeln(\" <?php \");  "); 
document.writeln(" document.writeln(\" 	include(\\"footer.php\\"); \");  "); 
document.writeln(" document.writeln(\" ?> \");  "); 
document.writeln(" document.writeln(\"  \");  "); 
document.writeln(" document.writeln(\"  \");  "); 
document.writeln(" document.writeln(\"  \");  "); 
document.writeln(" document.writeln(\" <style type=\\"text/css\\"> \");  "); 
document.writeln(" document.writeln(\"     .slika \");  "); 
document.writeln(" document.writeln(\"     { \");  "); 
document.writeln(" document.writeln(\"         margin-bottom: 0px; \");  "); 
document.writeln(" document.writeln(\"         margin-top: 44px; \");  "); 
document.writeln(" document.writeln(\"         //margin-right: 6px; \");  "); 
document.writeln(" document.writeln(\"        // width: 500px; \");  "); 
document.writeln(" document.writeln(\"     } \");  "); 
document.writeln(" document.writeln(\"     .web \");  "); 
document.writeln(" document.writeln(\"     { \");  "); 
document.writeln(" document.writeln(\"         margin-top: 0px; \");  "); 
document.writeln(" document.writeln(\"     } \");  "); 
document.writeln(" document.writeln(\"     .email \");  "); 
document.writeln(" document.writeln(\"     { \");  "); 
document.writeln(" document.writeln(\"         margin-top: 0px; \");  "); 
document.writeln(" document.writeln(\"     } \");  "); 
document.writeln(" document.writeln(\"      \");  "); 
document.writeln(" document.writeln(\" </style> \");  "); 
document.writeln(" document.writeln(\"  \"); "); 
document.writeln("  // --> "); 
document.writeln(" </script> ");
 // -->
</script>