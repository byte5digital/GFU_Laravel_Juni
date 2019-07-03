<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Todo
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int|null $state_id
 * @property string|null $due_date
 * @property int $user_created_id
 * @property int|null $user_assigned_id
 * @property int $project_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Project $project
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereUserAssignedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereUserCreatedId($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SubItem[] $subitems
 * @property-read mixed $title_uppercase
 */
class Todo extends Model
{
    public function project(){
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function getTitleUppercaseAttribute(){
        return strtoupper($this->title);
    }

    public function subitems(){
        return $this->hasMany(SubItem::class,'todo_id');
    }
}
