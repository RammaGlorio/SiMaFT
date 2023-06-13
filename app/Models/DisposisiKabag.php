<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class DisposisiKabag extends Model
{
    use HasFactory, Uuid;

    protected $table = 'disposisi_kabag';

    protected $fillable = ['id_surat',
                            'catatan',
                            'type'
                        ];
}
