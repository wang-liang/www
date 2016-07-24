<?php
namespace Model;
use Think\Model;
class CategoryModel extends Model{
	//找一个分类所有子分类的ID
	public function getChildren($catId){
		//取出所有的分类
		$data = $this->select();		
		//递归从所有的分类中挑出子分类
		return $this->_getChildren($data,$catId,TRUE);
	}
	
	//递归从数据中找出所有子分类
	private function _getChildren($data,$catId,$isClear = FALSE){
		static $rec = array();
		if($isClear){
			$rec = array();
		}
		foreach ($data as $k=>$v){
			if($v['parent_id'] == $catId){
				$rec[] = $v['cat_id'];
				//再找这个$v的子分类
				$this->_getChildren($data,$v['cat_id']);
			}
		}
		return $rec;
	}
	//递归函数二、
	//获取分类树形数据
	public function getTree(){
		$data = $this->select();
		return $this->_getTree($data);
	}

	public function _getTree($data,$parent_id=0,$level=0){
		static $rec = array();
		foreach ($data as $k=>$v){
			if($v['parent_id'] == $parent_id){
				$v['level'] = $level;  //用来标记这个分类是第几级的
				$rec[] = $v;
				//找子分类
				$this->_getTree($data,$v['cat_id'],$level+1);
			}
		}
		return $rec;
	}
	
	protected function _before_delete($option){
		//先找出所有子分类的ID
		$children = $this->getChildren($option['where']['id']);
		if($children){
			$children = implode(',',$children); //将数组变为字符串的id
			//删除这些子分类
			//说明：这里必须生成父类的模型然后调用delete，
			//因为如果使用$this调用delete之前又会调用_before_delete钩子方法，这样就出现死循环了
			$model = new \Think\Model();
			$model->table('__CATEGORY__')->delete($children);
		}
	}
}
