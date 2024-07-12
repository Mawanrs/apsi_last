<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPelanggan extends Model
{
    use HasFactory;

    public $table = 'datapelanggans';

    protected $fillable = [
        'nama',
        'alamat',
        'nomor_hp',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
