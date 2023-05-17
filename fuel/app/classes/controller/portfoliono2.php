<?php

class Controller_portfolioNo2 extends Controller
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
        $like_data = 0;
        $comment_data = 0;
        $login_id = Arr::get(Auth::get_user_id(),1);
        $portfolio_data = 2;
    
        $query = DB::query("SELECT * FROM portfolio_comment WHERE user_id = :login_id AND portfolio_number = :portfolio_data");
        $query->bind('login_id', $login_id);
        $query->bind('portfolio_data', $portfolio_data);
        $result = $query->execute();
        $result_array = $result->as_array();
        foreach($result_array as $item)
        {
            $like_data = $item['like_amount'];
            $comment_data = $item['comment'];
        }
        
        //変数としてビューを割り当てる
        $view = View::forge('template/portfolio_index');
        $view->set('head',View::forge('template/head'));
        $view->set('header',View::forge('template/login_header'));
        $view->set('contents',View::forge('portfolioNo2'));
        $view->set('modal',View::forge('modal'));
        $view->set_global('like_data',$like_data);
        $view->set_global('comment_data',$comment_data);
        
        $view->set('footer',View::forge('template/footer'));


        // レンダリングした HTML をリクエストに返す
        return $view;
    }
}