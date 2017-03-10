<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class FAQ extends Model {
	use ObservantTrait;
	
    protected $table = 'faq';

}
