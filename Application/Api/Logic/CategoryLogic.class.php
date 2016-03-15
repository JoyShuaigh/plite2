<?php
/**
 * Created by PhpStorm.
 * User: IceLight
 * Date: 15/11/20
 * Time: 上午9:02
 */

namespace Api\Logic;


class CategoryLogic extends \Think\Model{
    public function __construct(){
        $this->Category = M('Category');
    }
    private $Category;

    public function getCategoryList($type){
        $parent = $this->Category->where(array('type'=>$type))->order('id asc')->find();
        $data = $this->Category->where(array('pid'=>$parent['id']))->order('id asc')->select();
        return $data;
    }

}
