<?php

class Controller_Login extends Controller
{
    const PASS_LENGTH_MIN = 6;
    const PASS_LENGTH_MAX = 20;
    
    public function action_index()
    {
        
        $error = '';
        $formData = '';
        
        $form = Fieldset::forge('loginform');
        
        $form->add('email','Email',array('type'=>'email','placeholder'=>'Email'))
            ->add_rule('required')
            ->add_rule('valid_email')
            ->add_rule('min_length',1)
            ->add_rule('max_length',255);
        
        $form->add('password','Password',array('type'=>'password','placeholder'=>'パスワード'))
            ->add_rule('required')
            ->add_rule('min_length',self::PASS_LENGTH_MIN)
            ->add_rule('max_length',self::PASS_LENGTH_MAX);

        $form->add('password_re','Password(再入力)',array('type'=>'password','placeholder'=>'パスワード再入力'))
            ->add_rule('match_field','password')
            ->add_rule('required')
            ->add_rule('min_length',self::PASS_LENGTH_MIN)
            ->add_rule('max_length',self::PASS_LENGTH_MAX);
        
        $form->add('submit','',array('type'=>'submit','value'=>'ログイン'));
        
        if(Input::method() === 'POST'){
            $val = $form->validation();
            if($val->run()){
                $formData = $val->validated();
                $auth = Auth::instance();
                if(Auth::login($formData['email'],$formData['password'])){
                    Session::set_flash('sucMsg','ログインに成功しました');
                    Response::redirect('home');
                }else{
                    Session::set_flash('errMsg','ログインに失敗しました');
                }
            }else{
                $error = $val->error();
                Session::set_flash('errMsg','ログインバリデーションに失敗しました');
            }
            $form->repopulate();
        }
        
        
        //ビューを返す
        $view = View::forge('template/index');
        $view->set('head',View::forge('template/head'));
        $view->set('header',View::forge('template/header'));
        $view->set('contents',View::forge('auth/login'));
        $view->set('footer',View::forge('template/footer'));
        $view->set_global('loginform',$form->build(''),false);
        $view->set_global('error',$error);
        
        //レンダリングしたhtmlをリクエストに返す
        return $view;
    }
}