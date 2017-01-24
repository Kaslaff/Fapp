<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAchievement extends Model
{
	/* I think laravel by default does this */
    protected $table = 'users_achievements';

    /* ALSO! Laravel doesn't support composite primary keys so.. */
}
