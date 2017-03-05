<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class CategoryController extends CrudController{

    public function all($entity){
        parent::all($entity);

        $this->filter = \DataFilter::source(new \App\Category());
        $this->filter->add('title', 'Title', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('title', 'Title');
        $this->addStylesToGrid();

        $this->grid->paginate(20);
        $this->grid->orderBy('title','asc');

        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\Category());

        $this->edit->label('Edit Member Category Title');

        $this->edit->add('title', 'Title', 'text')->rule('required');

        return $this->returnEditView();
    }    
}
