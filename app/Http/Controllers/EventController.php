<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class EventController extends Controller
{
        /**
         * 献立を登録する処理
         * @return view
         */
        public function addmenu(Request $request){
            //献立の内容受取
            $events = $request->all();
            // dd($events);
            \DB::beginTransaction();
            try{
                //献立の内容登録
                Menu::create($events);
                \Session::flash('err_msg','お問い合わせ内容を登録しました。');
                \DB::commit();
            }catch(\Throwable $e){
                \DB::rollback();
                // dd($e);
                abort(500);
            }
            return view('calendar');
        }

        /**
         * 献立を表示する
         * @return view
         */
        public function setEvents(Request $request)
        {
            //表示した月のカレンダーの始まりの日を終わりの日をそれぞれ取得
            $start = $this->formatDate($request->input('start'));
            $end = $this->formatDate($request->input('end'));
            $user_id = Auth::id();
            $space_id = User::select('space_id')->where('id','=',$user_id)->first();
            //カレンダーの期間内のイベントを配列で取得
            //EventsObjectが対応している配列キーの名前に変更するため、dateをstartとする
            $result= Menu::select('id', 'title', 'date as start')->whereBetween('date', [$start, $end])->where('space_id','=',$space_id['space_id'])->get()->toArray();
            echo json_encode($result);
            // json形式にして出力
        }

            // "2019-12-12T00:00:00+09:00"のようなデータを今回のDBに合うように"2019-12-12"に整形
            private function formatDate($date)
            {
                return str_replace('T00:00:00+09:00', '', $date);
            }


        /**
         * ユーザー情報取得
         * @return view
         */
        public function date($date,$user_id){
            $date = $date;
            $space_id = User::find($user_id);
            // dd($date);
            return view('home.addform', compact('date','space_id' ));
        }

        public function addform(){
            return view('home.addform');
        }

        /**
         * 献立内容編集画面
         * @return view
         */
        public function editeventform($id){
            $edit = Menu::find($id);
            // dd($edit);
            if (is_null($edit)){
                \Session::flash('err_msg','データがありません。');
                return redirect(route('calendar'));
            }
            return view('home.editeventform',['edit' => $edit]);
        }

        /**
         * 献立内容更新
         * @return view
         */
        public function editupdate(Request $request){
            $event = $request->all();
            \DB::beginTransaction();
                try{
                    //献立内容更新
                    $edit = Menu::find($event['id']);
                    $edit->fill([
                        'date'=> $event['date'],
                        'title'=> $event['title'],
                        'body'=> $event['body'],
                    ]);
                    $edit->save();
                    \DB::commit();
                }catch(\Throwable $e){
                    \DB::rollback();
                    // dd($e);
                    abort(500);
                }
            return view('calendar');
        }

        public function editdelete(Request $request){
            $delete = $request->all();
            // dd();
            Menu::destroy($delete['id']);
            return view('calendar');
        }

        /**
         * 献立を登録する（新規）時のユーザー情報表示
         * @return view
         */
        public function addmenuform(Request $request){
        $user_id = Auth::id();
        $space_id = User::select('space_id')->where('id','=',$user_id)->first();
        return view('home.addmenuform',compact('space_id'));
        }

        /**
         * スペースID内にメンバーを追加する
         * @return view
         */
        public function addmenber(Request $request){
            $menber = $request->all();
            \DB::beginTransaction();
            try{
                //メンバー内容登録
                User::create($menber);
                \Session::flash('err_msg','メンバーを登録しました。');
                \DB::commit();
            }catch(\Throwable $e){
                \DB::rollback();
                // dd($e);
                abort(500);
            }
            return view('home.index');
        }

        /**
         * メンバー登録時にスペースID の引継ぎする
         * @return view
         */
        public function addmenberform(Request $request){
            $user_id = Auth::id();
            $space_id = User::select('space_id')->where('id','=',$user_id)->first();
            return view('home.addmenberform',compact('space_id'));
        }

}
