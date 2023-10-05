<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Space;
use App\Models\User;
use App\Models\Menu_upload;

class Mealselectcontroller extends Controller
{
    /**
     * test
     * 
     * @return view
     */
    public function test(){
        return view('test');
    }




    /**
     * トップ画面
     * @return view
     */
    public function index(){
        return view('home.index');
    }

    /**
     * 会員登録ページ表示
     * @return view
     */
    public function create(){
        return view('create');
    }

    /**
     * お問い合わせ内容を確認する
     * @return view
     */ 
    public function confirm(Request $request){
        //お問い合わせ内容受取
        $confirm = $request->all();
        // dd($confirm);
        //受け取った値をバリデーション
        $request->validate([
            'space_id' => 'required | max:20|unique:users',
            'name' => 'required | max:10',
            'password' => 'required | max:200',
            'email' => 'required | max:255 | email:strict,dns|unique:users',
        ],
        [
            'space_id.required' => 'spaceIDを20文字以内で入力してください',
            'space_id.max:20' => 'spaceIDを20文字以内で入力してください',
            'space_id.unique' => 'そのspaceIDは既に登録されています',
            'name' => 'usernameを10文字以内で入力してください',
            'password' => 'passwordを正しく入力してください',
            'email.required' => 'emailを正しく入力してください',
            'email.unique' => 'そのemailは既に登録されています',
        ]);
        return view('confirm',compact('confirm'));
    }

        /**
         * お問い合わせ内容を登録する
         * @return view
         */
        public function complete(Request $request){
            //お問い合わせ内容受取
            $complete = $request->all();

            \DB::beginTransaction();
            try{
                //お問い合わせ内容登録
                User::create($complete);
                \Session::flash('err_msg','お問い合わせ内容を登録しました。');
                \DB::commit();
            }catch(\Throwable $e){
                \DB::rollback();
                // dd($e);
                abort(500);
            }
            return view('complete',compact('complete'));
        }



    //     /**
    //  * 新規会員登録完了画面
    //  * ログイン画面
    //  * @return view
    //  */
    // public function complete(){
    //     return view('complete');
    // }

    /**
     * 
     * パスワード再設定画面
     * @return view
     */
    public function reset(){
        return view('reset');
    }

    /**
     * 会員専用ページトップ画面
     * 
     * @return view
     */
    public function member_top(){
        return view('member_top');
    }

}
