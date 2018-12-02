<html>
<head>
</head>
<body>
<?php require_once "functions.php";
$jan= '';
$fev= '';
$mar= '';
$apr= '';
$mai= '';
$iun= '';
$iul= '';
$avg= '';
$sen= '';
$okt= '';
$noi= '';
$dek= '';
$id = $_REQUEST["id"];
if ($id) {
    $god = get_client_by_id($id);
    $jan = $god["jan"];
    $fev = $god["fev"];
    $mar = $god["mar"];
    $apr = $god["apr"];
    $mai = $god["mai"];
    $iun = $god["iun"];
    $iul = $god["iul"];
    $avg = $god["avg"];
    $sen = $god["sen"];
    $okt = $god["okt"];
    $noi = $god["noi"];
    $dek = $god["dek"];
}
?>
<form method="post" action="save.php">
    <?php if ($id): ?>
        <input type="hidden" name="f_id" value="<?= $id ?>">
    <?php endif ?>
    <div>
        Январь<input type="text"
                    name="f_jan"
                    value="<?= $jan ?>"
                    placeholder="Введите для января">
    </div>
    <div>
        Февраль: <input type="text"
                        name="f_fev"
                        value="<?= $fev ?>"
                        placeholder="Введите для февраля">
    </div>
    <div>
        Март: <input type="text"
                    name="f_mar"
                    value="<?= $mar ?>"
                    placeholder="Введите для марта">
    </div>
    <div>
        Апрель: <input type="text"
                         name="f_apr"
                         value="<?= $apr ?>"
                         placeholder="Введите для апреля">
    </div>
    <div>
        Май: <input type="text"
                      name="f_mar"
                      value="<?= $mar ?>"
                      placeholder="Введите для марта">
        <div>
            <div>
                Июнь: <input type="text"
                                      name="f_iun"
                                      value="<?= $iun ?>"
                                      placeholder="Введите для июня">
            </div>
            <div>
                Июль: <input type="text"
                                      name="f_iul"
                                      value="<?= $iul ?>"
                                      placeholder="Введите для июня">
            </div>
            Август: <input type="text"
                          name="f_avg"
                          value="<?= $avg ?>"
                          placeholder="Введите для августа">
            <div>
                <div>
                    Сентябрь: <input type="text"
                                          name="f_sen"
                                          value="<?= $sen ?>"
                                          placeholder="Введите для сентябрь">
                </div>
                <div>
                    Октябрь: <input type="text"
                                          name="f_okt"
                                          value="<?= $okt ?>"
                                          placeholder="Введите для октября">
                </div>
                <div>
                    Ноябрь: <input type="text"
                                          name="f_noi"
                                          value="<?= $noi ?>"
                                          placeholder="Введите для ноября">
                </div>
                <div>
                    Декабрь: <input type="text"
                                          name="f_dek"
                                          value="<?= $dek ?>"
                                          placeholder="Введите для декабря">
                </div>

            <div>
                <input type="submit" value="Сохранить">
            </div>
</form>
</body>
</html>