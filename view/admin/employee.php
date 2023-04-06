<?php
session_start();
if (!isset($_COOKIE['accountId'])) {
    header('location: ../user/login.php');
}
require_once('../admin/head1.php');
require_once('../admin/leftmenu.php');
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'employee-profile':
            require_once('./employeeProfile.php');
            break;
        case 'listgame':
            require_once('./listgame.php');
            break;
        case 'listaccount':
            require_once('./listaccount.php');
            break;
        case 'authorization':
            require_once('././authorization.php');
            break;
        case 'import':
            require_once('./import.php');
            break;
        case 'statistic':
            require_once('./statistic.php');
            break;
        case 'listgametrash':
            require_once('./listgametrash.php');
            break;
    }
} else {
    require_once('listgame.php');
}
?>
<script src="../../assets/js/leftmenu.js"></script>
<script src="../../assets/js/listGame.js"></script>