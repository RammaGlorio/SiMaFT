<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class LacakSurat extends Model
{
    use HasFactory, Uuid;

    protected $fillable = ['id_surat', 'type', 'posisi'];
}
