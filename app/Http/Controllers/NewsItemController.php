<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class NewsItemController extends CrudController{

    public function all($entity){
        parent::all($entity);

        $this->filter = \DataFilter::source(new \App\NewsItem());
        $this->filter->add('title', 'Title', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('title', 'Title');
        $this->grid->add('created_at', 'Date');
        $this->grid->add('published', 'Published');
        $this->addStylesToGrid();

        $this->grid->paginate(20);
        $this->grid->orderBy('created_at','desc');

        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\NewsItem());

        $this->edit->label('Edit News Item');

        $this->edit->add('title', 'Title', 'text')->rule('required');

        $this->edit->add('created_at', 'Date', 'date')->format('Y-m-d', 'CA');

        $this->edit->add('content', 'Body', 'redactor');

        $this->edit->add('published', 'Status', 'select')->options([
            0 => "Unpublished",
            1 => "Published",
        ]);

        return $this->returnEditView();
    }    
}
