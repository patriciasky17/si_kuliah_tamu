<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembicara extends Model
{
    use HasFactory;
    protected $table= 'pembicara';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'institusi',
        'jabatan',
        'foto',
        'cv',
        'npwp',
        'no_rekening',
        'sertifikat',
        'bank'
    ];
    public function event()
    {
        return $this->belongsToMany(PembicaraDanEvent::class, 'pembicara_dan_event', 'id_pembicara', 'id_event');
    }
}
