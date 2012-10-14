<?php 

function isEmailGood($paramEmail)//uses regexs for pattern matching
{

echo "E-Mail address is: $paramEmail <br />";
$firstPattern = "/^[^@]{1,64}@[^@]{1,255}$/"; //checks for @ symbol, and length

if (!preg_match($firstPattern, $paramEmail, $matches)){return false;}

$EmailName = explode("@", $email);
echo "Split E-Mail name is: $Emailname <br />" 
$EmailDomain = explode("@", $EmailName);
echo "Split E-Mail domain is: $EmailDomain <br />";

else return true;
}



function check_email_address($email) {
// First, we check that there's one @ symbol, 
// and that the lengths are right.
  if (!preg_match("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    // Email invalid because wrong number of characters 
    // in one section or wrong number of @ symbols.
    return false;
  }
// Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
    if
(!preg_match("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&
?'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
$local_array[$i])) {
      return false;
    }
  }
// Check if domain is IP. If not, 
// it should be valid domain name
  if (!preg_match("^\[?[0-9\.]+\]?$", $email_array[1])) {
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if
(!preg_match("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|
?([A-Za-z0-9]+))$",
$domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}







function checkEmail($text) //return boolean value
{

if (!( substr_count($text, '@', 0) === 1))
{echo "@ symbol missing, or too many <br />";return false;}


$splitEmailArray = explode("@", $text);
$emailName = $splitEmailArray[0];
$emailDomain = $splitEmailArray[1];
echo "Split E-Mail name is: $emailName <br />";
echo "Split E-Mail domain is: $emailDomain <br />";

echo strlen($emailName);



//else {return true;}
//WILL COME BACK ONCE REGEX IS MASTERED
}











?>
