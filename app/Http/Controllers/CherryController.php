<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class CherryController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        $this->filter = \DataFilter::source(new \App\Cherry());
        $this->filter->add('name', 'Name', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('name', 'Name');
        $this->addStylesToGrid();

        $this->grid->paginate(20);
        $this->grid->orderBy('name','asc');

        return $this->returnView();
    }
    
    public function edit($entity){
        
        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\Cherry());

        $this->edit->label('Edit Variety Name');

        $this->edit->add('name', 'Name', 'text')->rule('required');
        $this->edit->add('description', 'Description', 'text');
        $this->edit->add('harvest_start', 'Harvest Start', 'date')->format('Y-m-d', 'CA');
        $this->edit->add('harvest_end', 'Harvest End', 'date')->format('Y-m-d', 'CA');

        $this->edit->add('published', 'Published', 'select')->options([
            0 => "Unpublished",
            1 => "Published",
        ]);

        return $this->returnEditView();
    }    
}
