<?php
require_once"functions.php";

$razd = array (

    "u_r_id" => $_REQUEST["f_r_id"],
    "u_firm_proiz" => $_REQUEST["f_firm_proiz"],
    "u_mark_razd" => $_REQUEST["f_mark_razd"],
    "u_opis_razd" => $_REQUEST["f_opis_razd"],
);
if ($razd["u_r_id"]) {
    update_razd($razd);
} else {
    $most["u_r_id"] = new_id();
    insert_new_razd($razd);
}

header('Location:list_razd.php');


