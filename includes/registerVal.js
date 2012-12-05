function isEmailUnique()
{
var data = 'param=ajax&formTxtEmail=' + ($('#em').val());
$.post('classes/valiDateClient.php', data, function(response) {	err(response);});
}

function isSnUnique()
{
var data = 'param=ajax&formTxtUsername=' + ($('#sn').val());
$.post('classes/valiDateClient.php', data, function(response) {	err(response);});
}

function isPassGood()
{
var data = 'param=ajax&formTxtPassword=' + ($('#pass').val());
$.post('classes/valiDateClient.php', data, function(response) {	err(response);});
}


function valEmail()
{
    //return (em.indexOf('@') === -1)  ? true : false
    if ($('#em').val().indexOf('@') === -1)
    { 
      err('Not a valid email');
      emphasize('#em', 0)
      return false; 
    }
    
    else
    {
        isEmailUnique();
        emphasize('#em', 1);

        
    }
}

function valSN()
{
   if (!(/^(\w|-){6,18}$/.exec($('#sn').val())))
       {
         err('Display name must be 6-18 characters.');
         err('Acceptable characters are [A-Z][a-z][0-9][_][-]');
         emphasize('#sn', 0);
         return false;
       }
  else
  {
    isSnUnique();
        
              
              emphasize('#sn', 1);
              return true;

        
  }
}
function valPass()
{
    if ($('#pass').val().length < 6)
    { 
        err('Password must be at least 6 characters');
        emphasize('#pass', 0);
        return false; 
    }
    
    if (!($('#pass').val() === ($('#pass2').val())))
    { 
        err('Passwords don\'t match');
        emphasize('#pass', 0);
        emphasize('#pass2', 0);
        return false;
    }
    
    else
    {
        isPassGood();

                emphasize('#pass', 1);
                emphasize('#pass2', 1);
            
            return true;  
        
    }
}

function emphasize(elem, valBool)
{
    var clss = valBool == 1 ? 'valid' : 'invalid';
    $(elem).fadeOut(100, function(){$(elem).removeAttr('class')});
    $(elem).fadeIn(100, function(){$(elem).addClass(clss)});
}

var log = function(log){console.log(log)};
var err = function(msg){ $('#ValiDiv').html('Client says ' + msg);}

//$('#sbmt').attr('disabled', 'true');
$('#em').change(valEmail);
$('#sn').change(valSN);
$('#pass, #pass2').change(valPass);
