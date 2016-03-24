<?php
use yii\widgets\LinkPager;

?>
<table>
    <?php foreach($data as $k=>$v){
        echo $v['title']."<br/>";
        echo $v['addtime']."<br/>";
        echo $v['content']."<br/><br/>";
    }
    ?>
    
</table>
<?php
 echo LinkPager::widget([
    'pagination' => $pages,
]);
?>