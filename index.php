<?php
require_once(lib/limonade.php);
session_start();
layout('layout/main.html.php');
dispatch('/', 'page_index');
?>
