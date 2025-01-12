@extends('layouts.dashboard')

@section("content")
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            নতুন শিক্ষাবর্ষ
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
            নতুন শিক্ষাবর্ষ তৈরী করুন
        </div>
    </div>
    
    <div class="flex items-center gap-2.5">
        <a href="{{ route('year.index') }}" class="btn btn-lg btn-light">
            <div class="text-md">সকল শিক্ষাবর্ষ দেখুন</div>
        </a>
    </div>
    
    
</div>
<div class="card min-w-full">
    <div class="">
        <div class="modal-header">
            <h3 class="modal-title">
                নতুন শিক্ষাবর্ষ তৈরী
            </h3>
        </div>
        <div class="modal-body mb-5">
            <form action="{{ route('year.store') }}" method="POST">
                @csrf
                <input class="w-full border p-3" name="year" type="text" placeholder="শিক্ষাবর্ষ লিখুন">
                <small class="text-danger block mb-3">{{ $errors->first('year') }}</small>
                <button class="text-md bg-primary text-light py-1 px-4 rounded">নতুন শিক্ষাবর্ষ তৈরী করুন</button>
            </form>
        </div>
    </div>
</div>




@endsection
