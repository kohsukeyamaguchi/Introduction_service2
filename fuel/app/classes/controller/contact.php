<?php

class Controller_Contact extends Controller
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
        $login_id = Arr::get(Auth::get_user_id(),1);
        
        if(Input::method() === 'POST'){
            
            $title = Input::post('title');
            $contents = Input::post('contents');
            
            
            $query_insert = DB::query("INSERT INTO contact(user_id,subject,contents) VALUES (:login_id, :title, :contents)");
            $query_insert->bind('login_id',$login_id);
            $query_insert->bind('title',$title);
            $query_insert->bind('contents',$contents);
            $query_insert->execute();
            
            $query_select = DB::query("SELECT username,email FROM users WHERE id = :login_id");
            $query_select->bind('login_id',$login_id);
            $result = $query_select->execute()->as_array();
            
            foreach($result as $item)
            {
                $username_array[] = $item['username'];
                $email_array[] = $item['email'];
            }
            
            $send_name = $username_array[0];
            $send_email = $email_array[0];
            
            // インスタンスを生成する
            $email = Email::forge();

            // 送信者のアドレスを指定する
            $email->from($send_email, $send_name);

            // 受信者のアドレスを指定する
            $email->to('kohsuke0553@icloud.com', '山口　幸祐');

            // 表題を指定する
            $email->subject($title);
            
            // 本文を指定する。
            $email->body($contents);
            
            try
            {
                $email->send();
                Session::set_flash('sucMsg','お問合せ内容を送信しました。');
                Response::redirect('home');
            }
            catch(\EmailValidationFailedException $e)
            {
                Log::debug("バリデーションエラー");
            }
            catch(\EmailSendingFailedException $e)
            {
                Log::debug("ドライバがメールを送信できませんでした");
            }
        }
        
        if($login_id === 4){
            //DBの全てのレコードを取り出す
            $result = DB::select()->from('contact')->execute();
        }
        
        //変数としてビューを割り当てる
        $view = View::forge('template/index');
        $view->set('head',View::forge('template/head'));
        $view->set('header',View::forge('template/login_header'));
        if($login_id === 4){
            $view->set('contents',View::forge('contactAnswer'));
            $view->set_global('result',$result);
        }else{
            $view->set('contents',View::forge('contact'));
        }
        
        $view->set('footer',View::forge('template/footer'));


        // レンダリングした HTML をリクエストに返す
        return $view;
    }
}
