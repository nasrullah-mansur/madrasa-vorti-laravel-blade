@extends('layouts.dashboard')

@section('content')

<div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
    <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-gray-900">
            ভর্তি তথ্য
        </h1>

        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
            ভর্তি তথ্য আপডেট
        </div>
    </div>

    <div class="flex items-center gap-2.5">
        <a href="{{ route('admission.create') }}" class="btn btn-lg btn-light">
            <div class="text-md">নতুন ছাত্র ভর্তি করুন</div>
        </a>
    </div>
</div>
<div class="grid md:grid-cols-2 gap-5 lg:gap-7.5">
    <div class="md:col-span-1">
        <div class="flex flex-col gap-5 lg:gap-7.5">
            <div class="card min-w-full">
                <div class="card-body flex flex-col gap-2.5">
                    <div class="flex justify-between">
                        <a href="#" class="btn btn-primary text-md">ভর্তি তথ্য ডাউনলোড</a>
                        <label class="switch justify-end">
                            <span class="switch-label text-lg">
                                ছাত্রের তথ্য পরিবর্তন করুন
                            </span>
                            <input id="mySwitch" name="check" type="checkbox" />
                        </label>
                    </div>
                    
                    <form class="my_form" action="{{ route('admission.update', $admission->id) }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 md:grid-cols-1 gap-3 mb-3">
                            <div class="col-span-2">
                                <input value="{{ $admission->name }}" class="w-full border p-3" name="name" type="text" placeholder="পুর্ণ নাম" />
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </div>
                            <div class="col-span-1">
                                <select class="select text-md" name="year_id">
                                    @foreach ($years as $year)
                                    <option {{ $year->id == $admission->year_id ? 'selected' : "" }} value="{{ $year->id }}">{{ $year->year }}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger mb-3">{{ $errors->first('year_id') }}</small>
                            </div>
                            <div class="col-span-1">
                                <select class="select text-md" name="sector_id">
                                    @foreach ($sectors as $sector)
                                    <option {{ $sector->id == $admission->sector_id ? 'selected' : "" }} value="{{ $sector->id }}">{{ $sector->sector }}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger mb-3">{{ $errors->first('sector_id') }}</small>
                            </div>
                            <div class="col-span-1">
                                <input value="{{ $admission->form_no }}" class="w-full border p-3" name="form_no" type="text" placeholder="ভর্তি ফরম নং" />
                                <small class="text-danger mb-3">{{ $errors->first('form_no') }}</small>
                            </div>
                            <div class="col-span-1">
                                <input value="{{ $admission->birth_day }}" class="w-full border p-3" name="birth_day" type="text" placeholder="জন্ম তারিখ" />
                            </div>
                            <div class="col-span-1">
                                <input value="{{ $admission->father_name }}" class="w-full border p-3" name="father_name" type="text" placeholder="বাবার নাম" />
                            </div>

                            <div class="col-span-1">
                                <input value="{{ $admission->phone }}" class="w-full border p-3" name="phone" type="text" placeholder="মোবাইল নাম্বার" />
                            </div>
                            <div class="col-span-1">
                                <input value="{{ $admission->birth_no }}" class="w-full border p-3" name="birth_no" type="text" placeholder="জন্ম নিবন্ধন নং" />
                            </div>
                            <div class="col-span-1">
                                <input value="{{ $admission->nid_no }}" class="w-full border p-3" name="nid_no" type="text" placeholder="আই ডি নং" />
                            </div>
                            <div class="col-span-1">
                                <input value="{{ $admission->village }}" class="w-full border p-3" name="village" type="text" placeholder="গ্রাম" />
                            </div>
                            <div class="col-span-1">
                                <input value="{{ $admission->post }}" class="w-full border p-3" name="post" type="text" placeholder="পোস্ট অফিস" />
                            </div>
                            <div class="col-span-1">
                                <input value="{{ $admission->thana }}" class="w-full border p-3" name="thana" type="text" placeholder="থানা" />
                            </div>
                            <div class="col-span-1">
                                <input value="{{ $admission->zila }}" class="w-full border p-3" name="zila" type="text" placeholder="জেলা" />
                            </div>
                            <div class="col-span-1">
                                <input value="{{ $admission->phone_2 }}" class="w-full border p-3" name="phone_2" type="text" placeholder="মোবাইল নং ০২" />
                            </div>
                            <div class="col-span-1">
                                <input value="{{ $admission->phone_3 }}" class="w-full border p-3" name="phone_3" type="text" placeholder="মোবাইল নং ০৩" />
                            </div>
                        </div>

                        <button class="btn btn-primary w-full flex justify-center items-center text-md">ভর্তি তথ্য আপডেট করুন</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="md:col-span-1">
        <div class="card min-w-full">
            <div class="card-body flex flex-col gap-2.5">
                <table class="table table-border align-middle text-gray-700 font-medium text-sm">
                    <thead class="border">
                        <tr>
                            <th>
                                <span class="text-lg">ক্রঃ</span>
                            </th>
                            <th>
                                <span class="text-lg">পরিমাণ</span>
                            </th>
    
                            <th>
                                <span class="text-lg">বাবদ</span>
                            </th>
    
                            <th>
                                <span class="text-lg">মাস</span>
                            </th>

                            <th>
                                <span class="text-lg">একশন</span>
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody class="border">
                       
                        @foreach ($incomes as $income)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $income->amount }}</td>
                                <td>{{ $income->money_for->name }}</td>
                                <td>{{ $income->month->month }}</td>
                                <td>
                                    <a href="{{ route('vorti.pdf', $admission->reg_id) }}" class="btn btn-primary"><i class="ki-solid ki-document"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('income.create', $admission->id) }}" class="w-full btn btn-primary flex items-center justify-center text-md">একটি আয় গ্রহণ করুন</a>
            </div>
        </div>
    </div>
</div>


@endsection

@push('js')
    <script>
        let elements = document.querySelectorAll('.my_form input, .my_form select, .my_form button');
        let switchBtn = document.getElementById('mySwitch');
        const toggleElements = (status) => elements.forEach(el => el.toggleAttribute('disabled', !status));
        switchBtn.addEventListener('change', () => toggleElements(switchBtn.checked));
        toggleElements(false); 
    </script>
@endpush