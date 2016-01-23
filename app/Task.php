<?php

namespace App;

<<<<<<< HEAD
use App\User;
=======
>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
<<<<<<< HEAD
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','alamat','umur','jenis_kelamin','jenis_kamar'];

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
=======
	//
>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646
}
