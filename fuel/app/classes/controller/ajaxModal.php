<?php

class Controller_ajaxModal extends Controller
{
    public function action_index()
    {
        Log::debug('SUCCESS001');
        if(isset($_POST['portfolioData']) && isset($_POST['likeData']) && isset($_POST['commentData'])){
            $portfolio_data = $_POST['portfolioData'];
            $like_data = $_POST['likeData'];
            $comment_data = $_POST['commentData'];
            $login_id = Arr::get(Auth::get_user_id(),1);
            
            //既にお気に入り登録されているか確認
            $query = DB::query("SELECT * FROM portfolio_comment WHERE user_id = :login_id AND portfolio_number = :portfolio_data");
            $query->bind('login_id', $login_id);
            $query->bind('portfolio_data', $portfolio_data);
            $result = $query->execute();
            
            $num_rows = count($result);
            Log::debug($num_rows);
            
            
            if($num_rows !== 0){

                $query = DB::query("UPDATE portfolio_comment SET like_amount = :like_data, comment = :comment_data WHERE user_id = :login_id AND portfolio_number = :portfolio_data");
                $query->bind('login_id', $login_id);
                $query->bind('portfolio_data', $portfolio_data);
                $query->bind('like_data', $like_data,);
                $query->bind('comment_data', $comment_data);
                $query->execute();                
            }else{
                $query = DB::query("INSERT INTO portfolio_comment(user_id,portfolio_number,like_amount,comment) VALUES (:login_id, :portfolio_data, :like_data, :comment_data)");
                $query->bind('login_id', $login_id);
                $query->bind('portfolio_data', $portfolio_data);
                $query->bind('like_data', $like_data,);
                $query->bind('comment_data', $comment_data);
                $query->execute();
            }
            
            
        }
    }
}