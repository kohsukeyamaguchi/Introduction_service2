<?php

class Controller_Logout extends Controller
{
    public function action_index()
    {
        $auth = Auth::instance();
            if($auth->logout()){
                Session::set_flash('sucMsg','ログアウトしました');
                Response::redirect('login');
            }else{
                Session::set_flash('errMsg','ログアウトに失敗しました');
            }
    }
}