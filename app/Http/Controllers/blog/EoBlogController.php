<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Repositories\blog\EoBlogRepository;
use Illuminate\Http\Request;

class EoBlogController extends Controller
{

    /**
     * @var Request
     */
    protected $request;
    /**
     * @var EoBlogRepository
     */
    protected $repo;

    public function __construct(EoBlogRepository $blogRepository)
    {
        $this->repo = $blogRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        //
        $blogs = $this->repo->getBlog();
        return response()->json($blogs, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function destroy($id)
    {
        //
    }
}
