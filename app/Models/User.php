<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;
use App\Models\Permission;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function hasRole($role)
    {
        // dd($this->roles()->where('name', 'manager')->first());
        if($this->roles()->where('slug', $role)->first()){
            return true;
        } 
        return false;
    }
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
    public function hasPermission($name)
    {
        $permission = Permission::where('slug', $name)->first();
        if($permission){
            $found = \DB::table('user_permission')->where('permission_id', $permission->id)->andWhere('user_id', auth()->user()->id)->first();
            if($found){
                return true;
            }
        }
        return false;
    }
    public function hasRoles($roles)
    {
        if($this->roles()->whereIn('slug', $roles)->first()){
            return true;
        } 
        return false;
    }
}
