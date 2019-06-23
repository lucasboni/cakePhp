<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MeuTeste Controller
 *
 *
 * @method \App\Model\Entity\MeuTeste[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeuTesteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       $this->autoRender = false;//não execulta nenhuma view
       $nome = $this->request->getQuery('nome');
       //var_dump($query);
       $this->response->withAddedHeader('Content-type', 'json');
       //echo 'O nome é: '.$nome;
       echo json_encode(['msg'=>"Olá mundo"]);
       
    }
}
