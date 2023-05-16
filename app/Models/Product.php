<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $amount
 * @property $price
 * @property $date_expiration
 * @property $urlimagen
 * @property $description
 * @property $Benefits
 * @property $user_id
 * @property $category_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{

    static $rules = [
		'name' => 'required',
		'amount' => 'required',
		'price' => 'required',
		'date_expiration' => 'required',
		'urlimagen' => 'required',
		'description' => 'required',
		'Benefits' => 'required',
		'user_id' => 'required',
		'category_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','amount','price','date_expiration','urlimagen','description','Benefits','user_id','category_id'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->hasOne(category::class);
    }


}
