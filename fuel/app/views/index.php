<html>
<body>
<div class="container">

<div class="panel panel-default">
<div class="panel-heading">
<h4>投稿</h4>
</div>
<div class="panel-body">

<!--
ファイルのアップロードがエラー時に、フラッシュセッションのエラーメッセージをコントローラーから受けとる
-->
<?php if(Session::get_flash('uerr')):?>
<p class="alert alert-warning"><?php echo Session::get_flash('uerr');?></p>
<?php endif;?>
 
<!--
投稿が保存されたときのメッセージを表示
-->
<?php if(@$save):?>
<p class="alert alert-success"><?php echo $save;?></p>
<?php endif;?>
 
 
<!--
ファイルアップロードのため、formタグにenctype="multipart/form-data"を指定します。
出力されるhtml
▼
<form enctype="multipart/form-data" method="post" action="http://example.com/bbs" accept-charset="utf-8">
-->
<?php echo Form::open(array('enctype'=>'multipart/form-data','method'=>'post')); ?>
 
<div class="form-group">
<label>ユーザ名</label>
<input type="text" class="form-control" name="name">
</div>
 
<!--
名前が入力されていない場合のエラー表示
-->
<?php if($val->error('name')):?>
<p class="alert alert-warning"><?php echo $val->error('name');?></p>
<?php endif;?>
 
<div class="form-group">
<label>メッセージ</label>
<textarea class="form-control" rows="3" name="message"></textarea>
</div>
 
<!--
メッセージが入力されていない場合のエラー表示
-->
<?php if($val->error('message')):?>
<p class="alert alert-warning"><?php echo $val->error('message');?></p>
<?php endif;?>
 
 
<div class="form-group">
<label>画像アップロード</label>
<?php echo Form::file('upload',array('class'=>'span4')); ?>
 
</div>
<input type="submit" name="submit" value="投稿" class="btn btn-default">
 
<!--
CSRF対策のトークン取得
-->
<?php echo Form::hidden(Config::get('security.csrf_token_key'), Security::fetch_token());?>
 
</form>
</div>
</div>
 
<hr>
 
<!--
モデルから取得した保存済みの投稿データをデータある数だけループ表示します。
-->
<?php foreach ($posts as $post): ?>
 
<div>
	<?php if($post->image):?>
	<img src="/uploads/<?php echo $post->image; ?>" class="img-thumbnail" style="width:300px;">
	<?php endif;?>
	<h4><?php echo $post->name; ?></h4>
	<p><?php echo nl2br($post->message); ?></p>
</div>
<hr>
 
<?php endforeach; ?>
 
 
</div> <!-- /container -->

</body>
	</html>
