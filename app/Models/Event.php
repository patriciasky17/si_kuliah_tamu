<?php

namespace App\Models;

use App\Models\Pembicara;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $table= 'event';
    public $timestamps = false;

    protected $fillable = [
        'nama_event',
        'cara_pelaksanaan',
        'background',
        'flyer',
        'tempat_pelaksanaan',
        'link',
        'tanggal_pelaksanaan',
        'jam_mulai',
        'jam_selesai',
        'id_pic',
        'id_proposal',
        'laporan_akhir'
    ];

    public function pembicara()
    {
        return $this->belongsToMany(Pembicara::class, 'pembicara_dan_event', 'id_event', 'id_pembicara', 'id_event', 'id_pembicara');
    }
}
