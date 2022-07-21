<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class SubscribtionNaturesController extends CrudController
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
        $this->crud->setModel("App\Models\SubscribtionNature");
        $this->crud->setRoute("admin/SubscribtionNatures");
        $this->crud->setEntityNameStrings('Subscribtion Nature', 'Subscribtion Natures');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('subscribtion_status_id',[
            'label' => "Subscribtion Status",
            'type' => "select",
            'name' => 'subscribtion_status_id',
            'entity' => 'subscribtionStatus',
            'attribute' => "name_ar",
            'model' => 'App\Models\SubscribtionStatus'
        ]);

        $this->crud->setColumnDetails('name_ar',['name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['name' => "name_fr",'type' => 'text']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Subscribtion Status",
            'type' => "relationship",
            'name' => 'subscribtion_status_id',
            'entity' => 'subscribtionStatus',
            'attribute' => "name_ar",
            'model' => 'App\Models\SubscribtionStatus'
        ]);

        $this->crud->addField(['name' => "name_ar",'type' => 'text']);
        $this->crud->addField(['name' => "name_en",'type' => 'text']);
        $this->crud->addField(['name' => "name_fr",'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Subscribtion Status",
            'type' => "relationship",
            'name' => 'subscribtion_status_id',
            'entity' => 'subscribtionStatus',
            'attribute' => "name_ar",
            'model' => 'App\Models\SubscribtionStatus'
        ]);

        $this->crud->addField(['name' => "name_ar",'type' => 'text']);
        $this->crud->addField(['name' => "name_en",'type' => 'text']);
        $this->crud->addField(['name' => "name_fr",'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('subscribtion_status_id',[
            'label' => "Subscribtion Status",
            'type' => "select",
            'name' => 'subscribtion_status_id',
            'entity' => 'subscribtionStatus',
            'attribute' => "name_ar",
            'model' => 'App\Models\SubscribtionStatus'
        ]);

        $this->crud->setColumnDetails('name_ar',['name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['name' => "name_fr",'type' => 'text']);
    }
}
