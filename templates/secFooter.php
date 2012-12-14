<?php

 if(isset($_COOKIE['karnakCookie']))
	{echo "Aaah you are logged in ";}
else
	{echo "No cookies!";}

	?>

<script type="text/javascript">
    $(document).ready(function(){$('.navMenu').hide();});
    
    $('nav').hover(
    function(){$('.navMenu').slideDown('fast', function(){$('nav').css('height', '18%');})},
    function(){$('.navMenu').slideUp('fast', function()  {$('nav').css('height', '07%');})});
     

</script>