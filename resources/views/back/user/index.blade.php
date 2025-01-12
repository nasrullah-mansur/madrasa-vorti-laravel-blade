@extends('layouts.dashboard')

@section("content")
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            সকল ব্যবহারকারী
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
            সকল ব্যবহারকারী হালনাগাত করুন
        </div>
    </div>
    
    <div class="flex items-center gap-2.5">
        <a href="{{ route('user.create') }}" class="btn btn-lg btn-light">
            <div class="text-md">নতুন ব্যবহারকারী তৈরী করুন</div>
        </a>
    </div>
    
    
</div>
<div class="card min-w-full">
    
    <div class="card-table overflow-x-scroll">
        <table class="table table-border align-middle text-gray-700 font-medium text-sm">
            <thead>
                <tr>
                    <th>
                        <span class="text-lg">ক্র:</span>
                    </th>
                    <th>
                        <span class="text-lg">নাম</span>
                    </th>
                    <th>
                        <span class="text-lg">মোবাইল নং</span>
                    </th>
                    <th>
                        <span class="text-lg">ইমেইল</span>
                    </th>
                    <th>
                        <span class="text-lg">রোল</span>
                    </th>
                    <th>
                        <span class="text-lg">স্টাটাস</span>
                    </th>
                    <th>
                        <span class="text-lg">তৈরীর তারিখ</span>
                    </th>
                    <th>
                        <span class="text-lg">আপডেটের তারিখ</span>
                    </th>
                    <th>
                        <span class="text-lg">স্টাটাস</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td class="text-md">
                         {{ $loop->iteration }}
                    </td>
                    <td class="text-md">
                        {{ $user->name }}
                    </td>
                    <td class="text-md">
                        {{ $user->phone }}
                    </td>
                    <td class="text-md">
                        {{ $user->email }}
                    </td>
                    <td class="text-md">
                        {{ $user->role }}
                    </td>
                    <td class="text-md">
                        <form action="{{ route('user.status.change') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <button class="btn btn-sm {{ $user->status === STATUS_ACTIVE ? "btn-primary" : 'btn-danger' }}">
                                {{ $user->status === STATUS_ACTIVE ? "Active" : "Inactive" }}
                            </button>
                        </form>
                    </td>
                    <td class="text-md">
                        {{ $user->created_at->diffForHumans() }}
                    </td>
                    <td class="text-md">
                        {{ $user->created_at->diffForHumans() }}
                    </td>
                    <td class="text-md">
                        <div class="flex">
                            <a onclick="confirm('Are you sure you want to delete it permanently? ')" href="{{ route('user.delete', $user->id) }}" class="btn btn-md btn-danger">ডিলিট</a>
                        </div>
                    </td>
                </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">কোনো তথ্য পাওয়া যায় নি</td>
                    </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
</div>



@endsection
