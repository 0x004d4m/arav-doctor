<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Advertises') }}"><i class="la la-home nav-icon"></i> {{ trans('Advertises') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('AppointmentStatuses') }}"><i class="la la-home nav-icon"></i> {{ trans('Appointment Statuses') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('BloodGroupTypes') }}"><i class="la la-home nav-icon"></i> {{ trans('Blood Group Types') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('CaloriesStatuses') }}"><i class="la la-home nav-icon"></i> {{ trans('Calories Statuses') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('CaloriesTypes') }}"><i class="la la-home nav-icon"></i> {{ trans('Calories Types') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Cities') }}"><i class="la la-home nav-icon"></i> {{ trans('Cities') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Contents') }}"><i class="la la-home nav-icon"></i> {{ trans('Contents') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Countries') }}"><i class="la la-home nav-icon"></i> {{ trans('Countries') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ElectronicMassageTypes') }}"><i class="la la-home nav-icon"></i> {{ trans('Electronic Massage Types') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('FoodTypes') }}"><i class="la la-home nav-icon"></i> {{ trans('Food Types') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('FrequentlyAskedQuestions') }}"><i class="la la-home nav-icon"></i> {{ trans('Frequently Asked Questions') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('FrequentlyAskedQuestionTypes') }}"><i class="la la-home nav-icon"></i> {{ trans('Frequently Asked Question Types') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Genders') }}"><i class="la la-home nav-icon"></i> {{ trans('Genders') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Governorates') }}"><i class="la la-home nav-icon"></i> {{ trans('Governorates') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('InsuranceCompanies') }}"><i class="la la-home nav-icon"></i> {{ trans('Insurance Companies') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('MedicalAdvices') }}"><i class="la la-home nav-icon"></i> {{ trans('Medical Advices') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('MovementNatures') }}"><i class="la la-home nav-icon"></i> {{ trans('Movement Natures') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('OccupationTypes') }}"><i class="la la-home nav-icon"></i> {{ trans('Occupation Types') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('PaidServices') }}"><i class="la la-home nav-icon"></i> {{ trans('Paid Services') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Regions') }}"><i class="la la-home nav-icon"></i> {{ trans('Regions') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('SpecialitySubTypes') }}"><i class="la la-home nav-icon"></i> {{ trans('Speciality Sub Types') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('SpecialityTypes') }}"><i class="la la-home nav-icon"></i> {{ trans('Speciality Types') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('StoppedReasons') }}"><i class="la la-home nav-icon"></i> {{ trans('Stopped Reasons') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('SubscriberTypes') }}"><i class="la la-home nav-icon"></i> {{ trans('Subscriber Types') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('SubscribtionNatures') }}"><i class="la la-home nav-icon"></i> {{ trans('Subscribtion Natures') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('SubscribtionStatuses') }}"><i class="la la-home nav-icon"></i> {{ trans('Subscribtion Statuses') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('SugarMeasureTypes') }}"><i class="la la-home nav-icon"></i> {{ trans('Sugar Measure Types') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('WeekDays') }}"><i class="la la-home nav-icon"></i> {{ trans('Week Days') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('WorkingHours') }}"><i class="la la-home nav-icon"></i> {{ trans('Working Hours') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('WorkplaceTypes') }}"><i class="la la-home nav-icon"></i> {{ trans('Workplace Types') }}</a></li>

<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>
