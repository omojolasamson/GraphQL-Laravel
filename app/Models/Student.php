<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Student
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $age
 * @property int $country
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @method static \Database\Factories\QuestFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Quest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quest query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quest whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quest whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quest whereReward($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quest whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quest whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'age', 'country'];

}
