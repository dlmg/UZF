<?php /*a:3:{s:59:"D:\phpStudy\WWW\dfsl\application\shop\view\product\add.html";i:1535680593;s:60:"D:\phpStudy\WWW\dfsl\application\shop\view\public\_meta.html";i:1530329592;s:62:"D:\phpStudy\WWW\dfsl\application\shop\view\public\_footer.html";i:1534494266;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/page.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
<style>
	.table-bg thead th {
	     background-color:rgba(255,255,255,0); 
	}
	.bg-1 {
	    background-color:rgba(255,255,255,0);
	}
</style>
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<link href="/static/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
</head>
<style>
    .lbwxq_mImg {
        width: 110px;
        height: 110px;
        border: 1px solid #eee;
        position: relative;
    }

    .lbwxq_mImg img {
        width: 110px;
        height: 110px;
    }


    .big img{
        width: 1000px;
        height: 1000px;
    }

    /*大图*/

    .lbwxq_lImg {
        width: 500px;
        height: 500px;
        position: absolute;
        left: 540px;
        top: 25px;
        display: none;
        overflow: hidden;
    }

    .lbwxq_lImg img {
        width: 1000px;
        height: 1000px;
    }


    .pic {
        display: inline-block;
    }

    .pic img {
        width: 110px;
        height: 110px;
    }
    body,html{
    position: relative;
    }
    .big{
       position: absolute;
        right: 25%;
        top: 120px;
        width: 300px;
        height: 300px;
    }
    .big img{
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>商品管理 <span class="c-gray en">&gt;</span> 添加商品 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <form class="form form-horizontal" id="form-article-add">
            <input type="hidden" name="__token__" value="<?php echo htmlentities(app('request')->token()); ?>" />
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品名称：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" placeholder="商品名称" name="pd_name" style="width:20%">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品品牌：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" placeholder="商品品牌" name="pd_band" style="width:20%">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">生产企业：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" placeholder="生产企业" name="pd_pd_com" style="width:20%">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品价格：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" placeholder="商品价格" name="pd_price" style="width:20%">
                </div>
            </div>       
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品库存：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" placeholder="商品库存" name="pd_inventory" style="width:20%">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">商品销量：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="number" class="input-text" placeholder="商品销量" name="pd_sales" style="width:20%">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品分类：</label>
                <div class="formControls col-xs-8 col-sm-9"> 
                    <span class="select-box" style="width:20%">
                        <select name="ca_id"  class="select">
                            <option value="">选择商品分类</option>
                            <?php if(is_array($ca_list) || $ca_list instanceof \think\Collection || $ca_list instanceof \think\Paginator): $i = 0; $__LIST__ = $ca_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($vo['id']); ?>">┣<?php echo htmlentities($vo['ca_name']); ?></option>
                                    <?php $_result=getChild($vo['id']);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo htmlentities($voo['id']); ?>">┗━<?php echo htmlentities($voo['ca_name']); ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </span>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品型号：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" placeholder="两种不同商品型号请用空格隔开" name="pd_spec" style="width:20%">
                </div>
            </div>
            
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>发货地址：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" placeholder="发货地址" name="pd_place" style="width:20%">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>颜色分类：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" name="pd_color" placeholder="两种不同颜色分类请用空格隔开" style="width:20%">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">快递费：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" placeholder="快递费" name="take_fee" style="width:20%">
                </div>
            </div><div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">保质期：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" placeholder="保质期" name="pd_date" style="width:20%">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">商品描述：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea type="text"  placeholder="商品描述" name="pd_content" style="width:20%" rows="3" cols="18"></textarea>
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品缩略图：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <div style="width:110px;height: 110px;position: relative;display: inline-block; ">
                        <img src="/static/admin/img/head1.jpg" alt="" class="logo" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;">
                        <input type="file" name="file" onchange="eee($(this))" class="input-text" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;opacity: 0;">
                    </div>
                </div>
            </div>
            <div style="display:none" class="ttt">
                <input type="text" name="pd_head_pic" value="">
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品主图：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <div class="pic">
                    </div>
                    <div style="width:110px;height: 110px;position: relative;display: inline-block; ">
                        <img src="/static/admin/img/add0.png" alt="" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;">
                        <input type="file" name="file" onchange="bbb($(this))" class="input-text" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;opacity: 0;">
                    </div>
                </div>
            </div>
            <div style="display:none" class="ttt">
                <input type="text" name="pd_pic[]" value="">
            </div>

            <!-- <div class="row" id="sku">
                
                <div class="row cl sku_item">
                    <label class="form-label col-xs-4 col-sm-2">商品规格：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" name="sku_list[<?php echo htmlentities($i); ?>][]" class="hidden" placeholder="" value="">
                        <div class="col-md-3">
                            <div class="formControls col-xs-12 col-sm-12 col-md-9" style="padding: 0">
                                <input type="text" name="sku_list[<?php echo htmlentities($i); ?>][sku_name]" id="" placeholder="" value="" class="input-text">
                            </div>
                        </div>
                        <div class=" col-md-2">
                            <label class="form-label col-xs-12 col-sm-12 col-md-3" style="text-align: left;padding: 0">价格</label>
                            <div class="formControls col-xs-12 col-sm-12 col-md-9" style="padding: 0">
                                <input type="number" name="sku_list[<?php echo htmlentities($i); ?>][realprice]" id="" placeholder="" value="" class="input-text">
                            </div>
                        </div>
                        <div class=" col-md-2">
                            
                                <button class="btn btn-primary" onclick="return addSku()">添加</button>
                          
                                
                            
                        </div>
                    </div>
                </div>
                
            </div> -->


            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">详细内容：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea id="editor" type="text/plain" style="width:100%;height:400px;" name="pd_detail" >
                    </textarea>
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <button onclick="return add();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 确认提交</button>
                </div>
            </div>
        </form>
    </div>
    <div class="big" >
        <!-- <img src="/static/admin/img/add0.png" /> -->
    </div>
    <script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/static/admin/static/gojs/go.js"></script>
<script type="text/javascript" src="/static/admin/static/qrcodejs-master/qrcode.js"></script>
<script>
	var aa = "<?php echo htmlentities(app('request')->controller()); ?>";
	var bb = "<?php echo htmlentities(app('request')->action()); ?>";
	// console.log(aa+"/"+bb);
</script>


    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
    <script type="text/javascript" src="/static/admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
    <script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
    <script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript">

    $(function() {
        var ue = UE.getEditor('editor');
        
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $list = $("#fileList"),
            $btn = $("#btn-star"),
            state = "pending",
            uploader;

        var uploader = WebUploader.create({
            auto: false,
            // swf: '/static/admin/lib/webuploader/0.1.5/Uploader.swf',
            // 文件接收服务端。
            server: '/static/admin/lib/webuploader/0.1.5/server/fileupload.php',

            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker',

            // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            resize: false,
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/jpg,image/jpeg,image/png'
            }
        });
        uploader.on('fileQueued', function(file) {
            var $li = $(
                    '<div id="' + file.id + '" class="item">' +
                    '<div class="pic-box"><img></div>' +
                    '<div class="info">' + file.name + '</div>' +
                    '<p class="state">等待上传...</p>' +
                    '</div>'
                ),
                $img = $li.find('img');
            $list.html($li);
            // 创建缩略图
            // 如果为非图片文件，可以不用调用此方法。
            // thumbnailWidth x thumbnailHeight 为 100 x 100
            uploader.makeThumb(file, function(error, src) {
                if (error) {
                    $img.replaceWith('<span>不能预览</span>');
                    return;
                }

                $img.attr('src', src);
            }, 100, 100);
        });
        // 文件上传过程中创建进度条实时显示。
        uploader.on('uploadProgress', function(file, percentage) {
            var $li = $('#' + file.id),
                $percent = $li.find('.progress-box .sr-only');

            // 避免重复创建
            if (!$percent.length) {
                $percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo($li).find('.sr-only');
            }
            $li.find(".state").text("上传中");
            $percent.css('width', percentage * 100 + '%');
        });

        // 文件上传成功，给item添加成功class, 用样式标记上传成功。
        uploader.on('uploadSuccess', function(file, response) {
            $('#' + file.id).addClass('upload-state-success').find(".state").text("已上传");
            $('.pd_pic').val(response + getExt(file.name))
        });

        // 文件上传失败，显示上传出错。
        uploader.on('uploadError', function(file) {
            $('#' + file.id).addClass('upload-state-error').find(".state").text("上传出错");
        });

        // 完成上传完了，成功或者失败，先删除进度条。
        uploader.on('uploadComplete', function(file) {
            $('#' + file.id).find('.progress-box').fadeOut();
        });
        uploader.on('all', function(type) {
            if (type === 'startUpload') {
                state = 'uploading';
            } else if (type === 'stopUpload') {
                state = 'paused';
            } else if (type === 'uploadFinished') {
                state = 'done';
            }

            // if (state === 'uploading') {
            //     $btn.text('暂停上传');
            // } else {
            //     $btn.text('开始上传');
            // }
        });

        $btn.on('click', function() {
            if (state === 'uploading') {
                uploader.stop();
            } else {
                uploader.upload();
            }
        });

    });


    function add() {
        $.post('<?php echo url("add"); ?>', $('#form-article-add').serialize()).success(function(data) {
            layer.msg(data.msg);
            if (data.code) {
                setTimeout(function() {
                    location.href = '';
                }, 1000);
            }
        });
        return false;
    }

    function bbb(dada) {
        var data = new FormData();
        data.append('file', dada[0].files[0]);
        var index = layer.load(1, { shade: false }); //0代表加载的风格，支持0-2
        $.ajax({
            url: '<?php echo url("upload"); ?>',
            type: 'POST',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                layer.msg(data.msg);
                if (data.code) {
                    var html1 = '<img src="' + data.data + '"  onmouseover="ccc(this)" onmouseleave="ddd()" alt="">';
                    var html2 = '<input name="pd_pic[]" hidden="hidden" value="'+data.data+'">';
                    console.log(html1);
                    $('.pic').append(html1);
                    $('.ttt').append(html2);
                }
                layer.close(index);
            },
            error: function() {
                layer.close(index);
                layer.msg('上传出错');
            }
        });
    }
    function ccc(data){
        console.log(data);
        var path = $(data).attr('src');
        var html = '<img src="' + path + '" alt="">';
        $('.big').html(html);
        $('.big').show();
        console.log(path);
    }
    function ddd(){
        $('.big').hide();
    }
    function eee(dada) {
        var data = new FormData();
        data.append('file', dada[0].files[0]);
        var index = layer.load(1, { shade: false }); //0代表加载的风格，支持0-2
        $.ajax({
            url: '<?php echo url("upload"); ?>',
            type: 'POST',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                layer.msg(data.msg);
                if (data.code) {
                    $('.logo').attr('src',data.data);
                    $('input[name="pd_head_pic"]').val(data.data);
                }
                layer.close(index);
            },
            error: function() {
                layer.close(index);
                layer.msg('上传出错');
            }
        });
    }

    var i = 10;
