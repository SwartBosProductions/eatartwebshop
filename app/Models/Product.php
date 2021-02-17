<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use SoftDeletes, Userstamps;
    /**
     *
     * @var array
     */
    protected $fillable = [
        'product_name',
        'serie_name',
        'picture',
        'description',
        'price',
        'designer_id',
        'collection_id',
        'shippingclass_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function designer()
    {
        return $this->belongsTo(Designer::class);
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function shippingclass()
    {
        return $this->belongsTo(Shippingclass::class);
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }

    public function currentSeries(array $periods)
    {
        $collections = Collection::whereIn('period_id', $periods)->pluck('id');
        $products = $this->whereIn('collection_id', $collections)
            ->get()
            ->unique('serie_name');
        return $products;
    }
}
