<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Books Controller
 *
 * @property \App\Model\Table\ContentsTable $Contents
 *
 * @method \App\Model\Entity\Content[] paginate($object = null, array $settings = [])
 */
class ContentsController extends AppController
{
    

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       $this->viewBuilder()->setLayout(false);
    }
    public function homePage()
    {
       $this->viewBuilder()->setLayout(false);
    }

    public function about()
    {
        $this->viewBuilder()->setLayout(false);
    }


}
