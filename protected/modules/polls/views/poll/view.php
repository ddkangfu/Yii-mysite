<?php
/* @var $this PollController */
/* @var $model Poll */

$this->breadcrumbs=array(
	'Polls'=>array('index'),
	'['.$model->id.'] ' . $model->question,
);
?>

<h1>Vote For: <?php echo $model->question; ?></h1>
[<?php echo $model->pub_date ?>]</br>
<hr />
<form action="/mysite/index.php?r=polls/poll/vote/&id=<?php echo $model->id ?>" method="post">
<?php
	if (isset($error_messsage)){
		echo "<p><strong>$error_message</strong></p>";
	}
	foreach ($model->choices as $choice) {
?>
	<input type="radio" name="choice" id="choice<?php echo $choice->id ?>" value="<?php echo $choice->id ?>" />
	<label for="choice<?php echo $choice->id ?>"><?php echo $choice->choice_text ?></label><br/>
	<li><?php echo $choice->choice_text ?></li>
<?php
	}
?>
<input type="submit" value="Vote" />
</form>