<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class DisposisiPd2 extends Model
{
    use HasFactory, Uuid;
    
    protected $table = 'disposisi_pd2';

    protected $fillable = ['id_surat',
                            'catatan',
                            'type'
                        ];
}
