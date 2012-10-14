<?php


$user_id = 'Ozy';
$password = 'Rame';
$last_login = '05/22/2012 23:15:55';

$pw   = $user_id.$password.$last_login;
$len  = strlen($pw)-1;
$hash = "";

echo '<table><tr><th>Iteration</th><th>Hashbefore</th><th>HashAfter</th></tr>';

for($i = 0; $i <= $len; ++$i)
{


	echo '<tr><td>'.$i.'</td><td>'.$hash.'</td>'; 
    $hash = hash('sha512', $hash.$pw[$i]);
	echo '<td>'.$hash.'</td></tr>';
	}


?>

</table>