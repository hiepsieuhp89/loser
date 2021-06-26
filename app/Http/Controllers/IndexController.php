<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Cookie;
use App\Models\User;
use App\Models\Document;
use App\Models\Statistic;
use App\Models\Message;
class IndexController extends Controller
{
    public function index(Request $request){

        if (empty(session_id())) {
            session_start();
        }
        $statistic = Statistic::first();
        Statistic::first()->update(['visits_count' => $statistic->visits_count + 1]);

        $messages = Message::all();
        $data = $this->getData();

        return view('index',[
            'data' => $data,
            'messages' => $messages,
        ]);
    }
    public function RNGC(){
        $statistic = Statistic::first();
        return Statistic::first()->update(['generating_number_count' => $statistic->generating_number_count + 1]);
    }
    public function TDU(Request $req){
        $todo = $req->all();

        $data = json_decode(Cookie::get('data'),true);

        $data['todo'] = $todo;

        $e = json_encode($data);

        Cookie::queue('data', $e, 999999);

        return true;
    }
    public function PDP(Request $req){
        $data = $req->all();
        $document = new Document();
        $document->category_id = 9999;
        $document->name = $data['title'];
        $document->title = $data['title'];
        $document->content = $data['content'];
        $document->status = 0;
        $document->save();
        return true;
    }
    public function SU(Request $req)
    {
        $todo = $req->all();

        $data = json_decode(Cookie::get('data'), true);

        $data['setting']['theme'] = $todo['theme'];

        $e = json_encode($data);

        Cookie::queue('data', $e, 999999);

        return true;
    }
    public function UU(Request $req)
    {
        $old = ($req->all())['old'];

        $username = ($req->all())['username'];

        if(count(User::where('username', $username)->get()) == 0){

            $user = count(User::where('username', $old)->get()) > 0 ? User::where('username', $old)->first() : new User();

            $user->username = $username;

            $user->save();

            Message::where('from', $old)->update(['from'=> $username]);

            $data = json_decode(Cookie::get('data'), true);

            $data['user_id'] = $username;

            $e = json_encode($data);

            Cookie::queue('data', $e, 999999);

            return response(['status' => true]);
        }

        return response(['status' => false]);
    }
    public function getData(){
        if (Cookie::get('data')) {
            $data = json_decode(Cookie::get('data'));
        } else {
            $user = new User();
            $user->username = session_id();
            $user->save();
            $data = array(
                'user_id' => session_id(),
                'message' => [],
                'todo' =>
                [
                ],
                'setting' => [
                    'theme' => 0,
                ],
            );
            $e = json_encode($data);
            Cookie::queue('data', $e, 999999);
            $data = json_decode($e);
        }
        return $data;
    }
}
