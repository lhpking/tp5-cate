<?php
namespace app\index\controller;
use think\Model;
use app\index\common\Base;
use think\Request;
use think\Db;
use app\index\model\DemoCate;
class Index extends Base{
    //前置操作
    protected $beforeActionList = [
        'delcate'  =>  ['only'=>'del'],
    ];
    public function index()
    {
        $cate = new DemoCate();
        $res = $cate->cate();
        return $this->fetch('index',['res'=>$res]);

    }
    public function add(){
       $res = Democate::insert([
           'catename' => input('post.catename'),
           'pid' => input('post.pid')
       ]);
       if($res){
           $this->success('添加成功','index');
       } else{
           $this->error('添加失败','index');
       }
    }
    public function del(){
        $res = db::table('demo_cate')->delete(input('get.id'));
        if($res){
            $this->success('删除成功','index');
        }else{
            $this->error('删除失败','index');
        }

    }
    public function delcate(){
        $cate = new DemoCate();
        $cateid = input('get.id');
        $sonids = $cate->getchilernid($cateid);
        if($sonids){
            db('demo_cate')->delete($sonids);
        }
    }
}
