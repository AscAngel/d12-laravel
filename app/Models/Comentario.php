<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comentario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['comentario', 'ciudad', 'user_id'];
    // protected $guarded  = ['id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function archivos(){
        return $this->hasMany(Archivo::class);
    }
}
