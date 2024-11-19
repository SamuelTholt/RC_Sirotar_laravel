<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekcie extends Model
{
    use HasFactory;

    protected $table = 'sekcie';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nazov_sekcie',
        'nadpis',
        'typografia_nadpisu',
        'farba_nadpisu',
        'font_nadpisu',
        'ikonka_nadpisu',
        'farba_ikonky_nadpisu',
        'text',
        'velkost_textu',
        'farba_textu',
        'font_textu',
    ];
}
