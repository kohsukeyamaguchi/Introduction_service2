<?php

class Controller_character extends Controller
{
    public function before(){
        $auth = Auth::instance();
        if($auth->check()){
            
        }else{
            if($auth->logout()){
            Session::set_flash('sucMsg','タイムアウトのため、ログアウトしました');
            Response::redirect('login');
            }else{
                Session::set_flash('errMsg','ログアウトに失敗しました');
            }
        }
        
    }
    
    public function action_index()
    {
        //変数としてビューを割り当てる
        $view = View::forge('template/index');
        $view->set('head',View::forge('template/head'));
        $view->set('header',View::forge('template/login_header'));
        $view->set('contents',View::forge('character'));
        $view->set('footer',View::forge('template/footer'));


        // レンダリングした HTML をリクエストに返す
        return $view;
    }
}