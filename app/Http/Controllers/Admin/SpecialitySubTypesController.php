<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class SpecialitySubTypesController extends CrudController
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
        $this->crud->setModel("App\Models\SpecialitySubType");
        $this->crud->setRoute("admin/SpecialitySubTypes");
        $this->crud->setEntityNameStrings('Speciality Sub Type', 'Speciality Sub Types');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('speciality_type_id',[
            'label' => "Speciality Type",
            'type' => "select",
            'name' => 'speciality_type_id',
            'entity' => 'specialityType',
            'attribute' => "name_ar",
            'model' => 'App\Models\SpecialityType'
        ]);

        $this->crud->setColumnDetails('name_ar',['name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['name' => "name_fr",'type' => 'text']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Speciality Type",
            'type' => "relationship",
            'name' => 'speciality_type_id',
            'entity' => 'specialityType',
            'attribute' => "name_ar",
            'model' => 'App\Models\SpecialityType'
        ]);

        $this->crud->addField(['name' => "name_ar",'type' => 'text']);
        $this->crud->addField(['name' => "name_en",'type' => 'text']);
        $this->crud->addField(['name' => "name_fr",'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Speciality Type",
            'type' => "relationship",
            'name' => 'speciality_type_id',
            'entity' => 'specialityType',
            'attribute' => "name_ar",
            'model' => 'App\Models\SpecialityType'
        ]);

        $this->crud->addField(['name' => "name_ar",'type' => 'text']);
        $this->crud->addField(['name' => "name_en",'type' => 'text']);
        $this->crud->addField(['name' => "name_fr",'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('speciality_type_id',[
            'label' => "Speciality Type",
            'type' => "select",
            'name' => 'speciality_type_id',
            'entity' => 'specialityType',
            'attribute' => "name_ar",
            'model' => 'App\Models\SpecialityType'
        ]);

        $this->crud->setColumnDetails('name_ar',['name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['name' => "name_fr",'type' => 'text']);
    }
}
