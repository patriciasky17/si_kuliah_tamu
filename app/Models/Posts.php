<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table= 'posts';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'ringkasan',
        'waktu_publikasi',
        'author'
    ];

    public function scopeFilter($query, Array $filters)
    {
        $query->when( $filters['search'] ?? false, function($query, $search)
        {
            return $query->where(function($query) use ($search) {
                $query->where('judul', 'LIKE', '%' . $search . '%')
                            ->orWhere('ringkasan', 'LIKE', '%' . $search . '%')
                            ->orWhere('author', 'LIKE', '%' . $search . '%');
            });
        });
        $query->when( $filters['date_search'] ?? false, function($query, $search)
        {
            return $query->where(function($query) use ($search) {
                $query->between('waktu_publikasi', $search['start_date'], $search['end_date']);
            });
        });
    }
}
