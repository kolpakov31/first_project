<?php
require_once"functions.php";

$zapch = array (

    "u_z_id" => $_REQUEST["f_z_id"],
    "u_chelovec" => $_REQUEST["f_chelovec"],
    "u_most" => $_REQUEST["f_most"],
    "u_razd" => $_REQUEST["f_razd"],
    "u_mashina" => $_REQUEST["f_mashina"],
    "u_nasv_zap" => $_REQUEST["f_nasv_zap"],
    "u_har_zap" => $_REQUEST["f_har_zap"],
    "u_teh_har" => $_REQUEST["f_teh_har"],
    "u_ind_n_zap" => $_REQUEST["f_ind_n_zap"],
    "u_coli" => $_REQUEST["f_coli"],
    "u_cena_star" => $_REQUEST["f_cena_star"],
    "u_cena_nov" => $_REQUEST["f_cena_nov"],
    "u_sost" => $_REQUEST["f_sost"],
);
if ($zapch["u_z_id"]) {
    update_zapch($zapch);
} else {
    $zapch["u_z_id"] = new_id();
    insert_new_zapch($zapch);
}

header('Location:list_zapch.php');

//----------------------------------------------------------------------







































