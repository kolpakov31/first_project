<?php
include_once "connect_db.php";
//--------------------------------------------------------------
function get_client_list()
{
    global $link_lisa;
    $query = pg_query($link_lisa, "select * from client");
    $clients = pg_fetch_all($query, PGSQL_ASSOC);
    return $clients;
}
//--------------------------------------------------------------------------------------------------
function get_phone_list($client_id)

{
    global $link_lisa;
    $result = pg_query($link_lisa, "select * from phone where c_id = '$client_id'");
    $phones= pg_fetch_all($result, PGSQL_ASSOC);
    return $phones;
}
//-------------------------------------------------------------------------------------------------
function get_foto_list($foto_id)
{
    global $link_lisa;
    $result = mysqli_query($link_lisa,"select * from foto where f_id ='$foto_id'");
    $fotos = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $fotos;
}
//--------------------------------------------------------------------------------------------
function get_zapch_list()
{
    global $link_lisa;
    $query = mysqli_query($link_lisa, "select * from zapch");
    $clients = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $clients;
}
//----------------------------------------------------------------------------------------------

function get_mash_list()
{
    global $link_lisa;
    $query = mysqli_query($link_lisa, "select * from mash");
    $clients = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $clients;
}
//-----------------------------------------------------------------------------
function get_most_list()
{
    global $link_lisa;
    $query = mysqli_query($link_lisa, "select * from most");
    $clients = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $clients;
}
//---------------------------------------------------------------------------------------------
function get_razd_list()
{
    global $link_lisa;
    $query = mysqli_query($link_lisa, "select * from razd");
    $clients = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $clients;
}
//----------------------------------------------------------------------------------------
function get_client_by_id($id)
{
    global $link_lisa;
    $query = "select * from client where id = '$id'";
    $result = mysqli_query($link_lisa, $query);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if (count($client) === 1) return $client[0];
    throw new Exception("Нет клиента с id = $id");
}
//---------------------------------------------------------------------------------------
function get_zapch_by_id($z_id)
{
    global $link_lisa;
    $query = "select * from zapch where z_id = '$z_id'";
    $result = mysqli_query($link_lisa, $query);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if (count($client) === 1) return $client[0];
    throw new Exception("Нет клиента с id = $z_id");
}
//-----------------------------------------------------------------------------------------------
function get_mash_by_id($m_id)
{
    global $link_lisa;
    $query = "select * from mash where m_id = '$m_id'";
    $result = mysqli_query($link_lisa, $query);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if (count($client) === 1) return $client[0];
    throw new Exception("Нет клиента с id = $m_id");
}
//-----------------------------------------------------------------------------
function get_most_by_id($mt_id)
{
    global $link_lisa;
    $query = "select * from most where mt_id = '$mt_id'";
    $result = mysqli_query($link_lisa, $query);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if (count($client) === 1) return $client[0];
    throw new Exception("Нет клиента с id = $mt_id");
}
//---------------------------------------------------------------------------------------------
function get_razd_by_id($r_id)
{
    global $link_lisa;
    $query = "select * from razd where r_id = '$r_id'";
    $result = mysqli_query($link_lisa, $query);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if (count($client) === 1) return $client[0];
    throw new Exception("Нет клиента с id = $r_id");
}
//--------------------------------------------------------------------------------------------
function insert_phone($phone)
{
    global $link_lisa;
    $client_id = $phone["client_id"];
    $nomber = $phone["nomber"];
    $comment = $phone["comment"];
    $sql = "insert into phone
      (c_id,nomber,comment) values
      ('$client_id','$nomber','$comment')
    ";
    if (!mysqli_query($link_lisa, $sql)) {
        throw new Exception ("Update error : " . mysqli_error($link_lisa));
    }
}
//------------------------------------------------------------------------------------------
function delete_phone($phone)
{
    $client_id = $phone["client_id"];
    $nomber = $phone["nomber"];

    global $link_lisa;
    $sql = "delete from phone
      where c_id = '$client_id'
      and nomber = '$nomber'
    ";
    if (!mysqli_query($link_lisa, $sql)) {
        throw new Exception ("Update error : " . mysqli_error($link_lisa));
    }
}
//-----------------------------------------------------------------------------------------
function update_client($client)
{
    global $link_lisa;
    $id = $client["u_id"];
    $tip = $client["u_tip"];
    $surname = $client["u_surname"];
    $nam = $client["u_nam"];
    $patr = $client["u_patr"];
    $city = $client["u_city"];
    $dop = $client["u_dop"];
    $dat = $client["u_dat"];
    $query = "update client set
        tip = '$tip',
        surname = '$surname',
        nam = '$nam',
        patr = '$patr',
        city = '$city',
        dop = '$dop',
        dat = '$dat'
        where id = '$id'";
    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Update error : " . mysqli_error($link_lisa));
    }
}
//--------------------------------------------------------------------------------------------
function update_zapch($zapch)
{
    global $link_lisa;
    $z_id = $zapch["u_z_id"];
    $chelovec = $zapch["u_chelovec"];
    $most = $zapch["u_most"];
    $razd = $zapch["u_razd"];
    $mashina = $zapch["u_mashina"];
    $nasv_zap = $zapch["u_nasv_zap"];
    $har_zap = $zapch["u_har_zap"];
    $teh_har = $zapch["u_teh_har"];
    $ind_n_zap = $zapch["u_ind_n_zap"];
    $coli = $zapch["u_coli"];
    $cena_star = $zapch["u_cena_star"];
    $cena_nov = $zapch["u_cena_nov"];
    $sost = $zapch["u_sost"];

    $query = "update zapch set
        most = '$most',
        chelovec = '$chelovec',
        razd = '$razd',
        mashina = '$mashina',
        nasv_zap = '$nasv_zap',
        har_zap = '$har_zap',
        teh_har = '$teh_har',
        ind_n_zap = '$ind_n_zap',
        coli = '$coli',
        cena_star = '$cena_star',
        cena_nov = '$cena_nov',
        sost = '$sost'
        where z_id = '$z_id'";
    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Update error : " . mysqli_error($link_lisa));
    }
}
//--------------------------------------------------------------------------------------------
function update_mash($mash)
{
    global $link_lisa;
    $m_id = $mash["u_m_id"];
    $firm_proiz = $mash["u_firm_proiz"];
    $mark_mash = $mash["u_mark_mash"];
    $god_v = $mash["u_god_v"];
    $ob_dv = $mash["u_ob_dv"];
    $tip_dv = $mash["u_tip_dv"];
    $kpp = $mash["u_kpp"];
    $sb_kpp = $mash["u_sb_kpp"];
    $mark_kpp = $mash["u_mark_kpp"];
    $razd = $mash["u_razd"];
    $sbor_mash = $mash["u_sbor_mash"];
    $dop_inf = $mash["u_dop_inf"];

    $query = "update mash set
        firm_proiz = '$firm_proiz',
        mark_mash = '$mark_mash',
        god_v = '$god_v',
        ob_dv = '$ob_dv',
        tip_dv = '$tip_dv',
        kpp = '$kpp',
        sb_kpp = '$sb_kpp',
        mark_kpp = '$mark_kpp',
        razd = '$razd',
        sbor_mash = '$sbor_mash',
        dop_inf = '$dop_inf'
        
        where m_id = '$m_id'";
    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Update error : " . mysqli_error($link_lisa));
    }
}
//--------------------------------------------------------------------------------------
function update_most($most)
{
    global $link_lisa;
    $mt_id = $most["u_mt_id"];
    $firm_proiz = $most["u_firm_proiz"];
    $locat = $most["u_locat"];
    $mark_most = $most["u_mark_most"];
    $zyb = $most["u_zyb"];
    $metall = $most["u_metall"];
    $har_most = $most["u_har_most"];
    $query = "update most set
        firm_proiz = '$firm_proiz',
        locat = '$locat',
        mark_most = '$mark_most',
        zyb = '$zyb',
        metall = '$metall',
        har_most = '$har_most'
        where mt_id = '$mt_id'";
    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Update error : " . mysqli_error($link_lisa));
    }
}
//--------------------------------------------------------------------------------------------
function update_razd($razd)
{
    global $link_lisa;
    $r_id = $razd["u_r_id"];
    $firm_proiz = $razd["u_firm_proiz"];
    $mark_razd = $razd["u_mark_razd"];
    $opis_razd = $razd["u_opis_razd"];

    $query = "update razd set
        firm_proiz = '$firm_proiz',
        mark_razd = '$mark_razd',
        opis_razd = '$opis_razd'
      
        where r_id = '$r_id'";
    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Update error : " . mysqli_error($link_lisa));
    }
}
//------------------------------------------------------------------------------------------
function insert_new_client($client)
{
    global $link_lisa;
    $id = $client["u_id"];
    $tip = $client["u_tip"];
    $surname = $client["u_surname"];
    $nam = $client["u_nam"];
    $patr = $client["u_patr"];
    $city = $client["u_city"];
    $dop = $client["u_dop"];
    $dat = $client["u_dat"];

    $query = "insert into client (id, tip, surname, nam, patr, city, dop, dat) values ('$id','$tip','$surname','$nam','$patr','$city','$dop','$dat')";
    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Insert error : " . mysqli_error($link_lisa));
    }
}
//-------------------------------------------------------------------------------------------------
function insert_new_zapch($zapch)
{
    global $link_lisa;
    $z_id = $zapch["u_z_id"];
    $chelovec = $zapch["chelovec"];
    $most = $zapch["u_most"];
    $razd = $zapch["u_razd"];
    $mashina = $zapch["u_mashina"];
    $nasv_zap = $zapch["u_nasv_zap"];
    $har_zap = $zapch["u_har_zap"];
    $teh_har = $zapch["u_teh_har"];
    $ind_n_zap = $zapch["u_ind_n_zap"];
    $coli = $zapch["u_coli"];
    $cena_star = $zapch["u_cena_star"];
    $cena_nov = $zapch["u_cena_nov"];
    $sost = $zapch["u_sost"];

    $query = "insert into zapch (z_id, chelovec, most,razd, mashina, nasv_zap, har_zap, teh_har, ind_n_zap, coli,cena_star,cena_nov,sost) values ('$z_id','$chelovec','$most','$razd','$mashina','$nasv_zap','$har_zap','$teh_har','$ind_n_zap','$coli','$cena_star','$cena_nov','$sost')";
    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Insert error : " . mysqli_error($link_lisa));
    }
}
//------------------------------------------------------------------------------------------------
function insert_new_mash($mash)
{
    global $link_lisa;
    $m_id = $mash["u_m_id"];
    $firm_proiz = $mash["u_firm_proiz"];
    $mark_mash = $mash["u_mark_mash"];
    $god_v = $mash["u_god_v"];
    $ob_dv = $mash["u_ob_dv"];
    $tip_dv = $mash["u_tip_dv"];
    $kpp = $mash["u_kpp"];
    $sb_kpp = $mash["u_sb_kpp"];
    $mark_kpp = $mash["u_mark_kpp"];
    $razd = $mash["u_razd"];
    $sbor_mash = $mash["u_sbor_mash"];
    $dop_inf = $mash["u_dop_inf"];

    $query = "insert into mash (m_id, firm_proiz, mark_mash, god_v, ob_dv, tip_dv, kpp, sb_kpp,mark_kpp,razd,sbor_mash,dop_inf) values ('$m_id','$firm_proiz','$mark_mash','$god_v','$ob_dv','$tip_dv','$kpp','$sb_kpp','$mark_kpp','$razd','$sbor_mash','$dop_inf')";
    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Insert error : " . mysqli_error($link_lisa));
    }
}
//----------------------------------------------------------------------------------------------
function insert_new_razd($razd)
{
    global $link_lisa;
    $r_id = $razd["u_r_id"];
    $firm_proiz = $razd["u_firm_proiz"];
    $mark_razd = $razd["u_mark_razd"];
    $opis_razd = $razd["u_opis_razd"];

    $query = "insert into razd (r_id, firm_proiz, mark_razd, opis_razd) values ('$r_id','$firm_proiz','$mark_razd','$opis_razd')";
    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Insert error : " . mysqli_error($link_lisa));
    }
}
//----------------------------------------------------------------------------------------------
function insert_new_most($most)
{
    global $link_lisa;
    $mt_id = $most["u_mt_id"];
    $firm_proiz = $most["u_firm_proiz"];
    $locat = $most["u_locat"];
    $mark_most = $most["u_mark_most"];
    $zyb = $most["u_zyb"];
    $metall = $most["u_metall"];
    $har_most = $most["u_har_most"];

    $query = "insert into most (mt_id, firm_proiz, locat, mark_most, zyb, metall, har_most) values ('$mt_id','$firm_proiz','$locat','$mark_most','$zyb','$metall','$har_most')";
    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Insert error : " . mysqli_error($link_lisa));
    }
}
//--------------------------------------------------------------------------------------------------------
$letters1 = 'abcdefghijklmnopqrstuvwxyz';
$letters2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$letters3 = '0123456789';
$lettersAll = $letters1 . $letters2 . $letters3;
function new_id()
{
    global $lettersAll;
    $ret = '';
    for ($i = 0; $i < 10; $i++) {
        $rndIndex = rand(0, strlen($lettersAll) - 1);
        $c = substr($lettersAll, $rndIndex, 1);
        $ret = $ret . $c;
    }
    return $ret;
}
//------------------------------------------------------------------------------------------
function delete_client_by_id($id)
{
    global $link_lisa;

    $query = "delete from client where id = '$id'";

    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Delete error : " . mysqli_error($link_lisa));
    }
}
//-------------------------------------------------------------------------------------------
function delete_zapch_by_id($z_id)
{
    global $link_lisa;

    $query = "delete from zapch where z_id = '$z_id'";

    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Delete error : " . mysqli_error($link_lisa));
    }
}
//---------------------------------------------------------------------------------------------
function delete_mash_by_id($m_id)
{
    global $link_lisa;

    $query = "delete from mash where m_id = '$m_id'";

    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Delete error : " . mysqli_error($link_lisa));
    }
}
//---------------------------------------------------------------------------------------------
function delete_most_by_id($mt_id)
{
    global $link_lisa;

    $query = "delete from most where mt_id = '$mt_id'";

    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Delete error : " . mysqli_error($link_lisa));
    }
}
//----------------------------------------------------------------------------------------------
function delete_razd_by_id($r_id)
{
    global $link_lisa;

    $query = "delete from razd where r_id = '$r_id'";

    if (!mysqli_query($link_lisa, $query)) {
        throw new Exception ("Delete error : " . mysqli_error($link_lisa));
    }
}
//-----------------------------------------------------------------------------------------------
function load_phone_list($client_id, $nomber)
{
    global $link_lisa;

    $sql = "select * from phone where c_id = '$client_id' and nomber = '$nomber'";

    $query = mysqli_query($link_lisa, $sql);

    $phone_list = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if (count($phone_list) === 0) {
        throw new Exception ("No such fonq: client_id = $client_id, nomber = $nomber");
    }

    return $phone_list[0];
}
//------------------------------------------------------------------------------------------