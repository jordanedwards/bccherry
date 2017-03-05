<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Cherry extends Model {
	use ObservantTrait;
	
    protected $table = 'cherry';

}
