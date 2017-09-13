<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function search(Request $request, $query = null){

        $q = Input::get ( 'q' );
        $post = Post::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'body', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $post ) > 0)
            return view ( 'search' )->withDetails ( $post )->withQuery ( $q );
        else
            return view ( 'search' )->withDetails ( $post )->withQuery ( $q );

    }
}
