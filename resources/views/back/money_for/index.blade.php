@extends('layouts.dashboard')

@section("content")
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            আয় বাবদ
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
            আয়ের বাবদ সমুহ
        </div>
    </div>
    
    <div class="flex items-center gap-2.5">
        <a href="{{ route('money.for.create') }}" class="btn btn-lg btn-light">
            <div class="text-md">নতুন বাবাদ তৈরী করুন</div>
        </a>
    </div>
    
    
</div>
<div class="card min-w-full">
    
    <div class="card-table overflow-x-scroll">
        <table class="table table-border align-middle text-gray-700 font-medium text-sm">
            <thead>
                <tr>
                    <th>
                        <span class="text-lg">বাবদ নির্ধারণ</span>
                    </th>

                    <th>
                        <span class="text-lg">স্টাটাস</span>
                    </th>
                    
                    <th>
                        <span class="text-lg">একশন</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($money_fors as $money_for)
                <tr>
                    <td class="text-md">
                         {{ $money_for->name }}
                    </td>
                    <td class="text-md">
                         {{ $money_for->status }}
                    </td>
                    
                    <td class="text-md">
                        <div class="flex">
                            <a href="{{ route('money.for.edit', $money_for->id) }}" class="bg-primary edit-btn py-1 px-3 text-light rounded-sm">এডিট</a>
                        </div>
                    </td>
                </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">কোনো তথ্য পাওয়া যায় নি</td>
                    </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
</div>



@endsection
