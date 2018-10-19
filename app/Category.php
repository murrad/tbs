<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    public function parent()
    {
        return $this->belongsTo(Self::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Self::class, 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public static function topCategories()
    {
        return static::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getMenu()
    {
        $menu = [];
        
        foreach (self::topCategories() as $category) {
            
            $menu[$category->id] = [
                'id' => $category->id,
                'name' => $category->name,
                'uri' => implode('-', explode(' ', strtolower($category->name))),
                'children' => []
            ];
            
            foreach($category->children()->get() as $level1Category) {
                $menu[$category->id]['children'][$level1Category->id] = [
                    'id' => $level1Category->id,
                    'name' => $level1Category->name,
                    'uri' => implode('-', explode(' ', strtolower($level1Category->name))),
                    'children' => []
                ];

                foreach($level1Category->children()->get() as $level2Category) {
                    $menu[$category->id]['children'][$level1Category->id]['children'][$level2Category->id] = [
                        'id' => $level2Category->id,               
                        'name' => $level2Category->name,
                        'uri' => implode('-', explode(' ', strtolower($level2Category->name))),
                        'children' => []
                    ];                    
                }
            }
        }
        
        return $menu;
    }
}
