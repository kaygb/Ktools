<?php
// 引入header
include_once('header.php');

function ktool_status(){
    echo "<h3>验证成功,请检查当前浏览器地址和程序获取的地址是否相同</h3>";
    echo "程序获取的地址：".constant("TOOLS_URL");
}

?>

<div id="wrap" class="container">
    <h2 style="text-align:center;">状态监控</h2>
    <div class="tools">
        <form id="" action="" method="post" accept-charset="utf-8">
            <style>
                #text{
                    width: 100%;
                }
            </style>
        <!--<input type="text" name="text" id="text" value="" placeholder="请输入内容"/>-->
        <input type="password" class="tools" name="text" id="text" value="" placeholder="请输入密码"/>
        <button type="submit" name="sub" class="btn btn-success">验证</button>
    </form>
    </div>
    <div class="tools" style="text-align:center;color:#f05050">
        <?php
    $str = $_POST['text'];
    if ($str == constant("STATUS_PASSWORD") ) {
        ktool_status();
        
        exit;
    }
    // else if($str !== constant("STATUS_PASSWORD")) {
    //     echo("验证失败");
    //     exit;
    // }
        else {
        echo "请输入正确的密码";
    }
    ?>
     
    </div>
    
    
</div>
<?php
// 引入footer
include_once('footer.php');
?>