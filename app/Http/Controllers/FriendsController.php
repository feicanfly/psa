<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\friend;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FriendsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find()
    {
        $user = Auth::user();
        return view('friends.find');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Requests\FriendRequest $request)
    {
        $user = Auth::user();
        $friend = User::where('phone', '=', $request['phone'])->first();
        //print_r($user->id);exit;
        if ($friend) {
            Friend::create(['user_id' => $user->id, 'friend_user_id' => $friend->id]);
            flash('添加成功', '');
            return redirect('friends.list');
        }else{
            flash('添加失败', '');
            return redirect('/');
        }
    }

    /**
     * friend list
     *
     * @param  
     * @return 
     */
    public function lists()
    {
        $friendList = Friend::where('user_id', Auth::user()->id)
                        ->orderBy('id', 'desc')
                        ->take(10)
                        ->get();

        return view('friends.list', array('friendList' => $friendList));
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
