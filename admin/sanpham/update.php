<?php 
    if(is_array($sanPham)){
        extract($sanPham);
        $idsp = $id;
        $namesp = $name;
    }
    $hinhpath = "../upload/".$img;
        if(is_file($hinhpath)){
            $hinh = "<img src = '".$hinhpath."' width='200' heigth = '100'>";
        }else{
    $hinh  = "none";
    }
    // var_dump($sanPham )
?>
<div class="row">
            <div class="row header">
                <h1>Cập nhật loại hàng hóa</h1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Chọn danh mục <br>
                        <select name="iddm">
                            <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                if($iddm == $id) $s="selected"; else $s = "";
                                echo '<option value = "'.$id.'" '.$s.'>'.$name.'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="row mb10"> 
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" value = "<?=$namesp?>" id="">
                    </div>
                    <div class="row mb10"> 
                        Price <br>
                        <input type="text" name="giasp" value = "<?=$price?>" id="">
                    </div>
                    <div class="row mb10"> 
                        Hình <br>
                        <input type="file" name="hinhsp" id="">
                        <?=$hinh?>
                    </div>
                    <div class="row mb10"> 
                        Mô tả <br>
                        <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$idsp?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
</div>