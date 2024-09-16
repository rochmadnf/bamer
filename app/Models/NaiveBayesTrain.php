<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaiveBayesTrain extends Model
{
    use HasFactory;

    protected $fillable = [
        "kesamaan_sifat", "ketuaan", "kekerasan", "kekeringan", "kotoran", "kebusukan", "kerusakan", "kadar_air", "diameter", "mutu_class",
    ];
}
