<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class DisposisiPd3 extends Model
{
    use HasFactory, Uuid;

    protected $table = 'disposisi_pd3';

    protected $fillable = ['id_surat',
                            'catatan',
                            'type'
                        ];
}
