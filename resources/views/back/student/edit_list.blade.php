@extends('layouts.dashboard')

@section('content')
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            ছাত্র তথ্য
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
       ভর্তি ছাত্রদেরর তথ্য
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
        <table class="table table-border align-middle text-gray-700 font-medium text-sm">
            <thead class="border">
                <tr>
                    <th>
                        <span class="text-lg">ক্রমিক</span>
                    </th>
                    <th>
                        <span class="text-lg">ছাত্রের নাম</span>
                    </th>
                    <th>
                        <span class="text-lg">দাখেলা</span>
                    </th>
                    <th>
                        <span class="text-lg">ভর্তি গ্রাহক</span>
                    </th>
                    <th>
                        <span class="text-lg">একশন</span>
                    </th>
                    
                </tr>
            </thead>
            <tbody class="border">
               
                @forelse ($admissions as $admission)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $admission->name }}</td>
                    <td>{{ $admission->reg_id }}</td>
                    <td>{{ $admission->user->name }}</td>
                    <td>
                        <a href="{{ route('admission.edit', $admission->reg_id) }}" class="btn btn-primary text-md">এডিট করুন / তথ্য দেখুন</a>
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

    <div class="col-span-2 md:col-span-3">
        


     <div class="flex flex-col gap-5 lg:gap-7.5">
      <div class="card min-w-full">
        <div class="card-body flex flex-col gap-2.5">
            <form action="{{ route('admission.find') }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-3 mb-3">
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="r_id" type="text" placeholder="দাখেলা নাম্বার" />
                    </div>
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="phone" type="text" placeholder="মোবাইল নাম্বার" />
                        
                    </div>
                </div>
            
                <button class="btn btn-primary text-md">চেক করুন</button>
            </form>
            
            </div>
      </div>
      
      
     </div>
    </div>
    
   </div>
@endsection