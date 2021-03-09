//<!--
	function validateForm()
		{
			var name=document.forms["contactForm"]["name"].value
			var phone=document.forms["contactForm"]["phone"].value
			var email=document.forms["contactForm"]["email"].value
			var message=document.forms["contactForm"]["message"].value
	
			var name = name.replace(/^\s+|\s+$/g, '') ;
			var phone = phone.replace(/^\s+|\s+$/g, '') ;
			var email = email.replace(/^\s+|\s+$/g, '') ;
			var message = message.replace(/^\s+|\s+$/g, '') ;
	 
			if (name=="")
			{
				alert("Write your name!");
				document.getElementById('name').focus();
				return false;
			}

			else if (name=="name:")
			{
				alert("Write your name!");
				document.getElementById('name').focus();
				return false;
			}

			else if (phone=="")
			{
				alert("Write your phone!");
				document.getElementById('phone').focus();
				return false;
			}
			
			else if (phone=="phone:")
			{
				alert("Write your phone!");
				document.getElementById('phone').focus();
				return false;
			}
	
			var e=document.forms["contactForm"]["email"].value
			var atpos=e.indexOf("@");
			var dotpos=e.lastIndexOf(".");
	
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
			{
				alert("Faulty email!");
				document.getElementById('email').focus();
				return false;
			}

			else if (message=="")
			{
				alert("Write your message!");
				document.getElementById('message').focus();
				return false;
			}
			
			else if (message=="message:")
			{
				alert("Write your message!");
				document.getElementById('message').focus();
				return false;
			}				  
		}		
//-->