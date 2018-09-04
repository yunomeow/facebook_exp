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
				系統已收到您的回應<br>
			</p>
			</div>
		</div>
	</div>
<?php
$response = addslashes($_POST["response"]);
$gender = addslashes($_POST["gender"]);
$age = addslashes($_POST["age"]);
$education = $_POST["education"];
$job = $_POST["job"];
$email = $_POST["email"];
$question = addslashes($_POST["question"]);
$job_other = addslashes($_POST["job_other"]);
$Link = mysql_connect('localhost', 'root', 'socialcomputing');
if (!$Link) {
　die(' 連線失敗，輸出錯誤訊息 : ' . mysql_error());
}
mysql_select_db("FacebookExp");//選擇數據庫
mysql_query("set names 'UTF8' ");
$sql = "insert into facebook_gen(response,gender,age,education,job,email,question,job_other) values ('$response','$gender','$age','$education','$job','$email','$question','$job_other')";
mysql_query($sql);//藉SQL語句插入數據

mysql_close($Link);
?>
</body>
</html>