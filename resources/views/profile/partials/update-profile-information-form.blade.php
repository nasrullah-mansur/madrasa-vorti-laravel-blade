<section>
    

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')
        <div class="form-input">
            <label class="text-md pl-1 pb-2" for="name">পূর্ণ নাম</label>
            <input value="{{ $user->name }}" id="name" class="w-full border p-3" name="name" type="text" placeholder="এখানে লিখুন">
            <small class="text-danger block mb-3">{{ $errors->first('name') }}</small>
        </div>
        <div class="form-input">
            <label class="text-md pl-1 pb-2" for="phone">মোবাইল নং (অপরিবর্তনযোগ্য)</label>
            <input disabled value="{{ $user->phone }}" id="phone" class="w-full border p-3" name="phone" type="text" placeholder="এখানে লিখুন">
            <small class="text-danger block mb-3">{{ $errors->first('phone') }}</small>
        </div>
        <div class="form-input">
            <label class="text-md pl-1 pb-2" for="email">ইমেইল</label>
            <input value="{{ $user->email }}" id="email" class="w-full border p-3" name="email" type="text" placeholder="এখানে লিখুন">
            <small class="text-danger block mb-3">{{ $errors->first('email') }}</small>
        </div>

        <button class="text-md bg-primary text-light py-1 px-4 rounded">সেভ করুন</button>
        
    </form>
</section>
