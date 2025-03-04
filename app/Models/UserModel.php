<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; // Mendefinisikan nama tabel
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'name', 'password', 'level_id'];

    public function level(): BelongsTo
{
return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
}
}
