<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class FeatureController extends CrudController{

    public function all($entity){
        parent::all($entity);

        $this->filter = \DataFilter::source(new \App\Feature());
        $this->filter->add('name', 'Name', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('name', 'Name',true);
        $this->addStylesToGrid();

        $this->grid->paginate(20);
        $this->grid->orderBy('name','asc');

        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\Feature());

        $this->edit->label('Edit Facility Feature');

        $this->edit->add('name', 'Name', 'text')->rule('required');


        return $this->returnEditView();
    }    
}
