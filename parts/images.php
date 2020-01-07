<?php
include_once('../header.php');
?>
<style>
       body {
            background-image: url(https://acg.toubiec.cn/acgurl?cid=acg&return=ssl);
            /*overflow-y: scroll;*/
            background-repeat: no-repeat; /*不平铺*/
            background-attachment: fixed; /*北景图片固定*/
            background-position: center 0px; /*居中*/
       }
       .header,.footer{
           background: rgba(255,255,255,.8);
           padding: 20px;
       }
       </style>
    <div id="wrap" class="container">
        <div >
            <div class="header">
                <h2>
                    免费图床-KAYGB
                    <!--<small class="text-muted hidden-xs">免费CDN图床 不限流量 无限外链  永久免费</small>-->
                </h2>
            </div>
            <div class="jumbotron" style="background:rgba(255,255,255,.8)">
                <p class="lead">
                    可以直接拖拽图片上传~<br>也支持批量上传哦~
                </p>
    
                <div class="mselector">
                    <input type="file" accept="image/*" multiple="">
                    <button type="button" class="btn btn-lg btn-info">选择本地图片</button>
                    <div class="bodyer">
                        <label><input name="keke" checked="checked" type="radio" value="1688">阿里图床</label>
                        <label><input name="keke" type="radio" value="taobao">淘宝图床</label>
                        <label><input name="keke" type="radio" value="tieba">百度图床</label>
                        <label><input name="keke" type="radio" value="360">360图床</label>
                        <label><input name="keke" type="radio" value="smms">SM.MS图床</label>
                        <label><input name="keke" type="radio" value="sohu">搜狐图床</label>
                        <label><input name="keke" type="radio" value="jd">京东图床</label>
                    </div>
                </div>
    
    
    
                <hr>
    
                <textarea id="url-res-txt" class="form-control" rows="5" placeholder="上传后的图片外链地址将显示在此处哦、下方会同时显示外链地址和预览图。"></textarea>
    
                <!-- 图片预览 -->
                <div class="preview">
                    <br>
                    <hr>
                </div>
            </div>
            <div class="footer">
                本站不做任何上传的图片保存，且上传后无法删除。请自行斟酌使用</p>
            </div>
        </div>
    </div>
    <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('.picurl > input').bind('focus mouseover', function() {
                if (this.value) {
                    this.select()
                }
            });
            $("input[type='file']").change(function(e) {
                imagesUpload(this.files)
            });
            var obj = $('body');
            obj.on('dragenter', function(e) {
                e.stopPropagation();
                e.preventDefault()
            });
            obj.on('dragover', function(e) {
                e.stopPropagation();
                e.preventDefault()
            });
            obj.on('drop', function(e) {
                e.preventDefault();
                imagesUpload(e.originalEvent.dataTransfer.files)
            })
        });

        /**
         * 普通图片上传
         */
        var imagesUpload = function(files) {
            a = $('input:radio:checked').val();
            var flag = 0;
            $('textarea').empty();
            $(files).each(function(key, value) {
                $('.mselector > button')[0].innerHTML = '上传中';

                setTimeout(function() {
                    uurrll = 'https://pic.suo.dog/api/tc.php?type=' + a + '&echo=imgurl'
                    image_form = new FormData();
                    image_form.append("file", value);

                    $.ajax({
                        url: uurrll,
                        type: 'POST',
                        data: image_form,
                        contentType: false,
                        cache: false,
                        processData: false,
                        async: false,
                        success: function(data) {
                            flag++;
                            //var jsonData = JSON.stringify(data)
                            if (typeof(data) == 'string') {
                                imgurl = data
                            } else {
                                imgurl = data.imgurl
                            }

                            //alert(data)
                            $('#url-res-txt').append(imgurl + '\n');
                            $('.mselector > button')[0].innerHTML = '成功 ' + flag + '/' + files.length;

                            // 生成预览图
                            var apc = "<img src='" + imgurl + "' referrerpolicy=\"no-referrer\" /><p>&nbsp;</p>";
                            $('.preview').css('display', 'block');
                            $(".preview>hr").before(apc)


                            if (flag == $("input[type='file']")[0].files.length) {
                                if (typeof imgurl != 'undefined') {
                                    $('.mselector > button')[0].innerHTML = '上传成功'
                                } else {
                                    $('.mselector > button')[0].innerHTML = '上传失败';
                                    $('#url-res-txt').append(data.error_msg + '\n');
                                    alert(data.error_msg)
                                }
                            }

                        },
                        error: function(XMLResponse) {
                            alert("error:" + XMLResponse.responseText);
                        }
                    });

                }, 100);
            })
        };
    </script>

<?php include_once('../footer.php');?>