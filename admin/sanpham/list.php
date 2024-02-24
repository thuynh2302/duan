<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        *{  
            box-sizing: border-box;
        }
        .formcontent{
        padding: 20px 0px;
        }
        .headerAdmin{
            background-color: rgb(238, 238, 238);
            border: 1px #CCC solid;
            font-size: 2vw;
            color: #666;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .formcontent input[type="text"]{
        width: 100%;
        border: 1px #CCC solid;
        padding: 5px 10px;
        border-radius: 5px;
        }
        .formcontent input[type="submit"]{
        border-radius: 5px;
        padding: 5px 10px;
        background-color: rgb(255, 255, 255);
        border: 1px #CCC solid;
        transition: 0.5s linear;
        }
        .formcontent input[type="submit"]:hover{
        background-color: #ccc;
        }
        .formcontent input[type="reset"]{
        border-radius: 5px;
        padding: 5px 10px;
        background-color: rgb(255, 255, 255);
        border: 1px #CCC solid;
        transition: 0.5s linear;
        }
        .formcontent input[type="reset"]:hover{
        background-color: #ccc;
        }
        .formcontent input[type="button"]{
        border-radius: 5px;
        padding: 5px 10px;
        background-color: rgb(255, 255, 255);
        border: 1px #CCC solid;
        transition: 0.5s linear;
        }
        .formcontent input[type="button"]:hover{
        background-color: #ccc;
        }
        table{
            width: 100%;
            border-collapse: collapse;
        }
        table  th{
            /* width: 10%; */
            padding: 20px;
            background-color: #ccc;
        }
        /* table  th:nth-child(2){
            width: 30%;
            background-color: #ccc;

        }
        table  th:nth-child(3){
            width: 40%;
            background-color: #ccc;
        }
        table  th:nth-child(4){
            width: 20%;
            background-color: #ccc;
        } */
        table td{
            padding: 10px 20px;
            border: 1px #999 solid;
        }
    </style>
</head>
<body>
        <div class="row">
            <div class="row header mb">
                <h1>Quản lý hàng hóa</h1>
            </div>
            <form action="#" method="post">
                        <input type="text" name="kyw" id="">
                            <select name="iddm">
                                <option value="0" selected>All</option>
                                <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value = "'.$id.'">'.$name.'</option>';
                                }
                                ?>
                            </select>
                            <input type="submit" name="listOk" value="GO">
            </form>
            <div class="row formcontent">
                    <div class="row mb10">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã Sản Phẩm</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Hình Sản Phẩm</th>
                                <th>Giá Sản Phẩm</th>
                                <th>Lượt Xem</th>
                                <th></th>
                            </tr>
                            <?php 
                            foreach($listsanpham as $sanpham){
                                extract($sanpham);
                                $suasp = "index.php?act=suasp&id=".$id;
                                $xoasp = "index.php?act=xoasp&id=".$id;
                                $hinhpath = "../upload/".$img;
                                if(is_file($hinhpath)){
                                    $hinh = "<img src = '".$hinhpath."' width='100' heigth = '50'>";
                                }else{
                                    $hinh  = "none";
                                }
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$luotxem.'</td>
                                        <td> 
                                            <a href="'.$suasp.'"><input type="button" value="Sửa"></a> 
                                            <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>
                                        </td>
                                    </tr>';
                            }
                            ?>
                        </table>
                    </div>
                    <div class="row mb10"> 
                        
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </div>
                <?php 
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                ?>
            </div>
        </div>
</body>
</html>