<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //一対多（プロジェクト）
    public function projects()
    {
      return $this->hasMany(Project::class, 'user_id');
    }

    //多対多（部署）OK！！
    public function departments()
    {
        return $this->belongsToMany(Department::class, 'projects', 'user_id', 'department_id');
    }

    //一対多（メインスキル）OK！！
    public function primarySkils()
    {
        return $this->hasMany(PrimarySkil::class);
    }

    //一対多対多（サブスキル）OK！！
    public function secondarySkils()
    {
        return $this->hasManyThrough(SecondarySkil::class, PrimarySkil::class);
    }

    //多対一（新卒 or 中途）OK！！
    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    //多対一対一（学卒・院卒）
    public function background()
    {
        return $this->hasOneThrough(Background::class, Career::class, 'background_id');
    }
}
