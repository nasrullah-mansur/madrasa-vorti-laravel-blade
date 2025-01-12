@extends('layouts.dashboard')

@section('content')
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            ছাত্র ভর্তি
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
        আমার মাধ্যমে ভর্তি হওয়া ছাত্র
        </div>
    </div>
    
    <div class="flex items-center gap-2.5">
        <a href="{{ route('admission.create') }}" class="btn btn-lg btn-light">
            <div class="text-md">নতুন ছাত্র ভর্তি করুন</div>
        </a>
    </div>
    
    
</div>
<div class="grid grid-cols-1 xl:grid-cols-3 gap-5 lg:gap-7.5">
    <div class="col-span-2 md:col-span-3">
     <div class="flex flex-col gap-5 lg:gap-7.5">
      <div class="card min-w-full">
        <div class="card-body flex flex-col gap-2.5">
            <div class="card-table overflow-x-scroll">
                <table class="table table-border align-middle text-gray-700 font-medium text-sm">
                    <thead class="border">
                        <tr>
                            <th>
                                <span class="text-lg">ক্র:</span>
                            </th>
                            <th>
                                <span class="text-lg">ছাত্রের নাম</span>
                            </th>
                            <th>
                                <span class="text-lg">দাখেলা</span>
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody class="border">
                        @php
                            $currentPage = $admissions->currentPage(); // Get the current page number
                        @endphp
                       
                        @foreach ($admissions as $admission)
                        <tr>
                            <td class="text-md">
                                {{ ($currentPage - 1) * 10 + $loop->iteration }}
                           </td>
                            <td class="text-md">
                                {{ $admission->name }}
                           </td>
                           <td class="text-md">
                                {{ $admission->reg_id }}
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
               
                {{ $admissions->links() }}
            </div>
            
            </div>
      </div>
      
      
     </div>
    </div>
    
   </div>
@endsection