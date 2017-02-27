<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Certification extends Model {
    use ObservantTrait;

    protected $table = 'certification';

}
