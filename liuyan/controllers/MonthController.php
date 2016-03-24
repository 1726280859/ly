<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Month;
use app\models\ContactForm;
use app\models\Segment;
use yii\data\Pagination ;
class MonthController extends Controller
{
    public function actionIndex()
    {
    	return $this->render("index");
    }
    public function actionSearch(){
    	$request=YII::$app->request;
    	$keyword=$request->get("keyword","");
    	//echo $keyword;die;
    	//因为没有请求模拟一个关键词
        $ret = $keyword;/*

*/

        //关键词去空格
        $ret       = trim($ret);

        //实例化分词类
       $segment   = new Segment();

        //调用分词类库中方法传入关键词做分词操作

        $segment_q = $segment->get_keyword($segment->split_result($ret));
        if (!empty($segment_q)) {
            //将字符串转成数组
            $resarray   = explode(" ",$segment_q);
            //将数组顺序反转
            $resarray   = array_reverse($resarray);
            //将数组转成字符串
            $segment_q  = implode(" ",$resarray);
            $relation_q = str_replace(' ', '%', $segment_q);
        } else {
            $relation_q = $ret;
        }
        //拼写sql模糊搜索
        //$sql    = "select * from month where title like '%$relation_q%' or `describe` like '%$relation_q%' ";
        //echo $sql;die;
       /*
        $connection = \Yii::$app->db;
        $command = $connection->createCommand("select * from month where title like '%$relation_q%' or content like '%$relation_q%' ");
        $posts = $command->queryAll();
        
*/
       $query = Month::find()->where("title like '%$relation_q%' or content like '%$relation_q%' ");
        
        $pages = new Pagination(['totalCount' => $query->count(),'pageSize'=>'2']);
        $posts = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        //print_r($models);die;
        foreach($posts as $k=>$v){
            $posts[$k]['title']=str_replace($segment_q,"<b><font color='red'>$segment_q</font></b>",$posts[$k]['title']);
            $posts[$k]['content']=str_replace($segment_q,"<b><font color='red'>$segment_q</font></b>",$posts[$k]['content']);
        }
        //print_r($posts);die;
        return $this->render("search",array("data"=>$posts,'pages'=>$pages));



    }
}