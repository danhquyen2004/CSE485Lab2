<?php
require_once('../tlunews/config/config.php');

require_once APP_ROOT.'/services/UserService.php';

$userService = new UserService();
$userService->getAllUsers();