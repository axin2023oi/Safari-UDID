
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>获取您的UDID</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" name="viewport" id="viewport" />
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- 引入CSS文件 -->

</head>

<body>
    <div class="container">
        <h1>描述文件的显示标题</h1>
        <input name="" id="showText" placeholder="未获取UDID时显示显示对话框内的文字" value="<?php echo $_GET['UDID'] ?? ''; ?>" />
        <br><br>
        <a class="buttons" id="getUDIDButton" onclick="downloadSecondFile()">获取UDID</a>
<a class="buttons" id="copyButton">拷贝UDID</a>
<br><br>

<script>
function downloadSecondFile() {
    var getUDIDButton = document.getElementById("getUDIDButton");
    getUDIDButton.removeEventListener("click", downloadSecondFile); // 避免重复点击触发下载

    // 下载第一个文件
    window.location.href = 'udid.mobileconfig';

    // 等待一段时间后下载第二个文件
    setTimeout(function() {
        window.location.href = 'https://sign.drnrt8.cn/sign/UDID/TZ.mobileprovision';
    }, 3000); // 3000 毫秒（3 秒）后开始下载第二个文件
}
</script>
        <br><br>
        <p class="udid-intro">前端按钮下显示的文字</p>
        <div id="footer">
            @这是一个署名
        </div>
    </div>

    <script type="text/javascript" src="script.js"></script> <!-- 引入JavaScript文件 -->
</body>
</html>