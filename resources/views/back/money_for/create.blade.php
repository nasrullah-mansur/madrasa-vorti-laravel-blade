@extends('layouts.dashboard')

@section("content")
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            আয়ের বাবদ
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
            একটি নতুন আয়ের বাবদ তৈরী করুন
        </div>
    </div>
    
    <div class="flex items-center gap-2.5">
        <a href="{{ route('money.for.index') }}" class="btn btn-lg btn-light">
            <div class="text-md">সকল বাবদ দেখুন</div>
        </a>
    </div>
    
    
</div>
<div class="card min-w-full">
    <div class="">
        <div class="modal-header">
            <h3 class="modal-title">
                নতুন আয়ের বাবদ তৈরী করুন
            </h3>
        </div>
        <div class="modal-body mb-5">
            <form action="{{ route('money.for.store') }}" method="POST">
                @csrf
                <input class="w-full border p-3" name="name" type="text" placeholder="এখানে লিখুন">
                <small class="text-danger block mb-3">{{ $errors->first('name') }}</small>
                <br>
                <select class="select text-md mb-3" name="status">
                    <option value="{{ STATUS_ACTIVE }}">{{ STATUS_ACTIVE }}</option>
                    <option value="{{ STATUS_INACTIVE }}">{{ STATUS_INACTIVE }}</option>
                </select>
                <button class="text-md bg-primary text-light py-1 px-4 rounded">আয়ের বাবদ তৈরী করুন</button>
            </form>
        </div>
    </div>
</div>




@endsection
