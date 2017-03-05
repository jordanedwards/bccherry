<?php 

namespace App\Http\Controllers;

use App\Category;
use App\Certification;
use App\Cherry;
use App\Feature;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class MemberController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        $this->filter = \DataFilter::source(new \App\Member());
        $this->filter->add('name', 'Name', 'text');
        $this->filter->add('sales_directory_active', 'Sales Directory','select')->options([
            "" => "",
            1 => "In sales directory",
            0 => "Not in sales directory"
        ]);
        $this->filter->add('employment_directory_active', 'Employment Directory','select')->options([
            "" => "",
            1 => "In employment directory",
            0 => "Not in employment directory"
        ]);
        $this->filter->add('active', 'Status','select')->options([
            "" => "",
            1 => "Active",
            0 => "Inactive"
        ]);
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('name', 'Name');
        $this->grid->add('categories', 'Categories');
        $this->grid->add('city', 'City');
        $this->grid->add('sales_directory_active', 'Sales Directory');
        $this->grid->add('employment_directory_active', 'Employment Directory');
        $this->grid->add('active', 'Active');

        $this->addStylesToGrid();

        $this->grid->paginate(20);
        $this->grid->orderBy('name','asc');

        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\Member());

        $this->edit->label('Edit Member');

        $this->edit->add('name', 'Name', 'text')->rule('required');
        // Location
        $this->edit->add('address', 'Address', 'text')->rule('required');
        $this->edit->add('city', 'City', 'text')->rule('required');
        $this->edit->add('postal_code', 'Postal Code', 'text')->rule('required');

        // Contact
        $this->edit->add('contact_person', 'Contact person', 'text');
        $this->edit->add('business_phone', 'Business phone', 'text');
        $this->edit->add('business_phone', 'Business phone', 'text');
        $this->edit->add('toll_free', 'Toll-free', 'text');
        $this->edit->add('fax', 'Fax', 'text');
        $this->edit->add('website', 'Website', 'text');
        $this->edit->add('brands', 'Brands', 'text');
        $this->edit->add('sales_agent', 'Sales agent', 'text');
        $this->edit->add('sales_phone', 'Sales phone', 'text');
        $this->edit->add('sales_email', 'Sales email', 'text');
        $this->edit->add('employment_contact', 'Employment contact', 'text');
        $this->edit->add('employment_email', 'Employment email', 'text');
        $this->edit->add('sales_directory_active', 'Sales directory', 'select')->options([
            0 => "Hide",
            1 => "Show",
        ]);
        $this->edit->add('employment_directory_active', 'Employment directory', 'select')->options([
            0 => "Hide",
            1 => "Show",
        ]);
        $this->edit->add('positions_available', 'Positions available', 'text');

        $this->edit->add('categories', 'Member Categories', 'checkboxgroup')
            ->options(Category::pluck("title", "title")->all());

        $this->edit->add('distribution_type','Distribution type','select')->options([
            "",
            "Direct",
            "Broker",
            "Direct And Broker",
        ]);

        $features = Feature::pluck("name", "id")->all();
        asort($features);

        $this->edit->add('features', 'Facility features', 'checkboxgroup')
            ->options($features);

        $certifications = Certification::pluck("name", "id")->all();
        asort($certifications);

        $this->edit->add('certifications', 'Certifications', 'checkboxgroup')
            ->options($certifications);

        $cherries = Cherry::pluck("name", "id")->all();
        asort($cherries);

        $this->edit->add('varieties', 'Varieties', 'checkboxgroup')
            ->options($cherries);

        $this->edit->add('harvest_weeks', 'Harvest dates', 'textarea');

        $this->edit->add('orchard_description', 'Orchard Description', 'redactor');
        $this->edit->add('logo', 'Logo', 'image')->move('uploads/logos/')->preview(80,80);
        $this->edit->add('active', 'Status', 'select')->options([
            1 => "Active",
            0 => "Inactive",
        ]);


        return $this->returnEditView();
    }    
}
