<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>任務請求文字撰寫</title>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/jquery.elastic.source.js"></script>
	<script src="js/lab.js"></script>
	<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/site.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">任務請求文字撰寫</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div class="container">
		<div class="page-header"><h1>實驗說明</h1></div>
		<div class="alert alert-warning" role="alert">
		<p>
你好，感謝你來參加我們的實驗。<br>
為了了解一般使用者是如何在Facebook上面發文獲得幫助，<br>
在此有一個任務希望你能想想你會怎麼樣在Facebook上面發文，<br>
吸引你的朋友們來作答。若沒有Facebook的使用經驗者請勿再繼續作答。<br>
本次的任務網址為: <a href="http://goo.gl/J1ERvu" target=_blank>http://goo.gl/J1ERvu</a><br>
是一個圖片語意擷取的任務。<br>
可以先自行進行該任務，幫助你撰寫吸引朋友來做的文字。<br>
接下來請在下方左欄進行文字輸入，輸入的同時，右欄會出現即時預覽。<br>
完成文字輸入後，請像一般在Facebook上面發文一樣，按下發佈將回應送到我們的伺服器上。<br>
最後會請你填寫一些相關的基本資料。<br>
我們還會從有效的回答中抽選10位致贈100元禮券，若中獎者會直接用電子郵件聯絡。<br>
		</p>
		</div>
	</div>
	<hr>
	<div class="warning_block alert alert-warning">
		<img src="Warning.gif" width="100" height="100" />
		此處並非真實的Facebook網頁，按下發佈後只會將回應傳送給我們的伺服器，並不會在您的Facebook上面發文。
	</div>
	<hr>
    <div ng-app="" class="container main_container">
	<form action="page2.php" method="post" id="data" accept-charset="utf-8">
	<table>
		<tr>
		<td><h3>輸入文字處</h3></td>
		<td><h3>輸出預覽圖</h3></td>
		</tr>
		<tr><td>
		<div class="starter-template">
			<div class="input_area">
			<img src="up.png" />
			
				<textarea  placeholder="在想些什麼?" id="input_text" ng-model="facebook_text" wrap="physical" Cols="66" name="input_text"></textarea>
			
			<img src="down.png" usemap="#TestMap"/>
			<map name="TestMap">
			<area shape="rect" coords=" 426 , 8 , 486 , 32 " onClick="submitForm()">
			</map>
			
			<br>
			<br>
			輸入完成後請按發佈繼續下一步。
			</div>
		</div>
		</td>
		<td>
		<div class="input_area has_border">
			<img src="up2.png" />
			<div class="preview_text">
			<div class="angular-with-newlines">{{facebook_text}}</div>


			
			<br>
			詳細任務說明: <a href="http://goo.gl/J1ERvu" target=_blank>http://goo.gl/J1ERvu</a><br>
			</div>
			<img src="down2.png"/>
			
		</div>
		</td>
		</tr>
	</table>
	</form>
    </div><!-- /.container -->
	
</body>
<script>

var text = getParameterByName("text");
if(text != null){
	document.getElementById('input_text').value = text;
}
$( "#input_text" ).elastic();
</script>
</html>