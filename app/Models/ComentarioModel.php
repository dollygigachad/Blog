<?php namespace App\Models; 
use CodeIgniter\Model;

class ComentarioModel extends Model
{
    protected $table = 'comentarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['posts_id', 'comentario'];


    protected $validationRules = [
        'posts_id' =>[
            'label' => 'ID do Post',
            'rules' => 'required'
        ],
        'comentario' =>[
            'label' => 'Comentarios',
            'rules' => 'required'
        ]
    ];



    protected $useTimestamps = true;
    protected $createdField  = 'created_id';
    protected $updatedField  = 'updated_id';
}