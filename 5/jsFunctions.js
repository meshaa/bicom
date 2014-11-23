function addToWas(value)
{
	$("#wastxtbx").val(value);
	$("#wasList").slideUp('fast');
	
	arrowStatus=0;
	arrowFirst=true;
	bs=null;
}

function addToWo(value)
{
	$("#wotxtbx").val(value);
	$("#woList").slideUp('fast');
	
	arrowStatus=0;
	arrowFirst=true;
	bs=null;
}

var arrowStatus=0;
var arrowFirst=true;
var bs=null;

function completeArrowUp_was()
{
	var liSize=$("#wasList li").size();
	
	if(bs=="down")
	{
		arrowStatus-=2;	
	}

	if(arrowFirst==true)
	{
		arrowStatus=liSize-1;	
	}
	
	if(arrowStatus<0)
	{
		arrowStatus=0;
		arrowFirst=true;
		$("#wasList li").get(arrowStatus).className="";
		return false;
	}
	
	if(arrowStatus!=liSize-1)
		$("#wasList li").get(arrowStatus+1).className="";
		
	$("#wasList li").get(arrowStatus).className="selected";
	
	arrowStatus--;
	arrowFirst=false;

}

function completeArrowDown_was()
{
	var liSize=$("#wasList li").size();
	
	if(bs=="up")
	{
		arrowStatus+=2;	
	}
	
		
	if(arrowStatus==liSize)
	{
		arrowStatus=0;
		$("#wasList li").get(0).className="";
	}

	if(arrowStatus!=0)
		$("#wasList li").get(arrowStatus-1).className="";
		
	if(arrowStatus==0)
		$("#wasList li").get(liSize-1).className="";
		
	$("#wasList li").get(arrowStatus).className="selected";
	
	arrowStatus++;
	arrowFirst=false;

}


function completeArrowUp_wo()
{
	var liSize=$("#woList li").size();
	
	if(bs=="down")
	{
		arrowStatus-=2;	
	}

	if(arrowFirst==true)
	{
		arrowStatus=liSize-1;	
	}
	
	if(arrowStatus<0)
	{
		arrowStatus=0;
		arrowFirst=true;
		$("#woList li").get(arrowStatus).className="";
		return false;
	}
	
	if(arrowStatus!=liSize-1)
		$("#woList li").get(arrowStatus+1).className="";
		
	$("#woList li").get(arrowStatus).className="selected";
	
	arrowStatus--;
	arrowFirst=false;

}

function completeArrowDown_wo()
{
	var liSize=$("#woList li").size();
	
	if(bs=="up")
	{
		arrowStatus+=2;	
	}
	
		
	if(arrowStatus==liSize)
	{
		arrowStatus=0;
		$("#woList li").get(0).className="";
	}

	if(arrowStatus!=0)
		$("#woList li").get(arrowStatus-1).className="";
		
	if(arrowStatus==0)
		$("#woList li").get(liSize-1).className="";
		
	$("#woList li").get(arrowStatus).className="selected";
	
	arrowStatus++;
	arrowFirst=false;
}

function formControl()
{
	var wastxtbx=$("#wastxtbx").val();
	var wotxtbx=$("#wotxtbx").val();

	if((wastxtbx=="" || wastxtbx==" ") && (wotxtbx=="" || wotxtbx==" "))
	{
		alert('Bitte füllen Sie in eine der beiden Optionen.');
		return false;	
	}
}

function openSignUpForm()
{
	$("#signUp").fadeIn();
	$("#overlay").fadeIn();
}




function openContactInquiry()
{	
	$("#contactInquiry").fadeIn();
	$("#overlay").fadeIn();
	$('html, body').animate({scrollTop: 0}, 0);
}

function openSignInForm()
{
	$("#signin").fadeIn();
	$("#overlay").fadeIn();
}


function acceptRules(s)
{ 
	if(s==true)
		$("#sendTo").attr("disabled",false);
	else
		$("#sendTo").attr("disabled",true);
}
