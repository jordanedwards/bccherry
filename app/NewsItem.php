<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class NewsItem extends Model {
	use ObservantTrait;
	
    protected $table = 'news';

}
