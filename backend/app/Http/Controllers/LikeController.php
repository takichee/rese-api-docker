<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Like;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $liked_id = Like::where('shop_id', $request->shop_id)
            ->where('user_id', $request->user_id)
            ->get('id');
        $liked = Like::find($liked_id);
        if ($liked->isEmpty()) {
            return Like::create($request->all());
        } else {
            Like::where('shop_id', $request->shop_id)
                ->where('user_id', $request->user_id)->delete();
            return 204;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $likes = Like::join('shops', 'likes.shop_id', '=', 'shops.id')
                    ->where('likes.user_id', $user_id)
                    ->orderBy('likes.created_at', 'desc')
                    ->get();

        return $likes;
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
    public function destroy(Request $request)
    {
        // $reservation = Like::findOrFail($id);
        // $reservation->delete();

        $unlike = Like::where('shop_id', '=', $shop_id)
        ->where('user_id', $user_id)->delete();
        
        return 204;
    }
}
