<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class CountriesController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('Manage Home'))
        {
            abort(403, 'Access denied');
        }
        $this->crud->setModel("App\Models\Country");
        $this->crud->setRoute("admin/Countries");
        $this->crud->setEntityNameStrings('Country', 'Countries');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('name_ar',['label' => "Name AR",'name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['label' => "Name EN",'name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['label' => "Name FR",'name' => "name_fr",'type' => 'text']);
        $this->crud->setColumnDetails('flag',['label' => "Flag",'name' => "flag",'type' => 'image']);
        $this->crud->setColumnDetails('phone_code',['label' => "Phone Code",'name' => "phone_code",'type' => 'text']);
        $this->crud->setColumnDetails('police_number',['label' => "Police Number",'name' => "police_number",'type' => 'text']);
        $this->crud->setColumnDetails('immediate_aid_number',['label' => "Immediate Aid Number",'name' => "immediate_aid_number",'type' => 'text']);
        $this->crud->setColumnDetails('fire_fighting_number',['label' => "Fire Fighting Number",'name' => "fire_fighting_number",'type' => 'text']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'name_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'phone_code', 'type' => 'text']);
        $this->crud->addField(['name' => 'police_number', 'type' => 'text']);
        $this->crud->addField(['name' => 'immediate_aid_number', 'type' => 'text']);
        $this->crud->addField(['name' => 'fire_fighting_number', 'type' => 'text']);
        $this->crud->addField(['name' => 'flag', 'type' => 'image']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'name_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'phone_code', 'type' => 'text']);
        $this->crud->addField(['name' => 'police_number', 'type' => 'text']);
        $this->crud->addField(['name' => 'immediate_aid_number', 'type' => 'text']);
        $this->crud->addField(['name' => 'fire_fighting_number', 'type' => 'text']);
        $this->crud->addField(['name' => 'flag', 'type' => 'image']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('name_ar',['label' => "Name AR",'name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['label' => "Name EN",'name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['label' => "Name FR",'name' => "name_fr",'type' => 'text']);
        $this->crud->setColumnDetails('flag',['label' => "Flag",'name' => "flag",'type' => 'image']);
        $this->crud->setColumnDetails('phone_code',['label' => "Phone Code",'name' => "phone_code",'type' => 'text']);
        $this->crud->setColumnDetails('police_number',['label' => "Police Number",'name' => "police_number",'type' => 'text']);
        $this->crud->setColumnDetails('immediate_aid_number',['label' => "Immediate Aid Number",'name' => "immediate_aid_number",'type' => 'text']);
        $this->crud->setColumnDetails('fire_fighting_number',['label' => "Fire Fighting Number",'name' => "fire_fighting_number",'type' => 'text']);
    }
}
