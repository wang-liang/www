<?php
namespace Home\Controller;
use Think\Controller;
class ContentController extends Controller {
    public function content(){
		if(IS_GET){
			$model = D('message');
			$id = I('get.id');
			$data = $model->select($id);
			//dump($data);die;
			$this->assign('data',$data);
			$this->display();
		}
    }
}
