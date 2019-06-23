<?php 
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController{
    
    public function index(){//acesso padrao
        //$usuario = "Lucas";
        //$this->set(['usuarios'=> $usuario]);
        
        
        $this->paginate = [
            'limit' => 3,
            'order' => ['Users.id' => 'desc']
        ];
        
        $usuarios = $this->paginate($this->Users);
        
        //$usuarios = $this->Users->find()->all();
        //$this->set(['usuarios'=> $usuarios]);
        $this->set(compact('usuarios'/*,'acessos'*/));//mais recomendado
    }
    
    
    public function add(){
       $user = $this->Users->newEntity();
       if($this->request->is('post')){//se foi enviado um metodo post o usuario esta tentando cadastrar
           $user = $this->Users->patchEntity($user,$this->request->getData());//adiciona os dados na variavel user
           if($this->Users->save($user)){//tenta salvar no banco
               $this->Flash->success(__('Usuário cadastrado com sucesso'));//exibe mensagem de sucesso
               return $this->redirect(['action' => 'index']);//retona para index
           }else{
               $this->Flash->success(__('Usuário não foi cadastrado com sucesso'));//exibe mensagem de erro
           }
       }
       $this->set(compact('user'));//exibe os dados cadatrados
    }
    
}