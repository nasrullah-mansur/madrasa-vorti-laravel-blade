@extends('layouts.dashboard')

@section("content")
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            বিভাগ এডিট
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
            বিভাগ এডিট করুন
        </div>
    </div>
    
    <div class="flex items-center gap-2.5">
        <a href="{{ route('sector.index') }}" class="btn btn-lg btn-light">
            <div class="text-md">সকল বিভাগ দেখুন</div>
        </a>
    </div>
    
    
</div>
<div class="card min-w-full">
    <div class="">
        <div class="modal-header">
            <h3 class="modal-title">
                বিভাগ এডিট
            </h3>
        </div>
        <div class="modal-body mb-5">
            <form action="{{ route('sector.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $sector->id }}">
                <input value="{{ $sector->sector }}" class="w-full border p-3" name="sector" type="text" placeholder="শিক্ষাবর্ষ লিখুন">
                <small class="text-danger block mb-3">{{ $errors->first('sector') }}</small>
                <br>
                <select class="select text-md" name="year_id">
                    <option selected disabled>একটি বর্ষ সিলেক্ট করুন</option>
                    @foreach ($years as $year)
                    <option value="{{ $year->id }}">{{ $year->year }}</option>
                    @endforeach
                </select>
                <br>
                <input value="{{ $sector->prefix }}" class="w-full border p-3" name="prefix" type="text" placeholder="প্রিফিক্স লিখুন">
                <small class="text-danger block mb-3">{{ $errors->first('prefix') }}</small>
                <button class="text-md bg-primary text-light py-1 px-4 rounded">বিভাগ এডিট করুন</button>
            </form>
        </div>
    </div>
</div>
@endsection
