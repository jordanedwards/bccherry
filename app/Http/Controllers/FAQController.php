<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class FAQController extends CrudController{

    public function all($entity){
        parent::all($entity);

        $this->filter = \DataFilter::source(new \App\FAQ());
        $this->filter->add('question', 'Question', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('question', 'Question');

        $this->addStylesToGrid();

        $this->grid->paginate(20);
        $this->grid->orderBy('question','asc');

        return $this->returnView();
    }
    
    public function  edit($entity){

        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\FAQ());

        $this->edit->label('Edit FAQ');

        $this->edit->add('question', 'Question', 'text')->rule('required');
        $this->edit->add('answer', 'Answer', 'textarea')->rule('required');

        return $this->returnEditView();
    }    
}
