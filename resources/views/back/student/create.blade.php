@extends('layouts.dashboard')

@section('content')
<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            ছাত্র ভর্তি
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
        নতুন ছাত্র ভর্তি করুন
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
            

            <form action="{{ route('admission.store') }}" method="POST">
                @csrf

                <div class="grid grid-cols-2 md:grid-cols-1 gap-3 mb-3">
                    <div class="col-span-2">
                        <input class="w-full border p-3" name="name" type="text" placeholder="পুর্ণ নাম" />
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                    <div class="col-span-1">
                        <select class="select text-md " name="year_id">
                            @foreach ($years as $year)
                            <option value="{{ $year->id }}">{{ $year->year }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger mb-3">{{ $errors->first('year_id') }}</small>
                    </div>
                    <div class="col-span-1">
                        <select class="select text-md " name="sector_id">
                            @foreach ($sectors as $sector)
                            <option value="{{ $sector->id }}">{{ $sector->sector }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger mb-3">{{ $errors->first('sector_id') }}</small>
                    </div>
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="form_no" type="text" placeholder="ভর্তি ফরম নং" />
                    </div>
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="birth_day" type="text" placeholder="জন্ম তারিখ" />
                        
                    </div>
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="father_name" type="text" placeholder="বাবার নাম" />
                        
                    </div>
                    
                    
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="phone" type="text" placeholder="মোবাইল নাম্বার" />
                    </div>
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="birth_no" type="text" placeholder="জন্ম নিবন্ধন নং" />
                        
                    </div>
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="nid_no" type="text" placeholder="আই ডি নং" />
                        
                    </div>
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="village" type="text" placeholder="গ্রাম" />
                        
                    </div>
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="post" type="text" placeholder="পোস্ট অফিস" />
                        
                    </div>
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="thana" type="text" placeholder="থানা" />
                        
                    </div>
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="zila" type="text" placeholder="জেলা" />
                        
                    </div>
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="phone_2" type="text" placeholder="মোবাইল নং ০২" />
                        
                    </div>
                    <div class="col-span-1">
                        <input class="w-full border p-3" name="phone_3" type="text" placeholder="মোবাইল নং ০৩" />
                        
                    </div>
                    
                </div>
            
                <button class="btn btn-primary w-full flex justify-center items-center text-md">ভর্তি কনফার্ম করুন</button>
            </form>
            
            </div>
      </div>
      
      
     </div>
    </div>
    <div class="col-span-1">
     <div class="flex flex-col gap-5 lg:gap-7.5">
      <div class="card">
       
       <div class="card-body flex flex-col gap-2.5">
        <div class="card-table overflow-x-scroll">
            <table class="table table-border align-middle text-gray-700 font-medium text-sm">
                <thead class="border">
                    <tr>
                        <th>
                            <span class="text-lg">ছাত্রের নাম</span>
                        </th>
                        <th>
                            <span class="text-lg">দাখেলা</span>
                        </th>

                        <th>
                            <span class="text-lg">প্রিন্ট</span>
                        </th>
                        
                    </tr>
                </thead>
                <tbody class="border">
                   
                    @foreach ($admissions as $admission)
                    <tr>
                        <td class="text-md">
                            {{ $admission->name }}
                       </td>
                       <td class="text-md">
                            {{ $admission->reg_id }}
                        </td>
                        <td class="text-md">
                            <a href="{{ route('vorti.pdf', $admission->reg_id) }}" class="btn btn-primary"><i class="ki-solid ki-document"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

      
       </div>
       
     </div>
    </div>
   </div>
@endsection