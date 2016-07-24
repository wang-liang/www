<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		if(IS_POST){
			$model = D('message');
			//$model->add($_POST);DIE;
			if($model->create()){
				if($id = $model->add()){
    				$this->success('添加成功！',U('Index/index'));
    				exit;
    			}
			}
			$this->error($model->getError());
		}
		$catModel = new \Model\CategoryModel();
		$data = $catModel->getTree();
		$this->assign(array(
			'data' => $data,
		));
        $this->display();
    }

	public function edit(){
		if(IS_GET){
			$model = D('message');
			$id = I('get.id');
			//parse_str($_SERVER['QUERY_STRING'],$test);
			//dump($test);die;
			$data = $model->select($id);
			$catModel = new \Model\CategoryModel();
			//取出所有的分类做下拉框
			$catData = $catModel->getTree();
			//取出当前分类的子分类
			$this->assign('catData',$catData);
			$this->assign('data',$data);
			$this->display();
		}
		if(IS_POST){
			$model = D('message');
			if($model->create()){
				if(FALSE !== $model->save()){
    				$this->success('修改成功！',U('home/index/index'));
    				exit;
    			}
			}
			$this->error($model->getError());
		}
    }
}