// 新增sku
function addSku() {
    i++;
    var html = 
        '<div class="row cl sku_item">' +
            '<label class="form-label col-xs-4 col-sm-2">商品规格：</label>' +
            '<div class="formControls col-xs-8 col-sm-9">' +
                '<div class="col-md-3">' +
                    '<div class="formControls col-xs-12 col-sm-12 col-md-9" style="padding: 0">' +
                        '<input type="text" name="sku_list['+i+'][sku_name]" id="" placeholder="" value="" class="input-text">' +
                    '</div>' +
                '</div>' +
                '<div class=" col-md-2">' +
                    '<label class="form-label col-xs-12 col-sm-12 col-md-3" style="text-align: left;padding: 0">价格</label>' +
                    '<div class="formControls col-xs-12 col-sm-12 col-md-9" style="padding: 0">' +
                        '<input type="number" name="sku_list['+i+'][realprice]" id="" placeholder="" value="0" class="input-text">' +
                    '</div>' +
                '</div>' +
                '<div class=" col-md-2">' +
                    '<label class="form-label col-xs-12 col-sm-12 col-md-3" style="text-align: left;padding: 0">原价</label>' +
                    '<div class="formControls col-xs-12 col-sm-12 col-md-9" style="padding: 0">' +
                        '<input type="number" name="sku_list['+i+'][oldprice]" id="" placeholder="" value="0" class="input-text">' +
                    '</div>' +
                '</div>' +
                '<div class=" col-md-2">' +
                    '<button class="btn btn-danger" onclick="return rmSku(this)">移除</button>' +
                '</div>' +
            '</div>' +
        '</div>';
    $('#sku').append(html);
    return false;
}

// 移除sku
function rmSku(obj, skuid = 0) {
    if (skuid) {
        $.get("<?php echo url('rmSku'); ?>", {skuid:skuid}, function(data){
            console.log(data);
            layer.msg(data.msg);
            if (data.code) {
                $(obj).parent().parent().parent().remove();
            }
        });
    }
    return false;
}

    </script>
</body>

</html>