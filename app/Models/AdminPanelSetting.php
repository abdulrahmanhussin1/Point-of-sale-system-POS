<?php

namespace App\Models;

use App\Traits\HasUserActions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminPanelSetting extends Model
{
    use HasFactory,SoftDeletes,HasUserActions;

    protected $guarded =['id'];
    protected $table = 'admin_panel_settings';


}
