<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
   * Массово присваиваемые атрибуты.
   *
   * @var array
   */
    protected $fillable = ['title'];

    /**
     * Получить пользователя - владельца данной задачи
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
