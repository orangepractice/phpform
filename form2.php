<?php
// 入力データを取得
$action = $_POST[ 'action' ];
$fullname = $_POST[ 'fullname' ];
//$fullname = $_POST[ 'fullname' ];
$fullnamekana = $_POST[ 'fullnamekana' ];
$email = $_POST[ 'email' ];
$tel = $_POST[ 'tel' ];
// デバッグ
echo "<pre>アクション：" . $action . "</pre>";
echo "<pre>名前：" . $fullname . "</pre>";
echo "<pre>かな：" . $fullnamekana . "</pre>";
echo "<pre>メールアドレス：" . $email . "</pre>";
echo "<pre>電話番号：" . $tel . "</pre>";
//exit;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>送信フォーム</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <h2 class="text-center">申し込みフォーム</h2>
        </div>

        <div class="col-md-offset-2 col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                <!-- form -->
                <form id="profileForm" class="form-horizontal" action="./form2.php" method="post">
                    <!-- name -->
                    <div class="form-group">
                        <label class="col-xs-3 control-label">名前</label>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="fullname" value="<?php echo $fullname; ?>" placeholder="山田太郎" />
                        </div>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="fullnamekana" value="<?php echo $fullnamekana; ?>" placeholder="ヤマダタロウ" />
                        </div>
                    </div><!-- /name -->
                    
                    <!-- tel -->
                    <div class="form-group">
                        <label class="col-xs-3 control-label">電話番号</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="tel" value="<?php echo $tel; ?>" placeholder="0311112222" />
                        </div>
                    </div><!-- /tel -->
                    
                    <!-- mail -->
                    <div class="form-group">
                        <label class="col-xs-3 control-label">メールアドレス</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="taro@hoge.com" />
                        </div>
                    </div><!-- /mail -->
                    
                    <!-- submit -->
                    <div class="form-group">
                        <div class="col-xs-6 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary btn-block">送信</button>
                            <input type="hidden" name="action" value="send">
                        </div>
                    </div><!-- /submit -->
                </form><!-- /form -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>