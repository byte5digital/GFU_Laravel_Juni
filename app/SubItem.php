<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SubItem
 *
 * @property int $id
 * @property int $todo_id
 * @property string $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubItem whereTodoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubItem extends Model
{
    //
}
