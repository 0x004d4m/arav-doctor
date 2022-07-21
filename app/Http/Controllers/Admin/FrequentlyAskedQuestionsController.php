<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GeneralRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class FrequentlyAskedQuestionsController extends CrudController
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
        $this->crud->setModel("App\Models\FrequentlyAskedQuestion");
        $this->crud->setRoute("admin/FrequentlyAskedQuestions");
        $this->crud->setEntityNameStrings('Frequently Asked Question', 'Frequently Asked Questions');
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('frequently_asked_question_type_id',[
            'label' => "Frequently Asked Question Type",
            'type' => "select",
            'name' => 'frequently_asked_question_type_id',
            'entity' => 'frequentlyAskedQuestionType',
            'attribute' => "type_ar",
            'model' => 'App\Models\FrequentlyAskedQuestionType'
        ]);

        $this->crud->setColumnDetails('question_ar',['label' => "Question AR",'name' => "question_ar",'type' => 'text']);
        $this->crud->setColumnDetails('question_en',['label' => "Question EN",'name' => "question_en",'type' => 'text']);
        $this->crud->setColumnDetails('question_fr',['label' => "Question FR",'name' => "question_fr",'type' => 'text']);
        $this->crud->setColumnDetails('answer_ar',['label' => "Answer AR",'name' => "answer_ar",'type' => 'text']);
        $this->crud->setColumnDetails('answer_en',['label' => "Answer EN",'name' => "answer_en",'type' => 'text']);
        $this->crud->setColumnDetails('answer_fr',['label' => "Answer FR",'name' => "answer_fr",'type' => 'text']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Frequently Asked Question Type",
            'type' => "relationship",
            'name' => 'frequently_asked_question_type_id',
            'entity' => 'frequentlyAskedQuestionType',
            'attribute' => "type_ar",
            'model' => 'App\Models\FrequentlyAskedQuestionType'
        ]);

        $this->crud->addField(['name' => 'question_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'question_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'question_fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'answer_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'answer_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'answer_fr', 'type' => 'text']);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(GeneralRequest::class);

        $this->crud->addField([
            'label' => "Frequently Asked Question Type",
            'type' => "relationship",
            'name' => 'frequently_asked_question_type_id',
            'entity' => 'frequentlyAskedQuestionType',
            'attribute' => "type_ar",
            'model' => 'App\Models\FrequentlyAskedQuestionType'
        ]);

        $this->crud->addField(['name' => 'question_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'question_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'question_fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'answer_ar', 'type' => 'text']);
        $this->crud->addField(['name' => 'answer_en', 'type' => 'text']);
        $this->crud->addField(['name' => 'answer_fr', 'type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->setFromDb();

        $this->crud->setColumnDetails('frequently_asked_question_type_id',[
            'label' => "Frequently Asked Question Type",
            'type' => "select",
            'name' => 'frequently_asked_question_type_id',
            'entity' => 'frequentlyAskedQuestionType',
            'attribute' => "type_ar",
            'model' => 'App\Models\FrequentlyAskedQuestionType'
        ]);

        $this->crud->setColumnDetails('question_ar',['label' => "Question AR",'name' => "question_ar",'type' => 'text']);
        $this->crud->setColumnDetails('question_en',['label' => "Question EN",'name' => "question_en",'type' => 'text']);
        $this->crud->setColumnDetails('question_fr',['label' => "Question FR",'name' => "question_fr",'type' => 'text']);
        $this->crud->setColumnDetails('answer_ar',['label' => "Answer AR",'name' => "answer_ar",'type' => 'text']);
        $this->crud->setColumnDetails('answer_en',['label' => "Answer EN",'name' => "answer_en",'type' => 'text']);
        $this->crud->setColumnDetails('answer_fr',['label' => "Answer FR",'name' => "answer_fr",'type' => 'text']);
    }
}
