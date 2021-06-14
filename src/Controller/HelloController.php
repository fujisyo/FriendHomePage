<?php
namespace App\Controller;

class HelloController extends AppController
{
    public function initialize()
    {
        parent::initialize();
    }

    public function index(){
        $this->Flash->success('成功', ['element'=>'flash']);
        $this->Flash->error('失敗', ['element'=>'flash']);
    }

    public function sendForm(){
        $str = $this->request->data('text1');
        $result = "";
        if($str != "") {
            $result = $str;
        } else {
            $result = 'aho';
        }
        
        $this->set("result", h($result));
    }

    public function hello(){
        
    }
}

