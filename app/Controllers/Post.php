<?php namespace App\Controllers;

use App\Models\ComentarioModel;
use App\Models\PostModel;

class Post extends BaseController
{
    public function index()
    {
        $postModel = new PostModel();
        $dados = [
            'posts' => $postModel->orderBy('id', 'desc')->findAll()
        ];
        helper('text');
        return view('post/home', $dados);
    }
    public function view($id_post){

        $postModel = new PostModel();
        $comentarioModel = new ComentarioModel();
        
        $dados = [
            'post' => $postModel->find($id_post),
            'comentarios' => $comentarioModel->where('posts_id', $id_post)->orderBy('created_id', 'desc')->findAll(),
            'error' => []
        ];

        return view('post/view', $dados);
    }

    public function create()
    {
        return view('form',[
            'titulo' => 'Criar Post',
            'error' => [],
            'post' => null
        ]);
    }
    public function store()
    {
        $postModel = new PostModel();
        $post = $this->request->getPost();

        if( $postModel->save($post) ){
            return redirect()->to('post/sucesso');
        } else{
            return view ('form',[
                'titulo' => 'Novo Post',
                'error' => $postModel->errors(),
                'post' => null
            ]);
        }

    }

    public function sucesso()
    {
        return view('post/sucesso');
    }
    
    public function edit($id_post)
    {
        $postModel = new PostModel();
        $post = $postModel->find($id_post);
        $dados = [
            'titulo' => 'Editar Post',
            'post' => $post,
            'error' => []
        ];

        return view('form', $dados);
    }

    public function excluir($id_post)
    {
        $postModel = new PostModel();

        if ($postModel->delete($id_post)){
            return redirect()->to('post/sucesso')->with('mensagem', 'Post excluído com sucesso!');
        }
    }
}