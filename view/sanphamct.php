
<div class="row mb ">
    <div class="boxleftmine mr">
        <div class="row mb">
                <?php extract($onesp); ?>
                <div class="row ">
                    <div style="padding: 20px; font-size: larger;" class="boxtitle">
                        <?php echo $name; ?>
                    </div>
                    <div class = ''></div>
                </div>
                <div class="row boxcontent">
                    <?php 
                     $img = $img_path.$img;
                     echo ' <div style="text-align: center;" class = "row mb">
                                <img width = "300px" height = "250px" src = "'.$img.'">
                            </div>';
                     echo $mota;
                    ?>
                </div>
        </div>
        <div class="row mb">
                <div class="row ">
                    <div style="padding: 20px; font-size: larger;" class="boxtitle">
                        Binh Luan
                    </div>
                    <div class="row boxcontent">
      
                    </div>
                
                </div>
        </div>
        <div class="row mb">
                <div class="row ">
                    <div style="padding: 20px; font-size: larger;" class="boxtitle">
                       San Pham Cung Loai
                    </div>
                    <div class="row boxcontent">
                        <?php 
                         foreach ($sp_cung_loai as $sp_same) {
                            # code...
                            extract($sp_same);
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                            echo '<li><a href="'.$linksp.'">'.$name.'</a></li>' ;
                         }
                        ?>
                    </div>
                </div>
        </div>
    </div>
    <div class="boxrightmine">
        <?php include "boxright.php"; ?>
    </div>
</div>