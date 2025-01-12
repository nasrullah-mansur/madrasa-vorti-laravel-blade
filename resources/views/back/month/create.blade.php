@extends('layouts.dashboard')

@section("content")
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            নতুন একটি মাস
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
            নতুন একটি মাস তৈরী করুন
        </div>
    </div>
    
    <div class="flex items-center gap-2.5">
        <a href="{{ route('month.index') }}" class="btn btn-lg btn-light">
            <div class="text-md">সকল মাস দেখুন</div>
        </a>
    </div>
    
    
</div>
<div class="card min-w-full">
    <div class="">
        <div class="modal-header">
            <h3 class="modal-title">
                নতুন একটি মাস তৈরী
            </h3>
        </div>
        <div class="modal-body mb-5">
            <form action="{{ route('month.store') }}" method="POST">
                @csrf
                <input class="w-full border p-3" name="month" type="text" placeholder="একটি মাসের নাম লিখুন">
                <small class="text-danger block mb-3">{{ $errors->first('month') }}</small>

                <select class="select text-md" name="year_id">
                    <option selected disabled>একটি বর্ষ সিলেক্ট করুন</option>
                    @foreach ($years as $year)
                    <option value="{{ $year->id }}">{{ $year->year }}</option>
                    @endforeach
                </select>
                   <small class="text-danger block mb-3">{{ $errors->first('year_id') }}</small>
                <button class="text-md bg-primary text-light py-1 px-4 rounded">নতুন একটি মাস তৈরী করুন</button>
            </form>
        </div>
    </div>
</div>




@endsection
