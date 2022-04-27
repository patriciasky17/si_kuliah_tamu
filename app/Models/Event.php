<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
