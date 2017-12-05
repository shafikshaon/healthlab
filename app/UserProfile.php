<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class UserProfile extends Authenticatable
{
  use Notifiable;
  use Searchable;
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'user_id','img_path', 'phone_number', 'building', 'street', 'city', 'post_code', 'country', 'job_title', 'company_name'
  ];
}
