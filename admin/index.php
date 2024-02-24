<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";
//Controller
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiểm tra người dùng có click btn add
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm' :
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
                $thongbao = "Xóa thành công";
            }
            $listdanhmuc=loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm' :
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm = loadOne_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            if(isset($dm))  var_dump($dm);
            break;
        case 'updatedm':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc=loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        // controller sanpham
        case 'addsp':
            //kiểm tra người dùng có click btn add
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $filename = $_FILES['hinhsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]); 
                if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($tensp,$giasp,$filename,$mota,$iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadAll_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if(isset($_POST['listOk']) && ($_POST['listOk'])){
                $kyw= $_POST['kyw'];
                $iddm = $_POST['iddm'];
            }else{
                $kyw= '';
                $iddm = 0;
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham($kyw,$iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp' :
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sanpham($_GET['id']);
                $thongbao = "Xóa thành công";
            }
            $listsanpham=loadAll_sanpham("",0);
            include "sanpham/list.php";
            break;
        case 'suasp' :
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sanPham = loadOne_sanpham($_GET['id']);
            }
            $listdanhmuc = loadAll_danhmuc();
            include "sanpham/update.php";
            // if(isset($sanPham))  var_dump($sanPham);
            break;
        case 'updatesp':
            if(isset($_POST['listOk']) && ($_POST['listOk'])){
                $kyw= $_POST['kyw'];
                $iddm = $_POST['iddm'];
            }else{
                $kyw= '';
                $iddm = 0;
            }
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $filename = $_FILES['hinhsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]); 
                if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id,$iddm,$tensp,$giasp,$filename,$mota);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham($kyw,$iddm);
            include "sanpham/list.php";
            break;
        default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}
include "footer.php";

?>