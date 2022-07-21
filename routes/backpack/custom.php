<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {
    Route::crud('Advertises', 'AdvertisesController');
    Route::crud('AppointmentStatuses', 'AppointmentStatusesController');
    Route::crud('BloodGroupTypes', 'BloodGroupTypesController');
    Route::crud('CaloriesStatuses', 'CaloriesStatusesController');
    Route::crud('CaloriesTypes', 'CaloriesTypesController');
    Route::crud('Cities', 'CitiesController');
    Route::crud('Contents', 'ContentsController');
    Route::crud('Countries', 'CountriesController');
    Route::crud('ElectronicMassageTypes', 'ElectronicMassageTypesController');
    Route::crud('FoodTypes', 'FoodTypesController');
    Route::crud('FrequentlyAskedQuestions', 'FrequentlyAskedQuestionsController');
    Route::crud('FrequentlyAskedQuestionTypes', 'FrequentlyAskedQuestionTypesController');
    Route::crud('Genders', 'GendersController');
    Route::crud('Governorates', 'GovernoratesController');
    Route::crud('InsuranceCompanies', 'InsuranceCompaniesController');
    Route::crud('MedicalAdvices', 'MedicalAdvicesController');
    Route::crud('MovementNatures', 'MovementNaturesController');
    Route::crud('OccupationTypes', 'OccupationTypesController');
    Route::crud('PaidServices', 'PaidServicesController');
    Route::crud('Regions', 'RegionsController');
    Route::crud('SpecialitySubTypes', 'SpecialitySubTypesController');
    Route::crud('SpecialityTypes', 'SpecialityTypesController');
    Route::crud('StoppedReasons', 'StoppedReasonsController');
    Route::crud('SubscriberTypes', 'SubscriberTypesController');
    Route::crud('SubscribtionNatures', 'SubscribtionNaturesController');
    Route::crud('SubscribtionStatuses', 'SubscribtionStatusesController');
    Route::crud('SugarMeasureTypes', 'SugarMeasureTypesController');
    Route::crud('WeekDays', 'WeekDaysController');
    Route::crud('WorkingHours', 'WorkingHoursController');
    Route::crud('WorkplaceTypes', 'WorkplaceTypesController');
});
