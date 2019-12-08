<?php

namespace App\Models;

use TypiCMS\NestableTrait;
use Illuminate\Support\Str;
use Plank\Mediable\Mediable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use NestableTrait {
        newCollection as nestableNewCollection;
    }

    use Mediable;
    protected $table = 'categories';

    protected $fillable = [
        'name', 'slug', 'description', 'parent_id', 'featured', 'menu', 'image'
    ];

    protected $casts = [
        'parent_id' =>  'integer',
        'featured'  =>  'boolean',
        'menu'      =>  'boolean'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function messages()
    {
        return $this->belongsToMany(Message::class, 'message_categories', 'category_id', 'message_id');
    }

    /**
     * Return a custom nested collection.
     *
     * @param array $models
     *
     * @return NestableCollection
     */
    public function newCollection(array $models = [])
    {
        return $this->nestableNewCollection($models);
    }
}
