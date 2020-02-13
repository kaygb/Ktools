<?php 
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 tools-footer">
            &copy; <?php echo Date('Y'); ?>
            <a href="https://github.com/kaygb/Ktools" target="_blank"> Ktools</a> | 
                Powered By <a href="https://kaygb.top" target="_blank">KAYGB</a> | 
                ImagesAPI: <a href="https://www.toubiec.cn/164.html" target="_blank" rel="nofollow">苏晓晴</a> | 
                <span>持续开发中。。。</span><br>
                <?php include_once('config.php');

                if ($ktools_visitor == true){
                    include_once('visitor.php'); 
                }
                ?>
            </div>
        </div>
        
    </div>
    <style>
        .tools-footer{
            /*position: absolute;*/
            /*bottom: 0;*/
            margin-top: 200px;
            text-align: center;
        }
        .tools-footer a{
            color:red;
        }
    </style>

    <script>
    //JS监听设置网站背景
    window.onload = function() {
            setTimeout(function() {
                    
                    document.body.style.background = "url(https://acg.wgb.ink/acgurl.php)";
            }, 2e3);
    }
    </script>
    
    <!--bootstrap4 js-->
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
         
        <!-- bootstrap.bundle.min.js 用于弹窗、提示、下拉菜单，包含了 popper.min.js -->
        <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
         
        <!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--end-bootstrap4 js-->
    <script>
        console.log("在线工具箱-Powerd By KAYGB");
        console.log("加载完成！");
        
    </script>
</body>
</html>