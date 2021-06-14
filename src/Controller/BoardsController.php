<?php 
namespace App\Controller;

use \Exception;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class BoardsController extends AppController 
{
    private $people;
    
    public function initialize()
    {
        parent::initialize();
        $this->people = TableRegistry::get('People');
    }

    public function index() {
        $data = $this->Boards->find()->contain('People')->order(['Boards.id' => 'DESC']);
        $this->set('data',$data);
    }
    
    public function add() {
        if ($this->request->is('post')) {
            $getdata = $this->request->getData();
            if (!$this->people->checkNameAndPass($getdata)) {
                $this->Flash->error('名前かパスワードを確認してください。');
            } else {
                $res = $this->people->find()
                ->where(['name'=>$getdata['name']])
                ->andWhere(['password'=>$getdata['password']])
                ->first();
                $board = $this->Boards->newEntity();
                $board->name = $getdata['name'];
                $board->title = $getdata['title'];
                $board->content = $getdata['content'];
                $board->person_id = $res['id'];
                if ($this->Boards->save($board)) {
                    $this->redirect(['action' => 'index']);
                } 
            }
        }
        $this->set('entity', $this->Boards->newEntity());
    }

    public function show($param) {
        $data = $this->Boards->find()
        ->where(['Boards.id'=>$param])
        ->contain(['People'])
        ->first();
        $this->set('data', $data);
    }

    public function show2($param) {
        $data = $this->people->get($param);
        $this->set('data',$data);
    }

    public function edit($param=0) {
        $getdata = $this->request->getData();
        if ($this->request->is('put')) {
            $board = $this->Boards->find()
            ->where(['Boards.id'=>$param])
            ->contain('People')
            ->first();

            $board->title = $getdata['title'];
            $board->content = $getdata['content'];
            $board->person_id = $getdata['person_id'];
            if (!$this->people->checkNameAndPass($getdata)) {
                $this->Flash->error('名前かパスワードを確認してください');
            } else {
                if ($this->Boards->save($board)) {
                    $this->redirect(['action'=>'index']);
                }
            }
        } else {
            $board = $this->Boards->find()
            ->where(['Boards.id'=>$param])
            ->contain('People')
            ->first();
        }
        $this->set('entity', $board);
    }
}