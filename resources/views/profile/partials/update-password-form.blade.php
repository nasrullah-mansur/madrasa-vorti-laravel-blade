<section>
    

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')


        <div class="form-input">
            <label class="text-md pl-1 pb-2" for="update_password_current_password">আপনার আগের পাসওয়ার্ডটি লিখুন</label>
            <input id="update_password_current_password" class="w-full border p-3" name="current_password" type="password" placeholder="এখানে লিখুন">
            <small class="text-danger block mb-3">{{ $errors->first('current_password') }}</small>
        </div>

        <div class="form-input">
            <label class="text-md pl-1 pb-2" for="update_password_password">নতুন পাসওয়ার্ডটি লিখুন</label>
            <input id="update_password_password" class="w-full border p-3" name="password" type="password" placeholder="এখানে লিখুন">
            <small class="text-danger block mb-3">{{ $errors->first('password') }}</small>
        </div>

        <div class="form-input">
            <label class="text-md pl-1 pb-2" for="update_password_password_confirmation">নতুন পাসওয়ার্ডটি পুনরায় লিখুন</label>
            <input id="update_password_password_confirmation" class="w-full border p-3" name="password_confirmation" type="password" placeholder="এখানে লিখুন">
            <small class="text-danger block mb-3">{{ $errors->first('password_confirmation') }}</small>
        </div>

        <button class="text-md bg-primary text-light py-1 px-4 rounded">পাসওয়ার্ড সেভ করুন</button>
    </form>
</section>
