<?php
session_start();
// Set session variables with conference id and name
$_SESSION["conference_id"] = $_GET["id"];
$_SESSION["conference_name"] = $_GET["name"];
// Redirect to view_paper_submissions page
header("Location: view_paper_submissions.php");
exit;
?>