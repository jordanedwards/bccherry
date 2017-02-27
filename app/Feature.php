<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Feature extends Model {
    use ObservantTrait;

    protected $table = 'feature';

}
