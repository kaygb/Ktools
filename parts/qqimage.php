<?php
include_once('../header.php');

?>
<div id="wrap" class="container">
    <h2 style="text-align:center;">在线QQ头像解析</h2>
    <div class="tools">
        <form id="" action="" method="post" accept-charset="utf-8">
            <style>
                #text{
                    width: 100%;
                }
            </style>
        <!--<input type="text" name="text" id="text" value="" placeholder="请输入内容"/>-->
        <textarea type="text" class="tools" name="text" id="text" value="" placeholder="请输入QQ号"></textarea>
        <button type="submit" name="sub" class="btn btn-success">解析</button>
        <button type="reset" name="sub" class="btn btn-danger">重置</button>
    </form>
    </div>
    <div style="text-align:center;">
        头像：
    </div>
    <p class="tools" style="color:#f05050">
        <?php
    $qq = $_POST['text'];
    if (!empty($_POST['text'])) {
        echo '<img src="'.'http://q1.qlogo.cn/g?b=qq&nk='.$qq.'&s=100&t='. time() .'">';
        echo '<br>链接地址：'.'http://q1.qlogo.cn/g?b=qq&nk='.$qq.'&s=100&t='. time() .'';
        
        exit;
    }else {
        echo "请输入QQ号，将在这里显示结果";
    }
    ?>
    </p>
    
</div>
    
<?php include_once('../footer.php');?>