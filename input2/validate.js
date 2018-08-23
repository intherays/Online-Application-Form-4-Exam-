	
	<script type="text/javascript">


						function num_only()
					{
						var keyASCII = window.event.keyCode;
						var keyValue = String.fromCharCode(keyASCII);
							if (!(keyValue >= '0' && keyValue <= '9'))
								{
							window.event.keyCode=0;
							alert ("please enter numeric value");
								}
					}	
						
						
					function alpha_only()
					{
						var keyASCII = window.event.keyCode;
						var keyValue = String.fromCharCode(keyASCII);
							if (!(keyValue >= 'A' && keyValue <= 'z'))
								{
							window.event.keyCode=0;
							alert ("please enter alpabetic value");
								}
					}	
						
						
					function no_space()
					{
							var keyASCII = window.event.keyCode;
						var keyValue = String.fromCharCode(keyASCII);
							if(keyValue == ' '){
							window.event.keyCode=0;
							alert ("please enter correct value");
								}
					}			
					
									
		
		</script>