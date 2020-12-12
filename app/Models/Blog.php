<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
      //テーブル名
      protected $table = 'blogs';

      //可変項目
      protected $fillable =
      [
          'title',
          'content',
      ];
}
