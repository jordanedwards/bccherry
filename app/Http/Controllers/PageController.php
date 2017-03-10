<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class PageController extends CrudController{

    public function all($entity){
        parent::all($entity);

        $this->filter = \DataFilter::source(new \App\Page());
        $this->filter->add('title', 'Title', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('title', 'Title');
        $this->grid->add('published', 'Published');
        $this->addStylesToGrid();

        $this->grid->paginate(20);
        $this->grid->orderBy('title','desc');
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\Page());

        $this->edit->label('Edit Page');

        $this->edit->add('title', 'Title', 'text')->rule('required');
        $this->edit->add('slug', 'Slug', 'text')->rule('required');
        $this->edit->add('content', 'Content', 'redactor');

        $this->edit->add('published', 'Published', 'select')->options([
            0 => "Unpublished",
            1 => "Published",
        ]);
       
        return $this->returnEditView();
    }    
}
