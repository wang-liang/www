<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function add(){
		//$model = D('category');
		$model = new \Model\CategoryModel();
		if(IS_POST){
			//$model->add($_POST);DIE;
			if($model->create(I('post.'), 1)){
				if($id = $model->add()){
    				$this->success('添加成功！',U('Category/index'));
    				exit;
    			}
			}
			$this->error($model->getError());
		}
		//取出所有的分类做下拉框
    	$catData = $model->getTree();
		// 设置页面中的信息
		$this->assign(array(
			'catData' => $catData,
		));
        $this->display();
    }

	public function edit(){
		$id = I('get.cat_id');
		//$model = D('category');
		$model = new \Model\CategoryModel();
		if(IS_POST){
			if($model->create(I('post.'),2)){
				if(FALSE !== $model->save()){
    				$this->success('修改成功！',U('Category/index'));
    				exit;
    			}
			}
			$this->error($model->getError());
		}
		$data = $model->find($id);
		//取出所有的分类做下拉框
		$catData = $model->getTree();
		//取出当前分类的子分类
		$children = $model->getChildren($id); 
		$this->assign(array(
			'catData' => $catData,
			'data' => $data,
			'children' => $children,
		));
		$this->display();
    }
	//列表页
	public function index(){
		//$model = D('category');
		$model = new \Model\CategoryModel();
		$data = $model->getTree();
		//设置页面信息
		$this->assign(array(
			'data' => $data,
		));
		$this->display();
	}
	
    public function delete(){
    	$model = D('category');
    	if(FALSE !== $model->delete(I('get.cat_id')))
    		$this->success('删除成功！',U('Category/index'));
    	else
    		$this->error('删除失败@原因：'.$model->getError());
    }
}