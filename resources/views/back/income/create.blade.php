@extends('layouts.dashboard')

@section("content")
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            নগদ আদায়
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
            একটি নগদ টাকা গ্রহণ করুন
        </div>
    </div>
    
    <div class="flex items-center gap-2.5">
        <a href="{{ route('money.for.index') }}" class="btn btn-lg btn-light">
            <div class="text-md">সকল বাবদ দেখুন</div>
        </a>
    </div>
    
    
</div>
<div class="grid md:grid-cols-2 gap-5">

    <div class="card min-w-full">
        
                <div class="modal-header">
                    <h3 class="modal-title">
                        নগদ টাকা গ্রহণ করুন
                    </h3>
                </div>
                <div class="modal-body mb-5">
                    <form action="{{ route('income.store') }}" method="POST">
                        @csrf
                        <input type="text" name="admission_id" value="{{ $student->id }}">
                        <input type="text" name="reg_id" value="{{ $student->reg_id }}">
                        <label class="text-md pl-1 pb-2" for="email">বাবদ সিলেক্ট করুন</label>
                        <select class="select text-md mb-3" name="money_for_id">
                            @foreach ($money_fors as $money_for)
                            <option value="{{ $money_for->id }}">{{ $money_for->name }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger block mb-3">{{ $errors->first('money_for_id') }}</small>
                      
                        <label class="text-md pl-1 pb-2" for="email">মাস সিলেক্ট করুন</label>
                        <select class="select text-md mb-3" name="month_id">
                            @foreach ($months as $month)
                            <option value="{{ $month->id }}">{{ $month->month }} - {{ $month->year->year }}</option>
                            @endforeach 
                        </select>
                        <small class="text-danger block mb-3">{{ $errors->first('month_id') }}</small>
                       
                        <label class="text-md pl-1 pb-2" for="email">পরিমাণ লিখুন</label>
                        <input class="w-full border p-3" name="amount" type="text" placeholder="এখানে লিখুন">
                        <small class="text-danger block mb-3">{{ $errors->first('amount') }}</small>
                     
                        <label class="text-md pl-1 pb-2" for="email">পরিমাণটি আবার লিখুন</label>
                        <input class="w-full border p-3" name="confirm_amount" type="text" placeholder="এখানে লিখুন">
                        <small class="text-danger block mb-3">{{ $errors->first('confirm_amount') }}</small>
                       
                        
                        <button class="text-md bg-primary text-light py-1 px-4 rounded">টাকা জমা গ্রহণ করুন</button>
                    </form>
                </div>
            
    </div>
    <div class="card min-w-full">
        
                <div class="modal-header">
                    <h3 class="modal-title">
                        টাকা প্রদানকারির তথ্য
                    </h3>
                </div>
                <div class="modal-body mb-5">
                    <table class="table table-border align-middle text-gray-700 font-medium text-sm">
                        <tr>
                            <td>নাম</td>
                            <td>{{ $student->name }}</td>
                        </tr>
                        <tr>
                            <td>পিতার নাম</td>
                            <td>{{ $student->father_name }}</td>
                        </tr>
                        <tr>
                            <td>দাখেলা নং</td>
                            <td>{{ $student->reg_id }}</td>
                        </tr>
                        <tr>
                            <td>কোন বর্ষে পড়ে</td>
                            <td>{{ $student->sector->sector }}</td>
                        </tr>
                        <tr>
                            <td>ফোন নং</td>
                            <td>{{ $student->phone }}</td>
                        </tr>
                    </table>
                </div>
            
    </div>
</div>




@endsection
