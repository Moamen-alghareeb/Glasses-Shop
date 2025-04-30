<?php
session_start();
require_once "vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as DB;

try {
$id = (isset($_GET['id']) && is_numeric($_GET["id"])) ? (int ) $_GET["id"] :0;
$page = isset($_GET["page"]) ? (int) $_GET["page"] :1;
$page = max(1, $page);
$search = $_GET['search'] ?? null;

$sqlHandlerObj = new MySqlHandler(items_table);
if(!$sqlHandlerObj->connect()){
    throw new Exception("Database connection failed !!");
}

if($id == 0){
    if(!empty($search)){
        $sqlHandlerObj->search($search, per_page, $page);
    }
    else{
        if(isset($_SESSION['search_term']))
        unset($_SESSION['search_term']);
        $sqlHandlerObj->get_data(per_page,$page);
    }
}
else{
    $sqlHandlerObj->get_record_by_id($id);
}
} catch (Exception $e) {
    error_log($e->getMessage());
    die("An error occurred. Please try again later.");
}


?>