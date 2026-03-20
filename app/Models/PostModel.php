<?php namespace App\Models;

class PostModel extends \CodeIgniter\Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'slug', 'content'];
    protected $validationRules = [
        'title' =>[
            'label' => 'Título',
            'rules' => 'required'
        ],
        'slug' =>[
            'label' => 'Slug',
            'rules' => 'required'
        ],
        'content' =>[
            'label' => 'Post',
            'rules' => 'required'
        ]
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}