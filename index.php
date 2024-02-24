<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "view/header.php";
include "global.php";
$spnew = loadAll_sanpham_home();
$dsdm = loadAll_danhmuc();
$dstop10 = loadAll_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act']!="")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if(isset($_POST['kyw'])&&$_POST['kyw']!=""){
                $kyw = $_POST['kyw'] ;
            }else{
                $kyw =  "" ;
            }
            if(isset($_GET['iddm'])&&$_GET['iddm']>0){
                $iddm  = $_GET['iddm'];
            }else{
                $iddm  = 0;
            }
            $tendm = load_ten_dm($iddm);
            $dssp = loadAll_sanpham($kyw,$iddm);
            include "view/sanpham.php";
            break;      
        case 'sanphamct':
            if(isset($_GET['idsp'])&&$_GET['idsp']>0){
                $onesp = loadOne_sanpham($_GET['idsp']);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($_GET['idsp'],$iddm);
            }else{
                 include "view/home.php";
            }
            include "view/sanphamct.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'gopy':
            include "view/gopy.php";
            break;
        case 'hoidap':
            include "view/hoidap.php";
            break;
        default:
            include "view/home.php";
            break;
    }
}else{
    include "view/home.php";
}
include "view/footer.php";


?>