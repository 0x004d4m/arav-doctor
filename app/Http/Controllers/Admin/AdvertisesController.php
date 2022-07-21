<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class AdvertisesController extends CrudController
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
        $this->crud->setModel("App\Models\Advertise");
        $this->crud->setRoute("admin/Advertises");
        $this->crud->setEntityNameStrings('Advertise', 'Advertises');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->addColumn([
            'name' => 'text_ar',
            'type' => 'text',
        ]);

        $this->crud->addColumn([
            'name' => 'text_en',
            'type' => 'text',
        ]);

        $this->crud->addColumn([
            'name' => 'text_fr',
            'type' => 'text',
        ]);

        $this->crud->addColumn([
            'name' => 'price_jd',
            'type' => 'text',
            'label' => 'Price JD',
        ]);

        $this->crud->addColumn([
            'name' => 'price_usd',
            'type' => 'text',
            'label' => 'Price USD',
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'name' => 'text_ar',
            'type' => 'text',
            'label' => 'Text Ar',
        ]);

        $this->crud->addField([
            'name' => 'text_en',
            'type' => 'text',
            'label' => 'Text En',
        ]);

        $this->crud->addField([
            'name' => 'text_fr',
            'type' => 'text',
            'label' => 'Text Fr',
        ]);

        $this->crud->addField([
            'name' => 'price_jd',
            'type' => 'number',
            'label' => 'Price JD',
            'step' => '0.01',
        ]);

        $this->crud->addField([
            'name' => 'price_usd',
            'type' => 'number',
            'label' => 'Price USD',
            'step' => '0.01',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'name' => 'text_ar',
            'type' => 'text',
            'label' => 'Text Ar',
        ]);

        $this->crud->addField([
            'name' => 'text_en',
            'type' => 'text',
            'label' => 'Text En',
        ]);

        $this->crud->addField([
            'name' => 'text_fr',
            'type' => 'text',
            'label' => 'Text Fr',
        ]);

        $this->crud->addField([
            'name' => 'price_jd',
            'type' => 'number',
            'label' => 'Price JD',
            'step' => '0.01',
        ]);

        $this->crud->addField([
            'name' => 'price_usd',
            'type' => 'number',
            'label' => 'Price USD',
            'step' => '0.01',
        ]);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->addColumn([
            'name' => 'text_ar',
            'type' => 'text',
        ]);

        $this->crud->addColumn([
            'name' => 'text_en',
            'type' => 'text',
        ]);

        $this->crud->addColumn([
            'name' => 'text_fr',
            'type' => 'text',
        ]);

        $this->crud->addColumn([
            'name' => 'price_jd',
            'type' => 'text',
            'label' => 'Price JD',
        ]);

        $this->crud->addColumn([
            'name' => 'price_usd',
            'type' => 'text',
            'label' => 'Price USD',
        ]);
    }
}
