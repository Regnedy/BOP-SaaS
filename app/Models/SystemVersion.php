<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class SystemVersion extends Model{
 protected $fillable=['platform','version','build','release_notes','required'];
}