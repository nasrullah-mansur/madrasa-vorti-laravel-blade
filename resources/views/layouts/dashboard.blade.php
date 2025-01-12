<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" dir="ltr" lang="en">
    @include("back.components.head")
    <body class="antialiased flex h-full text-base text-gray-700 [--tw-page-bg:#fefefe] [--tw-page-bg-dark:var(--tw-coal-500)] demo1 sidebar-fixed header-fixed bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]">
        <!-- End of Theme Mode -->
        <!-- Page -->
        <!-- Main -->
        <div class="flex grow">
            <!-- Sidebar -->
            @include("back.components.sidebar")
            <!-- End of Sidebar -->
            <!-- Wrapper -->
            <div class="wrapper flex grow flex-col">
                <!-- Header -->
                @include("back.components.header")
                <!-- End of Header -->
                <!-- Content -->
                <main class="grow content pt-5" id="content" role="content">
                    <div class="container-fixed">
                        
                        @if(Session::has('success'))
                        <div class="bg-success p-3 rounded mb-3">
                            <p class="text-light">{{ Session::get('success') }}</p>
                        </div>
                        @endif

                        @if($errors->any())
                        <div class="bg-danger p-3 rounded mb-3">
                            <p class="text-light">
                            @if ($errors->has('error'))
                                {{$errors->first('error')}}
                            @else
                            কিছু একটা সমস্যা হয়েছে, আবার চেষ্টা করুন।
                            @endif 

                        </p>
                        </div>
                        @endif

                        @yield("content")
                    </div>
                </main>
                <!-- End of Content -->
                <!-- Footer -->
                @include("back.components.footer")
                <!-- End of Footer -->
            </div>
            <!-- End of Wrapper -->
        </div>
        <!-- End of Main -->

        <!-- End of Page -->
        <!-- Scripts -->
        @include("back.components.script")
        <!-- End of Scripts -->
    </body>
</html>
