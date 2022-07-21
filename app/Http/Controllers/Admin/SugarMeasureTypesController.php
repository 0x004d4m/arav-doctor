<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class SugarMeasureTypesController extends CrudController
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
        $this->crud->setModel("App\Models\SugarMeasureType");
        $this->crud->setRoute("admin/SugarMeasureTypes");
        $this->crud->setEntityNameStrings('Sugar Measure Type', 'Sugar Measure Types');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('type_ar',['name' => "type_ar",'type' => 'text']);
        $this->crud->setColumnDetails('type_en',['name' => "type_en",'type' => 'text']);
        $this->crud->setColumnDetails('type_fr',['name' => "type_fr",'type' => 'text']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => "type_ar",'type' => 'text']);
        $this->crud->addField(['name' => "type_en",'type' => 'text']);
        $this->crud->addField(['name' => "type_fr",'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => "type_ar",'type' => 'text']);
        $this->crud->addField(['name' => "type_en",'type' => 'text']);
        $this->crud->addField(['name' => "type_fr",'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('type_ar',['name' => "type_ar",'type' => 'text']);
        $this->crud->setColumnDetails('type_en',['name' => "type_en",'type' => 'text']);
        $this->crud->setColumnDetails('type_fr',['name' => "type_fr",'type' => 'text']);
    }
}
