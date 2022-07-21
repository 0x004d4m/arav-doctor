<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class AppointmentStatusesController extends CrudController
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
        $this->crud->setModel("App\Models\AppointmentStatus");
        $this->crud->setRoute("admin/AppointmentStatuses");
        $this->crud->setEntityNameStrings('Appointment Status', 'Appointment Statuses');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('status_ar',[
            'label' => "Status AR",
            'name' => "status_ar",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('status_en',[
            'label' => "Status EN",
            'name' => "status_en",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('status_fr',[
            'label' => "Status FR",
            'name' => "status_fr",
            'type' => 'text'
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'status_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'status_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'status_fr', 'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField(['name' => 'status_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'status_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'status_fr', 'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('status_ar',[
            'label' => "Status AR",
            'name' => "status_ar",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('status_en',[
            'label' => "Status EN",
            'name' => "status_en",
            'type' => 'text'
        ]);

        $this->crud->setColumnDetails('status_fr',[
            'label' => "Status FR",
            'name' => "status_fr",
            'type' => 'text'
        ]);
    }
}
