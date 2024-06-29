<?php
require_once('../../private/initialize.php');
require_login();
log_out_admin();
redirect_to(url_for('/staff/login.php'));

?>
