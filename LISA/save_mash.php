<?php
require_once"functions.php";

$mash = array (

    "u_m_id" => $_REQUEST["f_m_id"],
    "u_firm_proiz" => $_REQUEST["f_firm_proiz"],
    "u_mark_mash" => $_REQUEST["f_mark_mash"],
    "u_god_v" => $_REQUEST["f_god_v"],
    "u_ob_dv" => $_REQUEST["f_ob_dv"],
    "u_tip_dv" => $_REQUEST["f_tip_dv"],
    "u_kpp" => $_REQUEST["f_kpp"],
    "u_sb_kpp" => $_REQUEST["f_sb_kpp"],
    "u_mark_kpp" => $_REQUEST["f_mark_kpp"],
    "u_razd" => $_REQUEST["f_razd"],
    "u_sbor_mash" => $_REQUEST["f_sbor_mash"],
    "u_dop_inf" => $_REQUEST["f_dop_inf"],
);
if ($mash["u_m_id"]) {
    update_mash($mash);
} else {
    $mash["u_m_id"] = new_id();
    insert_new_mash($mash);
}

header('Location:list_mash.php');


