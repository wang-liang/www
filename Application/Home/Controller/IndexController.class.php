<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$model = new \Model\IndexModel('message');
    	/*$data = $model->where(array(
    		'id' => array('eq', $id),
    	))->select();*/
		$data = $model->search();
		$this->assign('data', $data['data']);
		$this->assign('catData', $data['catData']);
		$this->assign('page', $data['page']);
    	$this->display();
    }
	
}