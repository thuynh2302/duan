<div class="row mb">
                <div class="boxtitle">Tài Khoản</div>
                <div class="boxcontent">
                    <form class="formtaikhoan" action="" method="post">
                        <div>
                        Tên đăng nhập <br>
                        <input type="text" name="user" id="">
                        </div>
                    <div>
                        Mật khẩu <br>
                        <input type="password" name="pass" id="">
                    </div>
                        <div>
                            <input type="checkbox" name="" id=""> Ghi nhớ tài khoản ?
                        </div>
                        <div>
                            <input type="submit" value="Đăng nhập">
                        </div>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="#">Đăng ký thành viên</a>
                        </li>
                    </form>
                    
                </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menu_col">
                        <ul>
                            <?php
                            foreach($dsdm as $dm){
                            extract($dm);
                            $linkdm = 'index.php?act=sanpham&iddm='.$id;
                            echo '<li>
                            <a href="'.$linkdm.'">'.$name.'</a>
                            </li>';
                            }
                            ?>
                            <!-- <li>
                                <a href="#">Đồng Hồ</a>
                            </li>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Điện Thoại</a>
                            </li>
                            <li>
                                <a href="#">Balo</a>
                            </li>
                            <li>
                                <a href="#">Balo</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="boxfooter search_box">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" id="" placeholder="Ban can tim kiem san pham">
                            <input type="submit" name="timkiem" id="" value="tim kiem">
                        </form>
                    </div>
                </div>
                <div class="row ">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <?php
                        foreach ($dstop10 as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                            $img = $img_path.$img;
                            echo '<div class="row mb10 top10">
                            <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                    <a href="'.$linksp.'">'.$name.'</a>
                            </div>' ; 
                        }
                        ?>
                    </div>
                </div>
</div>