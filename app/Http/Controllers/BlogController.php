<?php

namespace inovarlocacoes\Http\Controllers;

use Illuminate\Http\Request;

use inovarlocacoes\Blog;
use inovarlocacoes\Http\Requests;
use inovarlocacoes\Http\Controllers\Controller;

class BlogController extends Controller
{
   private $blog;

    public function __construct(Blog $blog){
        $this->blog = $blog;
    }

    public function index()
    {
        $noticias = $this->blog->orderBy('id','desc')->paginate(10);
        return view('blog.principal',compact('noticias'));
    }


}
