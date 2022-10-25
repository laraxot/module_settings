<?php

declare(strict_types=1);

namespace Modules\Settings\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\Settings\Models\Conf.
 *
 * @property int                             $id
 * @property string                          $appname
 * @property string                          $description
 * @property string                          $created_by
 * @property string                          $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Conf newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Conf newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Conf query()
 * @method static \Illuminate\Database\Eloquent\Builder|Conf whereAppname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conf whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conf whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conf whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conf whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conf whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conf whereUpdatedBy($value)
 *
 * @mixin \Eloquent
 */
class Conf extends Model {
    // public $table = '';
    protected $connection = 'settings'; // this will use the specified database connection

    public $fillable = [
        'appname', 'description', 'keywords', 'author',
    ];
}
