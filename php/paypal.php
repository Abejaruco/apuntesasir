<?php 
function paypal(){
	$code = '<li>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="R8G8QCCWE4S3L">
<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donate_SM.gif" width="50" height="15" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
<!--<img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">--->
</form>
</li>';
	return $code;
}

?>