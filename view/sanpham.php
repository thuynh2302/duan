
<div class="row mb ">
    <div class="boxleftmine mr">
        <div class="row mb">
                <div class="row ">
                    <div style="padding: 20px; font-size: larger;" class="boxtitle">
                        San Pham : 
                        <strong><?=$tendm?></strong>
                    </div>
                </div>
                <div class="row boxcontent">
                    <?php
                   $i = 0;
                   foreach ($dssp as $sp) {
                       extract($sp);
                       $hinh=$img_path.$img;
                       $linksp = "index.php?act=sanphamct&idsp=".$id;
                       if(($i==2)||($i == 5)||($i == 8)||($i == 11)){
                           $mr = '';
                       }else{
                           $mr = "mr";
                       }
                       echo '<div class="boxsp '.$mr.'">
                               <div class="row imgg">
                               <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                               </div>
                               <p>'.$price.'</p>
                               <a href="'.$linksp.'">'.$name.'</a>
                           </div>' ;
                       $i+=1;
                    }
                    ?>
                </div>
        </div> 
    </div>
    <div class="boxrightmine">
        <?php include "boxright.php"; ?>
    </div>
</div>