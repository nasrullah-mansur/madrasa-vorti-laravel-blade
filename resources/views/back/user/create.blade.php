@extends('layouts.dashboard')

@section("content")
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            নতুন ব্যবহারকারী
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
        একজন নতুন ব্যবহারকারী তৈরী করুন
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
                নতুন ব্যবহারকারী তৈরী
            </h3>
        </div>
        
        <div class="modal-body mb-5">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="form-input">
                    <label class="text-md pl-1 pb-2" for="name">পূর্ণ নাম লিখুন</label>
                    <input id="name" class="w-full border p-3" name="name" type="text" placeholder="এখানে লিখুন">
                    <small class="text-danger block mb-3">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-input">
                    <label class="text-md pl-1 pb-2" for="phone">মোবাইল নং লিখুন</label>
                    <input id="phone" class="w-full border p-3" name="phone" type="text" placeholder="এখানে লিখুন">
                    <small class="text-danger block mb-3">{{ $errors->first('phone') }}</small>
                </div>
                <div class="form-input">
                    <label class="text-md pl-1 pb-2" for="email">ইমেইল লিখুন</label>
                    <input id="email" class="w-full border p-3" name="email" type="text" placeholder="এখানে লিখুন">
                    <small class="text-danger block mb-3">{{ $errors->first('email') }}</small>
                </div>

                <label class="text-md pl-1 pb-2" for="email">একটি রোল সিলেক্ট করুন</label>
                <select class="select text-md mb-3" name="role">
                    <option value="{{ USER_ROLE }}">{{ USER_ROLE }}</option>
                    <option value="{{ ADMIN_ROLE }}">{{ ADMIN_ROLE }}</option>
                </select>
                
                <label class="text-md pl-1 pb-2" for="email">একটি স্টাটাস সিলেক্ট করুন</label>
                <select class="select text-md mb-3" name="status">
                    <option value="{{ STATUS_ACTIVE }}">{{ STATUS_ACTIVE }}</option>
                    <option value="{{ STATUS_INACTIVE }}">{{ STATUS_INACTIVE }}</option>
                </select>
                
                <button class="text-md bg-primary text-light py-1 px-4 rounded">নতুন ব্যবহারকারী তৈরী করুন</button>
            </form>
        </div>
    </div>
</div>




@endsection
