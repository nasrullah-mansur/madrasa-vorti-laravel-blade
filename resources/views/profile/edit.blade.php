@extends('layouts.dashboard')

@section("content")
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            আমার একাউন্ট
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
            আমার একাউন্ট
        </div>
    </div>
    
    <div class="flex items-center gap-2.5">
        <a href="{{ route('user.index') }}" class="btn btn-lg btn-light">
            <div class="text-md">সকল ব্যবহারকারী দেখুন</div>
        </a>
    </div>
    
    
</div>
<div class="card min-w-full">
    <div class="">
        <div class="modal-header">
            <h3 class="modal-title">
                আমার একাউন্ট আপডেট
            </h3>
        </div>
        <div class="modal-body mb-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
    
               
    
            </div>
        </div>

        <hr>
        <div class="modal-header">
            <h3 class="modal-title">
                আমার পাসওয়ার্ড আপডেট
            </h3>
        </div>
        <div class="modal-body mb-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                
    
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div>




@endsection
