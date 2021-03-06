<?php

namespace Modules\Settings\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\Settings\Models\Settings
 *
 * @property int $id
 * @property string $appname
 * @property string $description
 * @property string $created_by
 * @property string $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings query()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereAppname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Settings extends Model {
    public $table = 'settings';

    public $fillable = [
        'appname', 'description', 'keywords', 'author',
    ];
}
