<?php
error_reporting (E_ALL);
function my_error_handler ($e_number,$e_message)
{
 $message = 'An error occurred in script ' . __FILE__ . 'on line' . __LINE__ . ": $e_message";
Production (send email)
echo '<font color="red" size="+1">',$message, '</font>';
}
set_error_handler('my_error_handler');
?>