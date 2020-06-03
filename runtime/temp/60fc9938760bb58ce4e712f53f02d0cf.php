<?php /*a:3:{s:60:"D:\phpStudy\WWW\szsc\application\admin\view\user\detail.html";i:1534500543;s:61:"D:\phpStudy\WWW\szsc\application\admin\view\public\_meta.html";i:1530329592;s:63:"D:\phpStudy\WWW\szsc\application\admin\view\public\_footer.html";i:1530790557;}*/ ?>
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
<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>会员管理 <span class="c-gray en">&gt;</span> 会员详情 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-article-add">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">ID：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <p type="text" class="input-text"  style="width:24%"><?php echo htmlentities($info['id']); ?></p>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">头像：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div style="width:110px;height: 110px;position: relative;display: inline-block; ">
                    <?php if($info['us_head_pic']): ?>
                        <img src="<?php echo htmlentities($info['us_head_pic']); ?>" class="logo" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;">
                    <?php else: ?>
                        <img src="/static/admin/img/add0.png" class="logo" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">账户名：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <p type="text" class="input-text"  style="width:24%"><?php echo htmlentities($info['us_account']); ?></p>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">昵称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <p type="text" class="input-text" style="width:24%"><?php echo htmlentities($info['us_nickname']); ?></p>
            </div>
        </div>        
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">推荐人(手机号)：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <p type="text" class="input-text" style="width:24%"><?php echo htmlentities($info['us_pid_text']); ?></p>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">手机号码：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <p type="text" class="input-text" style="width:24%"><?php echo htmlentities($info['us_tel']); ?></p>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">姓名：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <p type="text" class="input-text" style="width:24%"><?php echo htmlentities($info['us_name']); ?></p>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">身份证号：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <p type="text" class="input-text" style="width:24%"><?php echo htmlentities($info['us_id_card']); ?></p>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">银行名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <p type="text" class="input-text" style="width:24%"><?php echo htmlentities($info['us_bank']); ?></p>
            </div>
        </div>
        
       
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">身份证正面：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div style="width:300px;height: 188px;position: relative;display: inline-block; ">
                    <?php if($info['us_card_front_pic']): ?>
                        <img src="<?php echo htmlentities($info['us_card_front_pic']); ?>" class="logo" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;">
                    <?php else: ?>
                        <img src="/static/admin/img/add1.png" class="logo" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">身份证背面：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div style="width:300px;height: 188px;position: relative;display: inline-block; ">
                    <?php if($info['us_card_reverse_pic']): ?>
                        <img src="<?php echo htmlentities($info['us_card_reverse_pic']); ?>" class="logo" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;">
                    <?php else: ?>
                        <img src="/static/admin/img/add1.png" class="logo" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">申请分类：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <p type="text" class="input-text" style="width:24%"><?php echo htmlentities($info['us_ca_name_text']); ?></p>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">所在地区：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <p type="text" class="input-text" style="width:24%"><?php echo htmlentities($info['us_addr_addr']); ?></p>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">申请理由：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <p type="text" class="input-text" style="width:24%"><?php echo htmlentities($info['us_reason']); ?></p>
            </div>
        </div>
	</form>
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
<?php if(app('session')->get('admin.id') != '1'): ?>
	<script type="text/javascript">
	var nodeData = [<?php echo htmlentities(app('session')->get('rules')); ?>];
	$('.rule_node').addClass('hidden');
	$.each(nodeData, function (index, value) {
		$('.sidebar').find('li[data-node-id="' + value + '"]').removeClass('hidden');
		$('.sidebar').find('dt[data-node-id="' + value + '"]').removeClass('hidden');
	});
	</script>
<?php endif; ?>


<!--请在下方写此页面业务相关的脚本-->

<script type="text/javascript">

function savePro(){
    $.post('<?php echo url("edit"); ?>',$('#form-article-add').serialize()).success(function(data){
    	layer.msg(data.msg);
    	if(data.code){
    		setTimeout(function(){
    			location.href = data.url;
    		},500);
    	}
    });
    return false;
}
function eee(dada) {
        var data = new FormData();
        data.append('file', dada[0].files[0]);
        var index = layer.load(1, { shade: false }); //0代表加载的风格，支持0-2
        $.ajax({
            url: '<?php echo url("store/upload"); ?>',
            type: 'POST',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                layer.msg(data.msg);
                if (data.code) {
                    $('.logo').attr('src',data.data);
                    $('input[name="us_head_pic"]').val(data.data);
                }
                layer.close(index);
            },
            error: function() {
                layer.close(index);
                layer.msg('上传出错');
            }
        });
    }
</script>
</body>
</html>