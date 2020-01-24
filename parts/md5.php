<?php
include_once('../header.php');

?>
<div id="wrap" class="container">
    
    <div class="tools">
    <h2 style="text-align:center;">在线MD5加密</h2>
        <form id="" action="" method="post" accept-charset="utf-8">
            <style>
                #text{
                    width: 100%;
                }
            </style>
        <!--<input type="text" name="text" id="text" value="" placeholder="请输入内容"/>-->
        <textarea type="text" class="tools" name="text" id="text" value="" placeholder="请输入需要加密的内容"></textarea>
        <button type="submit" name="sub" class="btn btn-success">加密</button>
        <button type="reset" name="sub" class="btn btn-danger">重置</button>
    </form>
    </div>
    <div style="text-align:center;">
        加密之后：
    </div>
    <p class="tools" style="color:#f05050">
        <?php
    $str = $_POST['text'];
    if (!empty($_POST['text'])) {
        echo md5($str);
        
        exit;
    }else {
        echo "请输入需要加密的内容，将在这里显示结果";
    }
    ?>
    </p>
    
</div>
    
<?php include_once('../footer.php');?>