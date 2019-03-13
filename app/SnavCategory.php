<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SnavCategory extends Model
{
    public function parentId()
        // в модель мы добавляем метод с названием имени поля
        // при этом parent_id и подобные меняются на parentId
    {
        // устанавливаю отношения - к чему относится
        return $this->belongsTo(self::class);
}
}