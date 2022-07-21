<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class OccupationTypesController extends CrudController
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
        $this->crud->setModel("App\Models\OccupationType");
        $this->crud->setRoute("admin/OccupationTypes");
        $this->crud->setEntityNameStrings('Occupation Type', 'Occupation Types');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('subscriber_type_id',[
            'label' => "Subscriber Type",
            'type' => "select",
            'name' => 'subscriber_type_id',
            'entity' => 'subscriberType',
            'attribute' => "name_ar",
            'model' => 'App\Models\SubscriberType'
        ]);

        $this->crud->setColumnDetails('name_ar',['label' => "Name AR",'name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['label' => "Name EN",'name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['label' => "Name FR",'name' => "name_fr",'type' => 'text']);
        $this->crud->setColumnDetails('visable_by_occupation',['label' => "Visable By Occupation",'name' => "visable_by_occupation",'type' => 'text']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Subscriber Type",
            'type' => "relationship",
            'name' => 'subscriber_type_id',
            'entity' => 'subscriberType',
            'attribute' => "name_ar",
            'model' => 'App\Models\SubscriberType'
        ]);

        $this->crud->addField(['name' => 'name_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'visable_by_occupation', 'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Subscriber Type",
            'type' => "relationship",
            'name' => 'subscriber_type_id',
            'entity' => 'subscriberType',
            'attribute' => "name_ar",
            'model' => 'App\Models\SubscriberType'
        ]);

        $this->crud->addField(['name' => 'name_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'visable_by_occupation', 'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('subscriber_type_id',[
            'label' => "Subscriber Type",
            'type' => "select",
            'name' => 'subscriber_type_id',
            'entity' => 'subscriberType',
            'attribute' => "name_ar",
            'model' => 'App\Models\SubscriberType'
        ]);

        $this->crud->setColumnDetails('name_ar',['label' => "Name AR",'name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['label' => "Name EN",'name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['label' => "Name FR",'name' => "name_fr",'type' => 'text']);
        $this->crud->setColumnDetails('visable_by_occupation',['label' => "Visable By Occupation",'name' => "visable_by_occupation",'type' => 'text']);
    }
}
