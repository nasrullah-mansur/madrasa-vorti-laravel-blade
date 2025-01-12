@extends('layouts.dashboard')

@section("content")
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            সকল মাসসমূহ
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
            মাসসমূহ হালনাগাত করুন
        </div>
    </div>
    
    <div class="flex items-center gap-2.5">
        <a href="{{ route('month.create') }}" class="btn btn-lg btn-light">
            <div class="text-md">নতুন মাস তৈরী করুন</div>
        </a>
    </div>
    
    
</div>
<div class="card min-w-full">
    
    <div class="card-table overflow-x-scroll">
        <table class="table table-border align-middle text-gray-700 font-medium text-sm">
            <thead>
                <tr>
                    <th>
                        <span class="text-lg">মাসসমূহ</span>
                    </th>
                    <th>
                        <span class="text-lg">বর্ষ</span>
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
                @forelse ($months as $month)
                <tr>
                    <td class="text-md">
                         {{ $month->month }}
                    </td>
                    <td class="text-md">
                         {{ $month->year->year }}
                    </td>
                    <td class="text-md">
                        {{ $month->created_at->diffForHumans() }}
                    </td>
                    <td class="text-md">
                        {{ $month->updated_at->diffForHumans() }}
                    </td>
                    <td class="text-md">
                        <div class="flex">
                            <a href="{{ route('month.edit', $month->id) }}" class="bg-primary edit-btn py-1 px-3 text-light rounded-sm">এডিট</a>
                            <div style="width: 5px;"> </div>
                            <a onclick="confirm('Are you sure you want to delete it permanently? ')" href="{{ route('month.delete', $month->id) }}" class="bg-danger delete-btn py-1 px-3 text-light rounded-sm">ডিলিট</a>
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
