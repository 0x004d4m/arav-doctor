<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class MovementNaturesController extends CrudController
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
        $this->crud->setModel("App\Models\MovementNature");
        $this->crud->setRoute("admin/MovementNatures");
        $this->crud->setEntityNameStrings('Movement Nature', 'Movement Natures');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('name_ar',['label' => "Name AR",'name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['label' => "Name EN",'name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['label' => "Name FR",'name' => "name_fr",'type' => 'text']);
        $this->crud->setColumnDetails('range',['label' => "Range",'name' => "range",'type' => 'text']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'name_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'range', 'type' => 'number', 'step' => '0.01']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'name_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'range', 'type' => 'text', 'step' => '0.01']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('name_ar',['label' => "Name AR",'name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['label' => "Name EN",'name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['label' => "Name FR",'name' => "name_fr",'type' => 'text']);
        $this->crud->setColumnDetails('range',['label' => "Range",'name' => "range",'type' => 'text']);
    }
}
