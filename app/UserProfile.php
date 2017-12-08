<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class UserProfile extends Authenticatable
{
  use Notifiable;
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'user_id','img_path', 'phone_number', 'building', 'street', 'city', 'post_code', 'country', 'job_title', 'company_name','educational_qualification','blood_pressure_systolic','blood_pressure_diastolic','height','weight'
  ];

}
