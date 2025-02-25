<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan

    // Mendefinisikan nama tabel yang digunakan oleh model ini
}
