<?php
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use Notifiable;
    /**
     * テーブル名（省略するとクラス名の複数形 users が自動設定されます）
     */
    // protected $table = 'users';
    /**
     * 複数代入可能な属性
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    /**
     * JSON に含めない属性
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * 属性の型変換
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}






