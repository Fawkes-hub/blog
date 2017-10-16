<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CategoryController extends CommonController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //GET| admin/post
    //全部分类列表
    public function index()
    {
        //
        $category=(new Category);
        $data=$category->tree();

        //调用方法，用方法把我们所需要的树形结构给到数据中
        //$data=$this->getTree($category,'cate_name','cate_id','cate_pid',0);
        return view('admin.category.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeOrder(){
        $input= Input::all();
        $cate=Category::find($input['cate_id']);
        $cate->cate_order=$input['cate_order'];
        $re=$cate->update();
        if($re){
             $data = [
                'status' => 0,
                'msg' => '分类列表操作成功',
            ];
        }else{
             $data = [
                'status' => 1,
            'msg' => '分类列表操作失败，请稍候重试',
            ];
        }
        return $data;
       // echo $input['cate_order'];
    }

    //GET|HEAD                               | admin/category/create
    //添加分类
    public function create()
    {
        $data = Category::where('cate_pid',0)->get();
        //with传送数据 名data，值为$data
        return view('admin.category.add')->with('data',$data);
                //用下面这种方法传送带数组的数据更加方便
       // return view('admin.category.add',compact(data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //添加分类提交
    //POST                                   | admin/category
    public function store(Request $request)
    {
        $input= Input::except('_token');
//      dd($input);
        //$catagory= new Category;

        $category=Category::create( $input);
        if($category){
            return redirect('admin/category')->with('msg','A');
        }else{
            return back()->with('msg','B');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //GET|HEAD                               | admin/post/{post}
    //显示单个分类信息
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //GET|HEAD                               | admin/post/{post}/edit
    //编辑单个分类
    public function edit($id)
    {
        $cate=Category::find($id);

        $data = Category::where('cate_pid',0)->get();
        return view('admin/category/edit',compact('cate','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //PUT|PATCH                              | admin/post/{post}
    //修改单个分类
    public function update(Request $request, $id)
    {
        $input=$request->except('_token','_method');
        $re=Category::where('cate_id',$id)->update($input);
        if($re){
            return redirect('admin/category');
        }else{
            return back()->with('msg','B');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // DELETE                                 | admin/post/{post}
    //删除单个分类
    public function destroy($id)
    {
        //
       $re=Category::where('cate_id',$id)->delete();
            Category::where('cate_pid',$id)->update(['cate_pid'=>0]);
       if($re){
           $data=[
             'status'=>0,
             'msg' => '分类删除成功',
           ];
       }else{
           $data=[
               'status'=>1,
               'msg' => '删除失败，请稍候重试',
           ];
       }
       return $data;
    }
}
