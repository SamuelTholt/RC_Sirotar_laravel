<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nazov_role',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
