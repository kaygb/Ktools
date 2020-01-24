<?php
include_once('../header.php');

?>
<div id="wrap" class="container">
    <h2 style="text-align:center;">链接地址转换</h2>
    <div class="tools">
        <form id="" action="" method="post" accept-charset="utf-8">
            <style>
                #text{
                    width: 100%;
                }
            </style>
        <textarea type="text" class="tools" name="text" id="text" value="" placeholder="请输入图片链接"></textarea>
        <button type="submit" name="sub" class="btn btn-success">转换</button>
        <button type="reset" name="sub" class="btn btn-danger">重置</button>
    </form>
    </div>
    <div style="text-align:center;">
        头像：
    </div>
    <p class="tools" style="color:#f05050">
        <?php
    $urlgo = $_POST['text'];
    if (!empty($_POST['text'])) {
        echo 'Markdown: ![]('.$urlgo.')';
        echo '<br>';
        echo "HTML: &ltimg src=\"$urlgo\"/&gt";
        echo '<br>';
        echo '<img src="'.$urlgo.'"/>';
        exit;
    }else {
        echo "将链接转换为写作需要的格式";
    }
    ?>
    </p>
    
</div>
    
<?php include_once('../footer.php');?>