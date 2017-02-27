<?php 

namespace App\Http\Controllers;

use App\Certification;
use App\Feature;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class MemberController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        /** Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields

        */

        $this->filter = \DataFilter::source(new \App\Member());
        $this->filter->add('name', 'Name', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('name', 'Name');
        $this->grid->add('sales_directory_active', 'Sales Directory');
        $this->grid->add('employment_directory_active', 'Employment Directory');
        $this->grid->add('active', 'Active');

        $this->addStylesToGrid();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields

        */

        $this->edit = \DataEdit::source(new \App\Member());

        $this->edit->label('Edit Member');

        $this->edit->add('name', 'Name', 'text')->rule('required');
        // Location
        $this->edit->add('address', 'Address', 'text')->rule('required');
        $this->edit->add('city', 'City', 'text')->rule('required');
        $this->edit->add('postal_code', 'Postal Code', 'text')->rule('required');
        $this->edit->add('website', 'Website', 'text');

        // Contact
        $this->edit->add('contact_person', 'Contact person', 'text');
        $this->edit->add('business_phone', 'Business phone', 'text');
        $this->edit->add('business_phone', 'Business phone', 'text');
        $this->edit->add('toll_free', 'Toll-free', 'text');
        $this->edit->add('fax', 'Fax', 'text');
        $this->edit->add('sales_agent', 'Sales agent', 'text');
        $this->edit->add('sales_phone', 'Sales phone', 'text');
        $this->edit->add('sales_email', 'Sales email', 'text');
        $this->edit->add('employment_contact', 'Employment contact', 'text');
        $this->edit->add('employment_email', 'Employment email', 'text');
        $this->edit->add('sales_directory_active', 'Sales directory', 'select')->options([
            1 => "Show",
            2 => "Hide",
        ]);
        $this->edit->add('employment_directory_active', 'Employment directory', 'select')->options([
            1 => "Show",
            2 => "Hide",
        ]);
        $this->edit->add('positions_available', 'Positions available', 'text');

        $this->edit->add('distribution_type','Distribution type','select')->options([
            "",
            "Direct",
            "Broker",
        ]);
        $this->edit->add('features', 'Facility features', 'checkboxgroup')
            ->options(Feature::pluck("name", "id")->all());

        $this->edit->add('certifications', 'Certifications', 'checkboxgroup')
            ->options(Certification::pluck("name", "id")->all());

        $this->edit->add('harvest_weeks', 'Harvest dates', 'textarea');

        $this->edit->add('orchard_description', 'Orchard Description', 'textarea');

        $this->edit->add('orchard_description', 'Body', 'redactor');
        $this->edit->add('logo', 'Logo', 'image')->move('uploads/logos/')->preview(80,80);
        $this->edit->add('active', 'Status', 'select')->options([
            1 => "Active",
            2 => "Inactive",
        ]);


        return $this->returnEditView();
    }    
}
