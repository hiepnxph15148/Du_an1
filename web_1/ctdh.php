<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="../web_1/style/thanhtoan.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
}
/* aside{
    margin: auto;
    width: 80%;
} */
/* .menu>ul{
    margin: 15px 50px 10px 220px;
    list-style: none;

} */
/* .menu ul ul{
    position: absolute;
    display: none;
    padding: 10px 0px;
    margin: 0px;
    list-style: none;
    border-radius:3px ;
    background-color: white;
    box-shadow: 0px 3px 3px gray;
} */
/* .ndm{

    width: 160px;
    height: 1px;
    background-color: gray;
    margin-left: 30px;
} */
/* .dmm{
    margin:0px 30px;
} */
/* .menu ul ul a{
    background-color: white;
    
    display: block;
    line-height: 30px;
    color: gray;
    text-decoration: none;
    font-weight: normal;
    padding: 0px 35px;
    
} */
/* .menu>ul>li{
    display: inline-block;
    position: relative;
    padding: 0px 0px;
} */
/* .menu>ul>li>a{
    display: block;
    text-decoration:none ;
    
    color: white;
    padding: 0px 10px;
    line-height: 40px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif; */
/* }.menu>ul>li:hover>ul{
    display: block;
   
} */
/* .item-menu{
    color: white;
    text-decoration: none;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 11px;
    padding: 0px 85px;
    display:inline-block;
}
.tentk{
    font-weight: bold;
    color: white;
}
.gh{
    float: left;
} */
.ngan{
    float: left;
    width: 1px;
    height: 30px;
    margin: -5px 10px;
    background-color: rgb(187, 186, 186);
}
/* .sign{
    margin: 27px 0px;
} */
/* .sign a{
    font-size: 15px;
    font-family: sans-serif;
    color: white;
    margin:10px 10px
} */

table{
    width: 70%;
    margin:auto;
}
.nganvip{
    width: 100%;
    height: 3px;
    background-color: gray;
    /* margin: 10px 0px; */
}
.sl{
    width: 80px;
    border: none;
    text-align: center;
}
.cha td{
    font-family: Arial, Helvetica, sans-serif;
    color:red;
    font-weight: bold;
    padding: 10px 0px;
    text-align:center;
    font-size:18px;
}
td{
    text-align:center;
}
.nganvip2{
    width: 80%;
    margin: auto;
    height:10px;
    background-color: gray;
}

.mmm{
    color: gray;
    font-size:10px;
}.mmmm{
    margin-left:30px;
    color: gray;
    font-size:10px;
}
h5{
    color: gray;
    font-size:20px;
    margin-left:30px;
    font-family: Arial, Helvetica, sans-serif;
}
.nho{
    width: 1.5px;
    height: 100%;
    background-color: gray;
    float: left;
}
.tensp{
    font-weight: bold;
    color:gray;
    font-family: Arial, Helvetica, sans-serif;

}
.giasp{
    font-family: Arial, Helvetica, sans-serif;

}
footer{
    margin-top:150px;
}
.giasp{
    color:red;
    font-weight: bold;
}
.tt{
    color:red;
    font-weight: bold;
}
.dong{
    color:red;
    font-weight: bold;
}
h1{
    text-align:center;
    margin: 50px 0px 70px 0px;
    font-weight:bold;
    color:rgb(255, 217, 1);
}
.messge_vocher{
    color:tomato;
    margin:0px 30px;
    font-style: italic;
}
.chu{
    position: relative;
    /* float:left; */
    bottom: 9px;
    margin:5px 110px 0px 0px 
}
/* footer{
    margin-top: 100px;
    background-color: rgb(211, 210, 210);
    width: 100%;
}
.cot1{
    color: white;
    text-decoration: none;
    display: block;
   padding-left: 100px;
    font-size: 15px;
}
.cot2{
    padding: 15px;
    color: white;
    padding-left:70px;
    font-size: 20px;
    text-decoration: none;
}
.foot{
    display: grid;
    grid-template-columns: 20% 20% 20% 20%;
    padding: 50px;
} */
    </style>
    <script>
        var gia=document.getElementsByClassName("gia");
        var sl=document.getElementsByClassName("sl");
        var tt=document.getElementsByClassName("tt");
        function thanhtien(i){
            tt[i].innerHTML=gia[i].value*sl[i].value
            // tinhtien()
        }

        window.onload=function(){
            for(i=0;i<gia.length;i++){
                tt[i].innerHTML=gia[i].value*sl[i].value;
            }
        }
    </script>
