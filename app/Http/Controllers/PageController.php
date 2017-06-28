<?php

namespace App\Http\Controllers;
use View;
use App\Page;
use Illuminate\Http\Request;
use Carbon\Carbon;
//use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Html;
use Purifier;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pages =   Page::first()->get();
      return view('admin.pages.index',['pages' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $page = new Page;
      $page->name = $request->name;
      $page->slug = $request->slug;
      $page->img = $request->img;
    //  $page->description = $request->description;
      $page->description = HTML::entities($request->description);
      $page->save();
      return redirect()->action('PageController@index');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $page = Page::find($id);
      $page->description = clean($page->description);
      return view('admin.pages.show',['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.pages.edit',['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $page = Page::where('id',$id)->first();
      $page->name = $request->name;
      $page->slug = $request->slug;
      $page->img = $request->img;
      $page->description = $request->description;
      $page->save();
      return redirect()->action('PageController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
