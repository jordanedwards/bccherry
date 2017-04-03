<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Harvest extends Model {
	use ObservantTrait;
	
    protected $table = 'harvest';

}