</head>
<body>
<header>
        <div class="pizzaex">
            <img style="width: 12%;" src="picture/footer_logo1.png" alt="">
            <p>Pizza ngon - Gi?? r??? - V???n chuy???n t???n nh??</p>
            <button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Gi??? H??ng
            </button>

            <!-- T??i kho???n -->
            <div class="header__acc">
                <a href="" class="header__acc-link">
                    <i class="fas fa-user header__acc-icon"></i> <br>
                </a>
               
                        <div class="validater">
                            <ul class="validater-list">
                            <?php 
                include 'db.php';
                    if(isset($_SESSION['tentk'])){
                        $tentk=$_SESSION['tentk'];
                        $sqltk="select * from tk where user='$tentk'";
                        $kqtk=$con->query($sqltk)->fetch();
                        if($kqtk['quyen']==1){
                                ?>
                                <li>
                                <a class="validater-item" href="../admin/quanlysp.php">Qu???n L??</a> 
                                </li>
                                                   
                                <?php
                        }
                        ?>
                                <li>
                                    <a href="dangxuat.php" class="validater-item">????ng Xu???t</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                        
                                <?php
                    }else{
                        ?>
                        <!-- <div class="validater">
                            <ul class="validater-list"> -->
                                <li>
                                    <a href="validater-register.php" class="validater-item">????ng K??</a>
                                </li>
                                <li>
                                    <a href="validater-login.php" class="validater-item">????ng nh???p</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                        
                        <?php
                    }
                ?>
               
                        
            <div id="myModal" class="modal">
               
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Gi??? H??ng</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                    <?php 
                    if (isset($_SESSION['tentk'])) {
                    $sqlgh="SELECT * FROM `gio_hang` as gh, tk as tkk, sanpham as sp, size as sz WHERE gh.id_s=sz.id_s AND gh.id_tk=tkk.id_tk AND gh.id_sp=sp.id_sp AND gh.trangthai='0' and tkk.user='$tentk'";
                    $kqgh=$con->query($sqlgh);
                    $total=0;
                    foreach($kqgh as $abc => $gh){
                        ?>
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column"><img width="50" src="picture/<?php echo $gh['anhdd'] ?>" alt="">:<?php echo $gh['tensp'] ?></span>
                            <span class="cart-price cart-header cart-column">
                                <?php
                                    if($gh['id_dm']==1){
                                        ?>  size: <?php echo $gh['ten_size'] ?>
                                        <?php echo number_format($gh['gia_tien'],0,',','.') ?> VND
                                        <?php
                                    }else{
                                        ?>
                                            <?php echo number_format($gh['giasp'],0,',','.')  ?> VND
                                        <?php
                                    }
                                ?></span>
                            <span class="cart-quantity cart-header cart-column">S??? L?????ng: <?php echo $gh['sl'] ?></span>
                        </div>

                        <?php
                        if ($gh['id_dm']==1) {
                            $tong=$gh['gia_tien']*$gh['sl'];
                        }else {
                            $tong=$gh['giasp']*$gh['sl'];
                        }

                        $total += $tong;
                    }
                }else{
                    echo 'MM???i b???n ????ng nh???p ????? th??m s???n ph???m v??o gi??? h??ng c???a m??nh!';
                }
                ?>
                        
                        <div class="cart-items">

                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">T???ng C???ng:</strong>
                            <?php
                                if(isset($_SESSION['tentk'])){
                                    ?>
                                        <span class="cart-total-price"><?php echo number_format($total,0,',','.') ?>VND</span>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-footer">????ng</button>
                        <button type="button" class="btn btn-primary order"><a href="giohang.php?idtk=<?php echo $kqtk['id_tk'] ?>">Thanh To??n</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="../index.php"><p>Trang Ch???</p></a></li>
                <li><a href="blog.php"><p>Blog</p></a></li>
                <li><a href="contact.php"><p>Li??n h????</p></a></li>
                <!-- <li><a href="#"><p>Trang Ch???</p></a></li>
                <li><a href="#"><p>Trang Ch???</p></a></li> -->
                <li class="li_lienhe">
                    <div class="lienhe">
                        <div class="text_lienhe">
                            <span>G???i ??i???n ngay - Ship li???n tay (24/7)</span>
                        </div>
                        <div class="sdt">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <span>(024)36888777</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
<!-- Shopping Cart -->
<h1> Ch??o <?php echo $_SESSION['tentk'] ?></h1>
   <div class="giohang">
        <table method="POST">
        <tr class="cha">
            <td style="width: 100px;"></td>
            <td style="width: 450px;">S???n ph???m</td>
            <td style="width: 200px;">Gi??</td>
            <td style="width: 100px;">S??? l?????ng</td>
            <td style="width: 180px;">T???ng</td>
        </tr>
        <td colspan="6"><div class="nganvip"></div></td>
        <tbody id="tonggiohang">
        <?php
            include 'db.php';
            if(isset($_GET['iddh'])){
            $iddh=$_GET['iddh'];
            $sqlcc="SELECT * FROM don_hang AS dh, gio_hang as gh, tk as tkk, sanpham as sp, size as sz WHERE dh.id_tk=tkk.id_tk AND gh.id_s=sz.id_s AND gh.id_tk=tkk.id_tk AND gh.id_sp=sp.id_sp and trangthai='1' AND gh.oderolds='$iddh' AND gh.oderolds=dh.id_dh";
            $kqcc=$con->query($sqlcc);
            $total1=0;
            foreach($kqcc as $abc =>$dh){
                ?>
                 <tr>
                        <!-- <td><?php echo $dh['id_gh']?></td> -->
                        <td><img width="80" src="picture/<?php echo $dh['anhdd'] ?>" alt=""></td>
                        <td class="tensp"><?php echo $dh['tensp'] ?></td>
                        
                        <td class="giasp">
                            <?php
                                if($dh['id_dm']==1){
                                    echo "Size ".$dh['ten_size'];
                                    echo " : ".number_format($dh['gia_tien'],0,',','.'); echo '??';
                                    ?>
                                        <input type="hidden" class="gia" value="<?php echo $dh['gia_tien']?>">
                                    <?php
                                }else{
                                    echo number_format($dh['giasp'],0,',','.');  echo '??';
                                    ?>
                                        <input type="hidden" class="gia" value="<?php echo $dh['giasp']?>">
                                    <?php
                                }
                            ?>
                        </td>
                        <td><input type="text" class="sl" min="0" value="<?php echo $dh['sl'] ?>" onchange="thanhtien('<?php echo $abc?>')"></td>
                        <td class="tt"><?php if ($dh['id_dm']==1) {
                            echo number_format($tong=$dh['gia_tien']*$dh['sl'],0,',','.') ;
                        }else {
                            echo number_format($tong=$dh['giasp']*$dh['sl'],0,',','.');
                        }?><span class="dong"> ??</span></td>
                 </tr>
        </tbody>
                    <td colspan="6"><div class="nganvip1"><hr></div></td>

                <?php
                if($dh['vocherdh']>0){
                    $giamgia=$dh['vocherdh'];
                    $phantram=100;
                    $vocher = $giamgia/$phantram;
                    $total1 +=$tong;
                }elseif ($dh['vocherdh']==0) {
                    $vocher=0;
                    $total1 +=$tong;
                }
                else {
                    
                }
                
            }
            
        }
        ?>
        <script>
            function Del(name){
               return confirm('B???n c?? mu???n x??a: '+ name + ' kh??ng ?');
            }
        </script>
        <tbody id="tongdon">
            <tr>
                <td colspan="1">Total price</td>
                <td class="tt" colspan="3">
                <?php
                        if($vocher>0){
                            echo "B???n ???????c gi???m 10% t???ng ????n h??ng";
                            echo "<br>";
                        }else {
                            echo "";
                        }
                        ?></span></td>
                <td class="tt" colspan="1">
                    <?php 
                        if($vocher>0){
                            
                            echo number_format($total1,0,',','.'); echo "<br>"; ?><span class="chu">_</span><?php echo "<br>"; 
                            echo number_format(($total1*$vocher),0,',','.');echo "<br>";
                            echo number_format($total1-($total1*$vocher),0,',','.'); 
                        }elseif ($vocher==0) {
                            echo number_format($total,0,',','.');
                        }
                        ?> <span>??</span></td>
            </tr>
        </tbody>
        <!-- <div><button name="btn">Luu</button></div> -->
    </table>
   </div>
    
   


    <footer>
        <img style="width:15%;" src="picture/footer_logo1.png" alt="">
        <h4>C??NG TY TNHH PIZZA EXPRESS VI???T NAM</h4>
        <p>????? ?????t b??nh pizza, vui l??ng li??n h??? t???ng ????i s???: 024.36.888.777</p>
        <p>????? ph???n ??nh ch???t l?????ng d???ch v???, vui l??ng g???i s???: 0989.139.565</p>
        <p>Email: lienhepizzaexpress@gmail.com</p>
        <p>Ch??nh s??ch b???o m???t th??ng tin c?? nh??n</p>
        <p>Ch??nh s??ch ?????i/tr??? s???n ph???m v?? ho??n ti???n</p>
        <p>Ch??nh s??ch thanh to??n</p>
        <img src="picture/footer_line.png" alt="">
        <div class="dia_chi_lien_he">
            <div class="lien_he">
                <img src="picture/so_01.png" alt="">
                <p>107 D3 Ng???c Kh??nh, Ba ????nh</p>
                <a href="#">Xem tr??n b???n ?????</a>
            </div>
            <div class="lien_he">
                <img src="picture/so_02.png" alt="">
                <p>107 D3 Ng???c Kh??nh, Ba ????nh</p>
                <a href="#">Xem tr??n b???n ?????</a>
            </div>
            <div class="lien_he">
                <img src="picture/so_03.png" alt="">
                <p>107 D3 Ng???c Kh??nh, Ba ????nh</p>
                <a href="#">Xem tr??n b???n ?????</a>
            </div>
            <div class="lien_he">
                <img src="picture/so_04.png" alt="">
                <p>107 D3 Ng???c Kh??nh, Ba ????nh</p>
                <a href="#">Xem tr??n b???n ?????
                </a>
            </div>
        </div>
        <img src="picture/20150827110756-dathongbao-e1541406698873.png" alt="" style="margin-top: 20px; margin-bottom: 20px;">
        <p>C??ng ty TNHH Pizza Express Vi???t Nam S??? ??KKD: 0106675108</p>
        <p>?????a Ch???: S??? 352 ???????ng B?????i, P.V??nh Ph??c, Q.Ba ????nh, TP.H?? N???i</p>
        <p>S??? ??i???n tho???i: 02436888777</p>
        <p style="padding-bottom: 50px;">Email: lienhepizzaexpress@gmail.com</p>
    </footer>
    <script src="index.js"></script>
    <script src="thanhtoan.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 
</body>
</html>