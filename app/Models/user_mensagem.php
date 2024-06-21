<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_mensagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        ' teleone',
        ' sexo',
        ' interesses',
        'nascimento',
        'nacionalidade',
        ' data_creat',
        'conteudo',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
       
            
            
        
