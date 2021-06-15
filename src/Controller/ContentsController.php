<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\View\View;

/**
 * Books Controller
 *
 * @property \App\Model\Table\ContentsTable $Contents
 *
 * @method \App\Model\Entity\Content[] paginate($object = null, array $settings = [])
 */
class ContentsController extends AppController
{
    public function initialize()
    {
        $this->viewBuilder()->setLayout('content');
    }
    

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       
    }
    public function homePage()
    {
       
    }

    public function about()
    {
        
    }

    public function work()
    {

    }

    public function blog()
    {

    }

    public function contact()
    {

    }

}
