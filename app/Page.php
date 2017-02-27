<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Page extends Model {
	use ObservantTrait;
	
    protected $table = 'pages';

}
