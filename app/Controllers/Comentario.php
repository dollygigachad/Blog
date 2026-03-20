<?php namespace App\Controllers;

use App\Models\ComentarioModel;
use App\Models\PostModel;

class Comentario extends BaseController
{
    public function store()
    {
        $comentarioModel = new ComentarioModel();
        $comentario = $this->request->getPost();

        if($comentarioModel->save($comentario)){
            return redirect()->to('post/view/'.$comentario['posts_id'])->with('mensagem', 'Comentário adicionado com sucesso!');
        } else {
            return redirect()->to('post/view/'.$comentario['posts_id'])->with('erro', implode(', ', $comentarioModel->errors()));
        }
    }
}