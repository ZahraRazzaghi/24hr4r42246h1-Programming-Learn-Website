<?php
function logout{
echo n12br("<p>welcome ".$_SESSION['username']."!\nLooking good today!</p>
<form action='/index.php' method='Get'>
<input type='submit' value='Logout'/></form>");
}
?>