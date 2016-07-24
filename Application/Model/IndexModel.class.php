<?php
namespace Model;
use Think\Model;
class IndexModel extends Model
{
	protected $insertFields = array('id','content','cat_id');
	public function search($perPage = 21)
	{
		/*************** 搜索 ******************/
		$where = array();  // 空的where条件
		// 商品名称
		$keywords = I('get.keywords');
		$cat_id = I('get.cat_id');
		if($keywords)
			$where['title'] = array('like', "%$keywords%");  // WHERE goods_name LIKE '%$gn%'
		if($cat_id && $cat_id!==FALSE)
			$where['cat_id'] = array('eq', "$cat_id");
		/*************** 翻页 ****************/
		// 取出总的记录数
		$count = $this->where($where)->count();
		// 生成翻页类的对象
		$pageObj = new \Think\Page($count, $perPage);
		// 设置样式
		$pageObj->setConfig('next', '下一页');
		$pageObj->setConfig('prev', '上一页');
		// 生成页面下面显示的上一页、下一页的字符串
		$pageString = $pageObj->show();
		
		/***************** 排序 *****************/
		/*$orderby = 'id';      // 默认的排序字段 
		$orderway = 'desc';   // 默认的排序方式
		$odby = I('get.id');
		if($odby)
		{
			if($odby == 'id_asc')
				$orderway = 'asc';
		}
		*/
		/************** 取某一页的数据 ***************/
		$data = $this //->order("$orderby $orderway")				  //排序
		->where($where)                                               // 搜索
		->limit($pageObj->firstRow.','.$pageObj->listRows)            // 翻页
		->select();
		//$sql = $this->getlastsql();
		//echo $sql;die;

		/************** 获取分类的数据 ***************/
		$catModel = new \Model\CategoryModel();
		$catData = $catModel->getTree();
		
		/************** 返回数据 ******************/
		return array(
			'data' => $data,  // 数据
			'page' => $pageString,  // 翻页字符串
			'catData' => $catData,
			'keywords' => $keywords,
		);
	}
}