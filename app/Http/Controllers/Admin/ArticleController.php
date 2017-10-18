<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Article;
use App\Http\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends CommonController
{

//    GET|HEAD                               | admin/Article
    public function index()
    {
        $data=Article::orderBy('art_id','desc')->paginate(8);

        //dd($data->links());

        //调用方法，用方法把我们所需要的树形结构给到数据中
        //$data=$this->getTree($category,'cate_name','cate_id','cate_pid',0);
        return view('admin.article.index')->with('data',$data);
    }


//GET|HEAD                               | admin/Article/create
    public function create()
    {
        $category=(new Category);
        $data=$category->tree();
        //with传送数据 名data，值为$data
        return view('admin.article.add')->with('data',$data);
        //用下面这种方法传送带数组的数据更加方便
        // return view('admin.category.add',compact(data));
    }



//POST                                   | admin/Article
    public function store(Request $request)
    {
        //
        $inp=$request->except('_token');
        $inp['art_time']=time();
        //dd($inp);
        $article=Article::create($inp);
        if($article){
            //echo 'yes';
            return redirect('admin/article')->with('msg','A');
        }else{

//            return back()->with('msg','B');
        }
    }



//GET|HEAD                               | admin/Article/{Article}
    public function show($id)
    {
        //
    }


//GET|HEAD                               | admin/Article/{Article}/edit
    public function edit($id)
    {
        $art=Article::find($id);
        //为了表示出来自分类和父级分类
        $category=(new Category);
        $data=$category->tree();
        return view('admin/article/edit',compact('art','data'));
    }


//PUT|PATCH                              | admin/Article/{Article}
    public function update(Request $request, $id)
    {
        $req=$request->except('_token','_method');
        //
        $req['art_time']=time();

        $re=Article::where('art_id',$id)->update($req);
        if($re){
            return redirect('admin/article');
        }else{
            return back()->with('msg','B');
        }
    }


//DELETE                                 | admin/article/{article}
    public function destroy($id)
    {
        //
        $re=Article::where('art_id',$id)->delete();
        if($re){
            $data=[
                'status'=>0,
                'msg' => '文章删除成功',
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
