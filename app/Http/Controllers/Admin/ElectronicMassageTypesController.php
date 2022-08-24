<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ElectronicMassageTypesController extends CrudController
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
        $this->crud->setModel("App\Models\ElectronicMassageType");
        $this->crud->setRoute("admin/ElectronicMassageTypes");
        $this->crud->setEntityNameStrings('Electronic Massage Type', 'Electronic Massage Types');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('title',['label' => "Title",'name' => "title",'type' => 'text']);
        $this->crud->setColumnDetails('method',['label' => "Method",'name' => "method",'type' => 'text']);
        $this->crud->setColumnDetails('reason',['label' => "Reason",'name' => "reason",'type' => 'text']);
        $this->crud->setColumnDetails('text_ar',['label' => "Text AR",'name' => "text_ar",'type' => 'text']);
        $this->crud->setColumnDetails('text_en',['label' => "Text EN",'name' => "text_en",'type' => 'text']);
        $this->crud->setColumnDetails('text_fr',['label' => "Text FR",'name' => "text_fr",'type' => 'text']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'title', 'type' => 'text']);
        $this->crud->addField(['name' => 'method', 'type' => 'text']);
        $this->crud->addField(['name' => 'reason', 'type' => 'text']);
        $this->crud->addField(['name' => 'text_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'text_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'text_fr', 'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'title', 'type' => 'text']);
        $this->crud->addField(['name' => 'method', 'type' => 'text']);
        $this->crud->addField(['name' => 'reason', 'type' => 'text']);
        $this->crud->addField(['name' => 'text_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'text_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'text_fr', 'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('title',['label' => "Title",'name' => "title",'type' => 'text']);
        $this->crud->setColumnDetails('method',['label' => "Method",'name' => "method",'type' => 'text']);
        $this->crud->setColumnDetails('reason',['label' => "Reason",'name' => "reason",'type' => 'text']);
        $this->crud->setColumnDetails('text_ar',['label' => "Text AR",'name' => "text_ar",'type' => 'text']);
        $this->crud->setColumnDetails('text_en',['label' => "Text EN",'name' => "text_en",'type' => 'text']);
        $this->crud->setColumnDetails('text_fr',['label' => "Text FR",'name' => "text_fr",'type' => 'text']);
    }
}
