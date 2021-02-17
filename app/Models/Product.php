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

    public function currentProducts()
    {
        $currentCollections = DB::table('collections')->where('period_id', 2)->pluck('id');
        // dd($currentCollections);

        $products = DB::table('products')
            ->whereIn('collection_id', $currentCollections)
            ->latest()
            ->get();
        return $products;
    }
}
