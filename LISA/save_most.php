<?php
require_once"functions.php";

$most = array (

    "u_mt_id" => $_REQUEST["f_mt_id"],
    "u_firm_proiz" => $_REQUEST["f_firm_proiz"],
    "u_locat" => $_REQUEST["f_locat"],
    "u_mark_most" => $_REQUEST["f_mark_most"],
    "u_zyb" => $_REQUEST["f_zyb"],
    "u_metall" => $_REQUEST["f_metall"],
    "u_har_most" => $_REQUEST["f_har_most"],
);
if ($most["u_mt_id"]) {
    update_most($most);
} else {
    $most["u_mt_id"] = new_id();
    insert_new_most($most);
}
header('Location:list_most.php');

