<?php
require_once('../tlunews/config/config.php');

require_once APP_ROOT.'/services/CategoryService.php';

$categoryService = new CategoryService();
$categoryService->getAllCategory();