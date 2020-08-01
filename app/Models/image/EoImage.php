<?php

namespace App\Models\image;

use Illuminate\Database\Eloquent\Model;

class EoImage extends Model
{
    //
    protected $fillable = [
        'display_name','entity_name','header_pk','imagestorepath','image_url','is_active','save_no','type'
    ];

    protected $primaryKey = 'primary_key';
    protected $table = 'eoimage';
}
