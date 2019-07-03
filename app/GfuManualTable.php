<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\GfuManualTable
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $referenz
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GfuManualTable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GfuManualTable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GfuManualTable query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GfuManualTable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GfuManualTable whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GfuManualTable whereReferenz($value)
 * @mixin \Eloquent
 * @property int|null $test_bool
 * @property-read \App\Todo|null $todo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GfuManualTable whereTestBool($value)
 */
class GfuManualTable extends Model
{
    protected $connection = 'mysql';
    protected $table = 'gfu_manual_table';
    public $timestamps = false;
    protected $guarded = [];
    protected $hidden = [];

    protected $casts = [
        'test_bool' => 'boolean'
    ];

    public function todo()
    {
        return $this->belongsTo(Todo::class, 'referenz');
    }
}
