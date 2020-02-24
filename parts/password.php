<?php
include_once('../header.php');

?>
<div id="wrap" class="container">
    
    <div class="tools">
    <h2 style="text-align:center;">随机强密码</h2>
        <form id="" action="" method="post" accept-charset="utf-8">
            <style>
                #text{
                    width: 100%;
                }
            </style>
        <!--<input type="text" name="text" id="text" value="" placeholder="请输入密码位数"/>-->
        <textarea type="text" class="tools" name="text" id="text" value="" placeholder="请输入密码位数"></textarea>
        <button type="submit" name="sub" class="btn btn-success">加密</button>
        <button type="reset" name="sub" class="btn btn-danger">重置</button>
    </form>
    </div>
    <div style="text-align:center;">
        结果：
    </div>
    <p class="tools" style="color:#f05050">
    <?php

        $length = $_POST['text'];

        function get_password( $length ) 
        {
            $str = substr(md5(time()), 0, 6);
            echo $str;
        }
    ?>
    <textarea type="text" class="tools">
        <?php

        $length = $_POST['text'];

        // function get_password( $length ) 
        // {
        //     $str = substr(md5(time()), 0, 6);
        //     echo $str;
        // }
    ?>
    </textarea>
    </p>
    
</div>
    
<?php include_once('../footer.php');?>
