@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <h1><b>Welcome to Cardiology System</b></h1>
    </div>

    <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><span class="text-gray-900 dark:text-white">Coronary Care Unit</span></div>
                </div>

                <div class="ml-12 mb-3">
                    <div class="mt-2 text-gray-700 dark:text-gray-400 text-sm">
                        Consist of 5 beds managing Acute Cardiac problems.
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><span class="text-gray-900 dark:text-white">General Cardiology Ward</span></div>
                </div>
                <div class="ml-12 mb-3">
                    <div class="mt-2 text-gray-700 dark:text-gray-400 text-sm">
                        Consist of 19 beds and managing adult and paediatric patients with heart diseases which need inward management.
                        There is no direct admissions to this ward. Patients are admitted to the bed status.
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><span class="text-gray-900 dark:text-white">Electrophysiology</span></div>
                </div>
                <div class="ml-12 mb-3">
                    <div class="mt-2 text-gray-700 dark:text-gray-400 text-sm">
                        Our unit has facilities to perform exercise ECGs. We also conduct Pacemaker Clinic with facilities for re-programming.
                        Holter Monitoring (24 Hour ECG) is also done. Patients will be admitted to the general cardiology ward for 24 hours during this test.
                    </div>
                </div>
            </div>
            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><span class="text-gray-900 dark:text-white">Catheterization Lab</span></div>
                </div>
                <div class="ml-12 mb-3">
                    <div class="mt-2 text-gray-700 dark:text-gray-400 text-sm">
                        We have the state of the art uniplanar catheterization lab providing care for adult and paediatric patients.
                        Both diagnostic and interventional procedures are performed routinely.
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><span class="text-gray-900 dark:text-white">Echocardiography Clinic</span></div>
                </div>
                <div class="ml-12 mb-3">
                    <div class="mt-2 text-gray-700 dark:text-gray-400 text-sm">
                        Adult and paediatric patients are seen in this clinic. Non urgent patients will be seen only by appoinments.
                        We have facilities to perform Transoesophageal echocardiogram. Foeetal echocardiographic assessment is done on request by the Obstetricians.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection