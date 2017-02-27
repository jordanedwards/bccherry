<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Member extends Model {
	use ObservantTrait;
	
    protected $table = 'member';

}
