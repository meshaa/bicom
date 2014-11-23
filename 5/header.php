<?php 
ob_start(); session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bicom</title>


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
body{margin:0;padding:0;}
div#container
{
    margin:0px auto;
    width:980px;
    border:solid 0px;
	
	
}

table#ustlayout{margin-top:10px; width:100%;}
div#benutzer{font-family:Rockwell; color:#b9a605; font-size:18px;}
div#benutzer a{color:#b9a605; text-decoration:none;}
div#logo{}
div#sagkisim{}
div#bar{background-image:url('images/mainbar.png'); width:100%; height:338px; margin-top:-100px;}
table#arama{padding-top:140px; padding-left:20px; font-family:Rockwell; font-size:22px; color:white;}
div.input{background-image:url('images/input.png'); width:199px; height:41px;}
div.input input{border:0; background:none; margin:10px 0 0 5px; width:190px;}
div#map{width:100%; text-align:center; margin-top:-35px;}


div#footer{background-image:url('images/footer.png'); width:100%; margin-top:20px; text-align:right; color:white; font-family:Myriad Pro;
			font-size:13px;}
div#footer a{color:white; text-decoration:none;}

div#datacontent table.city{margin-bottom:20px;}
div#datacontent table.city a{font-family:Myriad Pro; text-decoration:none; color:#246074;}

ul.autolist{margin:0; padding:10px; list-style-type:none;}
ul.autolist li a{display:block; color:#032d3b; font-family:Arial; font-size:11px; text-decoration:none;}
ul.autolist li a:hover{display:block; font-family:Arial; font-size:11px; background-color:#032d3b; color:white; 
							text-decoration:none;}
ul.autolist li.selected a{display:block; font-family:Arial; font-size:11px; background-color:#032d3b; color:white; 
							text-decoration:none;}
							
div.persons{background-color:#DEEEF3; border:solid 1px #32819A; -moz-border-radius: 15px;
border-radius: 15px; margin-bottom:10px; padding:15px;}
div.persons table{width:100%;}
div.persons table tr td.col1{border-right:solid 1px #CFCFCF; width:300px;}
div.persons table tr td.col2{border-right:solid 1px #CFCFCF; width:300px; padding-left:20px;}
div.persons table tr td.col3{border-right:solid 1px #CFCFCF; width:100px; padding-left:20px;}
div.persons a{color:#246074; text-decoration:none; font-family:Myriad Pro;}
div.persons a:hover{text-decoration:underline;}
div.persons p{margin:0;padding:0;}
div.persons p.adress{padding-top:10px; font-family:Rockwell; font-size:14px;}
div.persons p.phone{padding-top:10px; font-family:Rockwell; font-size:14px;}
div.persons p.businessDetail{font-family:Rockwell; font-size:14px; padding-bottom:10px;}
div.persons p.commentCount,p.point{margin-top:10px;}
a.number{text-decoration:none; color:black; pading-right:10px; font-family:Arial; font-size:11px;}

a.cityDetailLink{text-decoration:none; color:black; font-family:Myriad Pro; font-size:15px;}
a.cityDetailLink:hover{text-decoration:underline;}

a.personDetailLink{text-decoration:none; color:#246074; font-family:Myriad Pro; font-size:15px;}
a.personDetailLink:hover{text-decoration:underline;}

table.persondet{}
table.persondet p{padding:0;margin:0; font-family:Myriad Pro; font-size:15px;}
table.persondet p.name{padding-top:13px;}
table.persondet p.adress{padding-top:30px;}
table.persondet p.phone{padding-top:30px;}
table.persondet p.website{padding-top:5px;}
table.persondet p.point{padding-top:13px;}
table.persondet p.bew{padding-top:60px;}

div#signin{position:absolute; border:solid 1px; left:30%; top:15%; width:430px; height:145px; background:white; 
			-moz-border-radius: 15px; border-radius: 15px; padding:15px; z-index:1000;}
div#signin table{font-family:Myriad Pro; font-size:16px;}	
div#signin table td.lbl{width:170px;}	
div#signin table td .txt{width:250px;}
div#signin table td .txtarea{width:250px; height:60px;}
div#signin table td.Leerzeilen{height:3px;}

div#signUp{position:absolute; border:solid 1px; left:30%; top:15%; width:430px; height:520px; background:white; 
			-moz-border-radius: 15px; border-radius: 15px; padding:15px; z-index:1000;}
div#signUp table{font-family:Myriad Pro; font-size:16px;}	
div#signUp table td.lbl{width:170px;}	
div#signUp table td .txt{width:250px;}
div#signUp table td .txtarea{width:250px; height:60px;}
div#signUp table td.Leerzeilen{height:3px;}


table.update{font-family:Myriad Pro; font-size:16px;}	
table.update td.lbl{width:170px;}	
table.update td .txt{width:250px;}
table.update td .txtarea{width:250px; height:60px;}
table.update td.Leerzeilen{height:3px;}

div#websiteInquiry{position:absolute; border:solid 1px; left:30%; top:15%; width:430px; height:430px; background:white; 
			-moz-border-radius: 15px; border-radius: 15px; padding:15px; z-index:1000;}
div#websiteInquiry table{font-family:Myriad Pro; font-size:16px;}	
div#websiteInquiry table td.lbl{width:170px;}	
div#websiteInquiry table td .txt{width:250px;}
div#websiteInquiry table td .txtarea{width:250px; height:60px;}
div#websiteInquiry table td.Leerzeilen{height:3px;}

div#contactInquiry{position:absolute; border:solid 1px; left:30%; top:15%; width:430px; height:220px; background:white; 
			-moz-border-radius: 15px; border-radius: 15px; padding:15px; z-index:1000;}
div#contactInquiry table{font-family:Myriad Pro; font-size:16px;}	
div#contactInquiry table td.lbl{width:170px;}	
div#contactInquiry table td .txt{width:250px;}
div#contactInquiry table td .txtarea{width:250px; height:60px;}
div#contactInquiry table td.Leerzeilen{height:3px;}

table.commenttable{font-family:Myriad Pro; font-size:13px;}
table.commenttable p.writer{padding:0;margin:0; font-style:italic;}
table.commenttable p.subject{padding:0;margin:0;font-weight:bold;font-style:italic;}
table.commenttable p.text{padding:0;margin:0;}

table.commentwrite{font-family:Myriad Pro; font-size:14px;}
table.commentwrite td.Leerzeilen{height:4px;}
table.commentwrite .txtbx{width:320px;}

div#cntn{width:100%; text-align:left;}
div#cntn table{width:800px;font-family:Myriad Pro; font-size:15px; margin-top:-50px; margin-left:110px;}
div#cntn ul{margin:0;padding:0; font-size:14px; font-family:Myriad Pro;}
div#cntn ul li{margin-bottom:10px;}
div#cntn h1{margin:0 0 15px 0;padding:0;}
div#cntn p.dtn{font-family:Myriad Pro; font-size:15px;}
div#cntn p.df{font-family:Myriad Pro; font-size:15px;}
div#cntn p.question{font-weight:bold;}
div#cntn p.pr{font-family:Myriad Pro; font-size:15px;padding-bottom:20px;}
div#cntn p.pr2{font-family:Myriad Pro; font-size:15px;}
div#cntn p.prborder{font-family:Myriad Pro; font-size:15px; border:solid 1px;}

div#flags{margin-bottom: 10px; spacing: 10px; width: 100%;} 
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
	<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0; padding: 0 }
  #map_canvas { height: 100% }
</style>
</head>
