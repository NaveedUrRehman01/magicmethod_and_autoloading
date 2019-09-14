<?php
// this is like calling the second php file;
include 'toString.php';
require 'invoke.php';
trigger_error("user generated ",E_USER_DEPRECATED);
trigger_error("user gerentresd this warning",E_USER_WARNING);
trigger_error("thsi is erroe",E_USER_ERROR);

echo "hello bhai";