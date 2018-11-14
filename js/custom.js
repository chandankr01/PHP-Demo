// JavaScript Document
function tt()
{
	 var a=document.getElementById("first").value;
	  var b=document.getElementById("last").value;
	   var c=document.getElementById("email").value;
	    var d=document.getElementById("pass").value;
		
		if(a=="")
		{
			alert("ENTER YOUR FIRST NAME");
			  document.getElementById("first").focus();
		}
		else if(b=="")
		{
			 alert("ENTER YOUR LAST NAME");
			  document.getElementById("last").focus();
		}
			else if(c=="")
		{
			 alert("ENTER YOUR EMAIL");
			  document.getElementById("email").focus();
		}
		else if(d=="")
		{
			 alert("ENTER  PASSWORD");
			  document.getElementById("pass").focus();
		}
}