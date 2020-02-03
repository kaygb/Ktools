<?php
include_once('../header.php');

?>
<div id="wrap" class="container">
    
    <div class="tools">
    <h2 style="text-align:center;">微信公众号二维码解析</h2>
        <form id="" action="" method="post" accept-charset="utf-8">
            <style>
                #text{
                    width: 100%;
                }
            </style>
        <!--<input type="text" name="text" id="text" value="" placeholder="请输入内容"/>-->
        <textarea type="text" class="tools" name="text" id="text" value="" placeholder="请输入微信公众号ID"></textarea>
        <button type="submit" name="sub" class="btn btn-success">解析</button>
        <button type="reset" name="sub" class="btn btn-danger">重置</button>
    </form>
    </div>
    <div style="text-align:center;">
        二维码：
    </div>
    <p class="tools" style="color:#f05050">
        <?php
    $weixin = $_POST['text'];
    if (!empty($_POST['text'])) {
        echo '<img src="'.'https://open.weixin.qq.com/qr/code?username='.$weixin.'">';
        echo '<br>链接地址：'.'https://open.weixin.qq.com/qr/code?username='.$weixin.'';
        
        exit;
    }else {
        echo "请输入微信公众号ID，将在这里显示结果";
    }
    ?>
    </p>
    
</div>
    
<?php include_once('../footer.php');?>