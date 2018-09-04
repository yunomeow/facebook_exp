<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>實驗</title>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/jquery.elastic.source.js"></script>
	<script src="js/lab.js"></script>
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
          <a class="navbar-brand" href="#">任務請求文字撰寫實驗</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		<div class="starter-template">

			<div class="page-header"><h1>實驗說明</h1></div>
			<div class="alert alert-warning" role="alert">
			<p>
				感謝您的作答，再來請填寫以下資料。<br>
			</p>
			</div>
			<div class="dataarea">
			<form action="save.php" method="post" id="data" accept-charset="utf-8">
			<input type="hidden" name="response" value="<?php echo addslashes($_POST["input_text"])?>">
			性別：
			<label><input type="radio" name="gender" value="0">男</label>
			<label><input type="radio" name="gender" value="1">女</label>
			<label><input type="radio" name="gender" value="2">其他</label>
			<br><br>
			年齡：
			<label><input type="radio" name="age" value="0">12歲以下</label>
			<label><input type="radio" name="age" value="1">13歲~19歲</label>
			<label><input type="radio" name="age" value="2">20歲~29歲</label>
			<label><input type="radio" name="age" value="3">30歲~39歲</label>
			<label><input type="radio" name="age" value="4">40歲~49歲</label>
			<label><input type="radio" name="age" value="5">50歲~59歲</label>
			<label><input type="radio" name="age" value="6">60歲以上</label>
			
			<br><br>
			教育程度：
			<label><input type="radio" name="education" value="0">國中以下</label>
			<label><input type="radio" name="education" value="1">高中職</label>
			<label><input type="radio" name="education" value="2">大專</label>
			<label><input type="radio" name="education" value="3">碩士</label>
			<label><input type="radio" name="education" value="4">博士</label>
			<br><br>
			最接近您職業的分類為？ <br>
			<label><input type="radio" name="job" value="0">人文（文學、語言、歷史...）</label><br>
			<label><input type="radio" name="job" value="1">自然科學 （心理、物理、化學...)</label><br>
			<label><input type="radio" name="job" value="2">社會學（社會、政治、法律...）</label><br>
			<label><input type="radio" name="job" value="3"> 醫學（醫學、護理、藥學...）</label><br>
			<label><input type="radio" name="job" value="4">工程（電機、軟體、機械...）</label><br>
			<label><input type="radio" name="job" value="5">商管（會計、國貿、財金...）</label><br>
			<label><input type="radio" name="job" value="6">生農（生科、農牧、獸醫...）</label><br>
			<label><input type="radio" name="job" value="7">藝術、媒體（音樂、戲劇、平面設計...）</label><br>
			<label><input type="radio" name="job" value="8">餐飲、零售業</label><br>
			<label><input type="radio" name="job" value="9">教育</label><br>
			<label><input type="radio" name="job" value="10">服務業、公務員</label><br>
			<label><input type="radio" name="job" value="11">學生</label><br>
			<label><input type="radio" name="job" value="12">其他：</label>
			<input type ="text" name="job_other">

 
 
 
  			
			<br><br>
			請問是否有過在Facebook上求助別人的經驗？請舉例說明情境。若無則此題不須作答。
			<textarea placeholder="作答區" name="question" id="question"></textarea>
			<br><br>
			電子郵件信箱(參加抽獎用):
			<input type="email" name="email">
			</form>
			<br>
			</div>
			
			
			
			<hr>
			<div class="btn-container">
				<div class="btn btn-info" onClick="submitForm()">送出資料</div>
			</div>
			<br><br>
		</div>
    </div><!-- /.container -->
</body>
<script>
$( "#question" ).elastic();
</script>
</html>