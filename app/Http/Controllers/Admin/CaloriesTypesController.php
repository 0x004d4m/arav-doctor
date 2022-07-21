<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class CaloriesTypesController extends CrudController
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
        $this->crud->setModel("App\Models\CaloriesType");
        $this->crud->setRoute("admin/CaloriesTypes");
        $this->crud->setEntityNameStrings('Calories Type', 'Calories Types');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('food_type_id',[
            'label' => "Food Type",
            'type' => "select",
            'name' => 'food_type_id',
            'entity' => 'foodType',
            'attribute' => "name_ar",
            'model' => 'App\Models\FoodType'
        ]);

        $this->crud->setColumnDetails('name_ar',['label' => "Name AR",'name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['label' => "Name EN",'name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['label' => "Name FR",'name' => "name_fr",'type' => 'text']);
        $this->crud->setColumnDetails('size_ar',['label' => "Size AR",'name' => "size_ar",'type' => 'text']);
        $this->crud->setColumnDetails('size_en',['label' => "Size EN",'name' => "size_en",'type' => 'text']);
        $this->crud->setColumnDetails('size_fr',['label' => "Size FR",'name' => "size_fr",'type' => 'text']);
        $this->crud->setColumnDetails('weight_in_grams',['name' => "weight_in_grams",'type' => 'text']);
        $this->crud->setColumnDetails('calories',['name' => "calories",'type' => 'text']);
        $this->crud->setColumnDetails('cts_status_id',['name' => "cts_status_id",'type' => 'text']);

        $this->crud->removeColumns(['name_en','name_fr','size_en','size_fr']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Food Type",
            'type' => "relationship",
            'name' => 'food_type_id',
            'entity' => 'foodType',
            'attribute' => "name_ar",
            'model' => 'App\Models\FoodType'
        ]);

        $this->crud->addField(['name' => 'name_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'size_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'size_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'size_fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'weight_in_grams', 'type' => 'number', 'step' => '0.01',]);
        $this->crud->addField(['name' => 'calories', 'type' => 'number', 'step' => '0.01',]);
        $this->crud->addField(['name' => 'cts_status_id', 'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Food Type",
            'type' => "relationship",
            'name' => 'food_type_id',
            'entity' => 'foodType',
            'attribute' => "name_ar",
            'model' => 'App\Models\FoodType'
        ]);

        $this->crud->addField(['name' => 'name_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'size_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'size_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'size_fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'weight_in_grams', 'type' => 'number', 'step' => '0.01']);
        $this->crud->addField(['name' => 'calories', 'type' => 'number', 'step' => '0.01']);
        $this->crud->addField(['name' => 'cts_status_id', 'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('food_type_id',[
            'label' => "Food Type",
            'type' => "select",
            'name' => 'food_type_id',
            'entity' => 'foodType',
            'attribute' => "name_ar",
            'model' => 'App\Models\FoodType'
        ]);

        $this->crud->setColumnDetails('name_ar',['label' => "Name AR",'name' => "name_ar",'type' => 'text']);
        $this->crud->setColumnDetails('name_en',['label' => "Name EN",'name' => "name_en",'type' => 'text']);
        $this->crud->setColumnDetails('name_fr',['label' => "Name FR",'name' => "name_fr",'type' => 'text']);
        $this->crud->setColumnDetails('size_ar',['label' => "Size AR",'name' => "size_ar",'type' => 'text']);
        $this->crud->setColumnDetails('size_en',['label' => "Size EN",'name' => "size_en",'type' => 'text']);
        $this->crud->setColumnDetails('size_fr',['label' => "Size FR",'name' => "size_fr",'type' => 'text']);
        $this->crud->setColumnDetails('weight_in_grams',['name' => "weight_in_grams",'type' => 'text']);
        $this->crud->setColumnDetails('calories',['name' => "calories",'type' => 'text']);
        $this->crud->setColumnDetails('cts_status_id',['name' => "cts_status_id",'type' => 'text']);
    }
}
