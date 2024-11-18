<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isAdmin() {
        return $this->hasRole('Hlavný Admin') || $this->hasRole('Admin');
    }

    public function isHlavnyAdmin() {
        return $this->hasRole('Hlavný Admin');
    }

    public function hasRole($role)
    {
        return $this->role()->where('nazov_role', $role)->exists();
    }

    public function hasRoleId($roleId)
    {
        return $this->role_id == $roleId;
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
