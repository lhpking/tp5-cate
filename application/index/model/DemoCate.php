<?php
namespace app\index\model;
use think\Model;
class DemoCate extends Model
{
   public function cate(){
       $cate = $this->select(); //model查询
       return $this->sort($cate); //将查询到的数据排序并且返回给sort控制器
   }

   public function sort($data,$pid=0,$level=0){
        static $arr=array();
        foreach ($data as $k =>$v){
            if($v['pid']==$pid){
                $v['level']=$level;
                $arr[]=$v;
                $this->sort($data,$v['id'],$level+1);
            }
        }
        return $arr;
   }
   public function getchilernid($cateid){ //接受控制器传过来的id
       $cateres = $this->select();
       return $this->_getchilernid($cateres,$cateid);
   }
   public function _getchilernid($cateres,$cateid){
        static $arr = array();
        foreach ($cateres as $k => $v){
            if($v['pid'] == $cateid){
                $arr[] = $v['id'];
                $this->_getchilernid($cateres,$v['id']);
            }
       }
        return $arr;

   }
}