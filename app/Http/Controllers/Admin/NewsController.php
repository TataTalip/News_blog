<?php

namespace App\Http\Controllers\Admin;

use App\models\admin\News;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    private $NewsRepository;
    public function __construct()
    {
       // parent::__construct();
        $this->NewsRepository = app(NewsRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countNews = NewsRepository::getCountNews();
        $all_news = $this->NewsRepository->getAllNews(5);
        return view('news.admin.index', compact('countNews','all_news'));
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
      /*  $news = News::find($id);
        if(!$news){
            return abort(404);
        }
        $status = $this->NewsRepository->getStatusAdmin($id);
        $messages = MessageRepository::getMessage($id);
        $mes_count = MessageRepository::getCountMessage($id);
        $images = $this->TasksRepository->getGallery($id);
        return view('vacancy/admin.tasks.show',['task' => $task],compact('task', 'id', 'messages', 'mes_count', 'images', 'status'));*/
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
