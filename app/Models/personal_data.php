<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal_data extends Model
{
    use HasFactory;
    protected $fillable=[
        'f_name', 'phone_no', 'gender', 'education', 'country', 'email', 'password', 'file_no1'
    ];
}
