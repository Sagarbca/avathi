<?php


namespace App\Repositories\blog;


use App\Models\blog\EoBlog;

class EoBlogRepository
{
    /**
     * @var EoBlog
     */
    protected $eo_blog;

    public function __construct(EoBlog $eo_blog)
    {
        $this->eo_blog = $eo_blog;
    }

    /**
     * @return mixed
     */
    public function getBlog() {
        $blog =  $this->eo_blog->with('eoImage','eoCardImage')->get();
        return $blog;
    }
}
