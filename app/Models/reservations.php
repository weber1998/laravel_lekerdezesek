<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\User;

class reservations extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'start',
        'message'
    ];

    public function book_c() {
        return $this->hasOne(Book::class, 'book_id', 'book_id');
    }

    public function user_c() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
