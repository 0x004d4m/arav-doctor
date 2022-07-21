<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class MedicalAdvicesController extends CrudController
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
        $this->crud->setModel("App\Models\MedicalAdvice");
        $this->crud->setRoute("admin/MedicalAdvices");
        $this->crud->setEntityNameStrings('Medical Advice', 'Medical Advices');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('role_id',[
            'label' => "Role",
            'type' => "select",
            'name' => 'role_id',
            'entity' => 'role',
            'attribute' => "name",
            'model' => 'App\Models\Role'
        ]);

        $this->crud->setColumnDetails('user_id',[
            'label' => "User",
            'type' => "select",
            'name' => 'user_id',
            'entity' => 'user',
            'attribute' => "name",
            'model' => 'App\Models\User'
        ]);

        $this->crud->setColumnDetails('text_ar',['label' => "Text AR",'name' => "text_ar",'type' => 'text']);
        $this->crud->setColumnDetails('text_en',['label' => "Text EN",'name' => "text_en",'type' => 'text']);
        $this->crud->setColumnDetails('text_fr',['label' => "Text FR",'name' => "text_fr",'type' => 'text']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Role",
            'type' => "relationship",
            'name' => 'role_id',
            'entity' => 'role',
            'attribute' => "name",
            'model' => 'App\Models\Role'
        ]);

        $this->crud->addField([
            'label' => "User",
            'type' => "relationship",
            'name' => 'user_id',
            'entity' => 'user',
            'attribute' => "name",
            'model' => 'App\Models\User'
        ]);

        $this->crud->addField(['name' => 'text_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'text_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'text_fr', 'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Role",
            'type' => "relationship",
            'name' => 'role_id',
            'entity' => 'role',
            'attribute' => "name",
            'model' => 'App\Models\Role'
        ]);

        $this->crud->addField([
            'label' => "User",
            'type' => "relationship",
            'name' => 'user_id',
            'entity' => 'user',
            'attribute' => "name",
            'model' => 'App\Models\User'
        ]);

        $this->crud->addField(['name' => 'text_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'text_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'text_fr', 'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('role_id',[
            'label' => "Role",
            'type' => "select",
            'name' => 'role_id',
            'entity' => 'role',
            'attribute' => "name",
            'model' => 'App\Models\Role'
        ]);

        $this->crud->setColumnDetails('user_id',[
            'label' => "User",
            'type' => "select",
            'name' => 'user_id',
            'entity' => 'user',
            'attribute' => "name",
            'model' => 'App\Models\User'
        ]);

        $this->crud->setColumnDetails('text_ar',['label' => "Text AR",'name' => "text_ar",'type' => 'text']);
        $this->crud->setColumnDetails('text_en',['label' => "Text EN",'name' => "text_en",'type' => 'text']);
        $this->crud->setColumnDetails('text_fr',['label' => "Text FR",'name' => "text_fr",'type' => 'text']);
    }
}
