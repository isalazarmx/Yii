<?php
    class HelloController extends Controller{
        public function actionIndex() {
            $model=  CActiveRecord::model("Users")->findAll();
            $twitter = "@iSalazarMx";
            $this->render("index",array("model"=>$model,"twitter"=>$twitter));
        }
    }
