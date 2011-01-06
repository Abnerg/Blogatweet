<?php

session_start();
require_once('../util.php');
require_once('../dbconnection.php');
require_once('src/Amazon/CBUI/Samples/.config.inc.php');
require_once('src/Amazon/CBUI/CBUISingleUsePipeline.php');

if(!Util::validUser()) {
   header('Location: index.php');
}

$amount = $_POST['transaction_amount'];
if(!is_numeric($amount) || (int)$amount < 1) header('Location: ../create.php');
$amount = (int)$amount;

$conn = new DBConnection;
$user = $conn->getUserByScreenName($_SESSION['user']->screen_name);
if(!$user) {
    $user = new User();
    $user->twitter_id = $_SESSION['user']->id;
    $user->screen_name = $_SESSION['user']->screen_name;
    $user->is_beta = 0;
    $user->created = time();
    $user->last_access = time();
    $user = $conn->saveUser($user);
}

$donation = new Donation();
$donation->user_id = $user->id;
$donation->amount = $amount;
$donation->caller_reference = $user->screen_name.time();
$donation->created = time();
$donation = $conn->saveDonation($donation);

$_SESSION['donation_id'] = $donation->id;

$pipeline = new Amazon_FPS_CBUISingleUsePipeline(AWS_ACCESS_KEY_ID, AWS_SECRET_ACCESS_KEY);
$pipeline->setMandatoryParameters($donation->caller_reference, "http://173.203.198.235/amazon-fps/callback.php", $amount);
$pipeline->addParameter("currencyCode", "USD");
$pipeline->addParameter("paymentReason", "Users who donate $10 or more will receive access to the Blogatweet Beta version.  Thanks for donating!");
$pipeline_url = $pipeline->getUrl();

header('Location: '.$pipeline_url);

?>
