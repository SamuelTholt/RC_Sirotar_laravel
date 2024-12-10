<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotografie extends Model
{
    use HasFactory;

    protected $table = 'fotografie';
    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'nadpis',
        'text',
        'nazov_suboru',
        'cesta_k_suboru',
        'priradena_sekcia_id',
        'poradie'
    ];

    public function priradenaSekcia()
    {
        return $this->belongsTo(Sekcie::class, 'priradena_sekcia_id');
    }
}
