<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illustrator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'birthday',
        'state',
        'city',
        'user_id',
        'portfolio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function socialMedias()
    {
        return $this->hasMany(SocialMedia::class);
    }
}
