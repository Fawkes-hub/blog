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
<<<<<<< HEAD
//    GET|HEAD                               | admin/Article
    public function index()
    {
        $article=(new Article());

        $data=$article->all();

        //调用方法，用方法把我们所需要的树形结构给到数据中
        //$data=$this->getTree($category,'cate_name','cate_id','cate_pid',0);
=======
//GET|HEAD                               | admin/article
    public function index()
    {
        //
        $data=Article::all();
        //调用方法，用方法把我们所需要的树形结构给到数据
>>>>>>> origin/master
        return view('admin.article.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
//GET|HEAD                               | admin/Article/create
=======
//GET|HEAD                               | admin/article/create
>>>>>>> origin/master
    public function create()
    {
        $category=(new Category);
        $data=$category->tree();
        //with传送数据 名data，值为$data
        return view('admin.article.add')->with('data',$data);
<<<<<<< HEAD
        //用下面这种方法传送带数组的数据更加方便
        // return view('admin.category.add',compact(data));
=======
>>>>>>> origin/master
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
//POST                                   | admin/Article
    public function store(Request $request)
    {
        //
        $inp=$request->all();
        dd($inp);
=======
//POST                                   | admin/article
    public function store(Request $request)
    {
        //
>>>>>>> origin/master
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
//GET|HEAD                               | admin/Article/{Article}
=======
//GET|HEAD                               | admin/article/{article}
>>>>>>> origin/master
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
<<<<<<< HEAD
//GET|HEAD                               | admin/Article/{Article}/edit
=======
//GET|HEAD                               | admin/article/{article}/edit
>>>>>>> origin/master
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
<<<<<<< HEAD
//PUT|PATCH                              | admin/Article/{Article}
=======
//PUT|PATCH                              | admin/article/{article}
>>>>>>> origin/master
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
<<<<<<< HEAD
//DELETE                                 | admin/Article/{Article}
=======
//DELETE                                 | admin/article/{article}
>>>>>>> origin/master
    public function destroy($id)
    {
        //
    }
}
