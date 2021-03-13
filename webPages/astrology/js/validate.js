//<!--
		
	function validateForm()
		{
			var subem=document.forms["subscribe"]["email"].value
	
			var subem = subem.replace(/^\s+|\s+$/g, '') ;
	 
			if (subem=="")
			{
				alert("Problem on Email!");
				document.getElementById('email').focus();
				return false;
			}
			
			else if (subem=="Email Address")
			{
				alert("Problem on Email!");
				document.getElementById('email').focus();
				return false;
			}
		}
				
//-->