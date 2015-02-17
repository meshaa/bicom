<?php 
ob_start(); session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/jsFunctions.js"></script>
<script type="text/javascript" src="js/ajaxFunctions.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#overlay").css("height",($(document).height()+270)+"px");
	$(document).click(function(e)
	{
			if(!$(e.target).is('#wasList') && !$(e.target).is('#signUp *') && !$(e.target).is('#websiteInquiry *') && !$(e.target).is('#signin *') && !$(e.target).is('#contactInquiry *'))
			{
				$("#overlay").fadeOut();
			}
		
		   if(!$(e.target).is('#wasList'))
		   {
			   $("#wasList").slideUp('fast');
			   $("#woList").slideUp('fast');
		   }
		   //alert($(e.target).attr("id"))
		   if(!$(e.target).is('#signUp *'))
		   {
				$("#signUp").fadeOut();		
		   }
		   
		   if(!$(e.target).is('#websiteInquiry *'))
		   {
				$("#websiteInquiry").fadeOut();		
		   }
		   
		    if(!$(e.target).is('#contactInquiry *'))
		   {
				$("#contactInquiry").fadeOut();		
		   }
		   
		   if(!$(e.target).is('#signin *'))
		   {
				$("#signin").fadeOut();		
		   }
	});	
});
</script>

<style type="text/css">

div#container
{
    margin:0px auto;
    width:980px;
    border:solid 0px;
}

div#benutzer{font-family:Rockwell; color:#b9a605; font-size:18px;}
div#benutzer a{color:#b9a605; text-decoration:none;}

div#bar{background-image:url('images/mainbar.png'); width:100%; height:338px; margin-top:-410px;}

table#arama{padding-top:140px; padding-left:20px; font-family:Rockwell; font-size:22px; color:white;}

div#map{width:40%; text-align:center; margin-top:0px;}

</style>

	<script type="text/javascript" src="ripter-jquery.rating/js/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="ripter-jquery.rating/jquery.rating.js"></script>
	<link rel="stylesheet" media="screen" type="text/css" href="ripter-jquery.rating/jquery.rating.css" />
	
	<script type="text/javascript">
		$(document).ready(function(){
			//Turn all the select boxes into rating controls
		    $(".rating").rating();
		
			//Show that we can bind on the select box
			$("#serialStar2").bind("change", function(){
				$('#serialString2').text( $('#serialStar2').serialize() );
			});
			
			$("#serialStar").rating();
			
		});		
	
	</script>
	
</head>
