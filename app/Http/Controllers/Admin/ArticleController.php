<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Article;
use App\Http\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    GET|HEAD                               | admin/Article
    public function index()
    {
        $article=(new Article());

        $data=$article->all();

        //调用方法，用方法把我们所需要的树形结构给到数据中
        //$data=$this->getTree($category,'cate_name','cate_id','cate_pid',0);
        return view('admin.article.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//POST                                   | admin/Article
    public function store(Request $request)
    {
        //
        $inp=$request->except('_token');

        $article=Article::create($inp);
        if($article){
            echo 'yes';
            //return redirect('admin/article')->with('msg','A');
        }else{
            echo 'no';
//            return back()->with('msg','B');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//GET|HEAD                               | admin/Article/{Article}
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//GET|HEAD                               | admin/Article/{Article}/edit
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//PUT|PATCH                              | admin/Article/{Article}
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//DELETE                                 | admin/Article/{Article}
    public function destroy($id)
    {
        //
    }
}
