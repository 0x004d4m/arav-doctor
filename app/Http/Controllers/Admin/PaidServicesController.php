<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class PaidServicesController extends CrudController
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
        $this->crud->setModel("App\Models\PaidService");
        $this->crud->setRoute("admin/PaidServices");
        $this->crud->setEntityNameStrings('Paid Service', 'Paid Services');
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

        $this->crud->setColumnDetails('user_id',[
            'label' => "User",
            'type' => "select",
            'name' => 'user_id',
            'entity' => 'user',
            'attribute' => "name",
            'model' => 'App\Models\User'
        ]);

        $this->crud->setColumnDetails('name_ar',['name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['name' => "name_fr",'type' => 'text']);
        $this->crud->setColumnDetails('price_jd',['name' => "price_jd",'type' => 'text']);
        $this->crud->setColumnDetails('price_usd',['name' => "price_usd",'type' => 'text']);
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

        $this->crud->addField([
            'label' => "User",
            'type' => "relationship",
            'name' => 'user_id',
            'entity' => 'user',
            'attribute' => "name",
            'model' => 'App\Models\User'
        ]);

        $this->crud->addField(['name' => "name_ar",'type' => 'text']);
        $this->crud->addField(['name' => "name_en",'type' => 'text']);
        $this->crud->addField(['name' => "name_fr",'type' => 'text']);
        $this->crud->addField(['name' => "price_jd",'type' => 'number', 'step' => '0.01']);
        $this->crud->addField(['name' => "price_usd",'type' => 'number', 'step' => '0.01']);
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

        $this->crud->addField([
            'label' => "User",
            'type' => "relationship",
            'name' => 'user_id',
            'entity' => 'user',
            'attribute' => "name",
            'model' => 'App\Models\User'
        ]);

        $this->crud->addField(['name' => "name_ar",'type' => 'text']);
        $this->crud->addField(['name' => "name_en",'type' => 'text']);
        $this->crud->addField(['name' => "name_fr",'type' => 'text']);
        $this->crud->addField(['name' => "price_jd",'type' => 'number', 'step' => '0.01']);
        $this->crud->addField(['name' => "price_usd",'type' => 'number', 'step' => '0.01']);
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

        $this->crud->setColumnDetails('user_id',[
            'label' => "User",
            'type' => "select",
            'name' => 'user_id',
            'entity' => 'user',
            'attribute' => "name",
            'model' => 'App\Models\User'
        ]);

        $this->crud->setColumnDetails('name_ar',['name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['name' => "name_fr",'type' => 'text']);
        $this->crud->setColumnDetails('price_jd',['name' => "price_jd",'type' => 'text']);
        $this->crud->setColumnDetails('price_usd',['name' => "price_usd",'type' => 'text']);
    }
}
