function searchFull(name)
{
	//38 up
	//40 down
	
	if(event.keyCode==38)
	{
		completeArrowUp_was()
		bs="up";
		return false;
	}
	else if(event.keyCode==40)
	{
		completeArrowDown_was()
		bs="down";
		return false;
	}
	else if(event.keyCode==27)
	{
		$("#wasList").slideUp('fast');
		return false;
	}
	
	var type=0;
	arrowStatus=0;
	arrowFirst=true;
	
	if(name=="" || name==" ")
	{
		$("#wasList").slideUp('fast');
		return false;
	}
	
	if($("#name").is(':checked')==true && $("#branche").is(':checked')==false)
		type=1; 
	else if($("#name").is(':checked')==false && $("#branche").is(':checked')==true)
		type=2; 
	
	$.ajax({
		type: 'GET',
		url: 'ajax/searchComplete.php',
		data: 'type='+type+'&data='+name,
		success: function(ajaxCevap) 
		{
			if(ajaxCevap=="nodata")
			{
				return false;
			}
			
			$('#wasList').html(ajaxCevap);
			$('#wasList').slideDown();
		}
	});
}

function searchOther(name)
{
	//38 up
	//40 down
	
	if(event.keyCode==38)
	{
		completeArrowUp_wo()
		bs="up";
		return false;
	}
	else if(event.keyCode==40)
	{
		completeArrowDown_wo()
		bs="down";
		return false;
	}
	else if(event.keyCode==27)
	{
		$("#woList").slideUp('fast');
		return false;
	}
	
	var type=0;
	arrowStatus=0;
	arrowFirst=true;
	
	if(name=="" || name==" ")
	{
		$("#woList").slideUp('fast');
		return false;
	}
	
	$.ajax({
		type: 'GET',
		url: 'ajax/searchComplete.php',
		data: 'type=3&data='+name,
		success: function(ajaxCevap) 
		{
			if(ajaxCevap=="nodata")
			{
				return false;
			}
			
			$('#woList').html(ajaxCevap);
			$('#woList').slideDown();
		}
	});
}
					
function signUp()
{
	
	var name=$("#signUp_name").val();
	var userName=$("#signUp_userName").val();
	var adress=$("#signUp_adress").val();
     
	var password=$("#signUp_password").val();
	

	if( name=="" || name==" " || userName=="" || userName==" " || adress=="" || adress==" "  || password=="" || password==" ")
	{
		alert("Please fill in the empty fields")
		return false;
	}
	
		$("#signUptableform").fadeOut('fast');
		
		if(memtype==0)
			$("#signUpResult").fadeIn('fast');
		else
			$("#signUpResult_charges").fadeIn('fast');

								
		$.ajax({
			type: 'POST',
			url: 'ajax/signUp.php',
			data: 'name='+name+'&userName='+userName+'&adress='+adress+'&password='+password,
			success: function(ajaxCevap) 
			{
				
			}
		});	
	}


function signUpStep2()
{
	if($("#paymentType_transfer").is(":checked")==true)
	{
		$("#signUpResult_charges").fadeOut('fast');
		$("#signUpResult").fadeIn('fast');
	}
	else if($("#paymentType_card").is(":checked")==true)
	{
		$("#signUpResult_charges").fadeOut('fast');
		$("#signUpResult_card").fadeIn('fast');
	}
	
}

function sendWebsiteInquiry()
{
	var name=$("#mailform_name").val();
	var adress=$("#mailform_adress").val();
       
	var password=$("#mailform_password").val();
	

	if( name=="" || name==" " || adress=="" || adress==" " || password=="" || password==" " )
	{
		alert("Please fill in the empty fields.")
		return false;
	}
	
		$("#mailform_1").fadeOut("fast",function()
	{
		$("#mailform_2").fadeIn("fast");
		});
		
		$.ajax({
			type: 'POST',
			url: 'ajax/sendWebsiteInquiry.php',
			data: 'name='+name+'&adress='+adress+'&password='+password,
			success: function(ajaxCevap) 
			{
				
			}
		});	
	}


function sendContactInquiry()
{
	var name=$("#mailform2_name").val();
	var adress=$("#mailform2_adress").val();
        var password=$("#mailform2_password").val();
	
	if(name=="" || name==" " || adress=="" || adress==" " || password=="" || password==" " )
	{
		alert("Please fill in the empty fields.")
		return false;
	}
	
		$("#mailform2_1").fadeOut("fast",function()
	{
		$("#mailform2_2").fadeIn("fast");
	         });
		
		$.ajax({
			type: 'POST',
			url: 'ajax/sendContactInquiry.php',
			data: 'name='+name+'&adress='+adress+'&password='+password,
			success: function(ajaxCevap) 
			{
				
			}
		});	
}
	
