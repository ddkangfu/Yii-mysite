<?php
/* @var $this PollController */
/* @var $model Poll */

$this->breadcrumbs=array(
    'Polls'=>array('index'),
    'The Result of Vote : ['.$model->id.'] ' . $model->question,
);
?>

<h1>Vote For: <?php echo $model->question; ?></h1>
[<?php echo $model->pub_date ?>]</br>
<hr />
<ul>
<?php
    foreach ($model->choices as $choice) {
        echo "<li>$choice->choice_text -- $choice->votes ";
        if ($choice->votes > 1)
            echo "votes </li>";
        else 
            echo "vote </li>";
    }
?>
</ul>
<a href="/mysite/index.php?r=polls/poll/view/&id=<?php echo $model->id ?>">Vote again?</a>