<?php


namespace app\Repositories;
use App\Repositories\CoreRepository;
use app\models\admin\News as Model;

class NewsRepository extends CoreRepository
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getModelClass()
    {
        return Model::class;
    }
    public function getAllNews($perpage){
        $news = $this->startConditions()::withTrashed()
            ->leftjoin('users','news.user_id','=','users.id')
            ->select('news.id', 'news.name','news.preview', 'news.user_id','news.data_create', 'users.name as name_user')
            ->groupBy('news.id')
            ->orderBy('news.id')
            ->toBase()
            ->paginate($perpage);
        return $news;
    }
    public static function getCountNews(){
        $count = \DB::table('new_s')
            ->get()
            ->count();
        return $count;
    }
}
