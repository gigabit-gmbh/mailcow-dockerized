<?php
require_once "inc/prerequisites.inc.php";

if (isset($_SESSION['mailcow_cc_role']) && ($_SESSION['mailcow_cc_role'] == "admin" || $_SESSION['mailcow_cc_role'] == "domainadmin")) {

    $_SESSION['return_to'] = $_SERVER['REQUEST_URI'];

    echo $twig->render('mailbox.html.twig', array());
    require_once $_SERVER['DOCUMENT_ROOT'] . '/modals/mailbox.php';
?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.inc.php';
} else {
	header('Location: /');
	exit();
}
?>
