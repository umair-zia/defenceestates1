<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\ad;
class CommentsController extends Controller
{
    public function store(request $request){
        $comment= new Comments();
        $input = $request->all();
        $comment->fullName = request('fullName');
        $comment->email = request('email');
        $comment->msg = request('msg');
        $comment->ad_id = request('postId');
        $comment->save();

        $ad = ad::findOrFail(request('postId'));
        $ads = ad::where('aproved','yes')->orderBy('id','DESC')->limit(3)->get();
        return view('ads.show',['ad' => $ad,'ads'=> $ads] );


    }
}
