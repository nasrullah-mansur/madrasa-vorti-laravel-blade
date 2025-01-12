<header class="header fixed top-0 z-10 start-0 end-0 flex items-center justify-end bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]" data-sticky="true" data-sticky-class="shadow-sm" data-sticky-name="header" id="header">
    <!-- Container -->
    <div class="container-fixed flex items-center justify-end lg:gap-4" id="header_container">
     <!-- Mobile Logo -->
     <div class="flex gap-1 lg:hidden items-center -ms-1">
      <a class="" href="html/demo1.html">
       <img class="max-h-[25px] w-full" src="assets/media/app/mini-logo.svg"/>
      </a>
      <div class="flex items-center">
       <button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#sidebar">
        <i class="ki-filled ki-menu">
        </i>
       </button>
       <button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#mega_menu_wrapper">
        <i class="ki-filled ki-burger-menu-2">
        </i>
       </button>
      </div>
     </div>
     <!-- End of Mobile Logo -->
     <!--Megamenu Contaoner-->
     
     <!--End of Megamenu Contaoner-->
     <!-- Topbar -->
     <div class="flex items-center gap-2 lg:gap-3.5">
      
      <div class="menu" data-menu="true">
       <div class="menu-item" data-menu-item-offset="20px, 10px" data-menu-item-offset-rtl="-20px, 10px" data-menu-item-placement="bottom-end" data-menu-item-placement-rtl="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
        <div class="menu-toggle btn btn-icon rounded-full">
         <img alt="" class="size-9 rounded-full border-2 border-success shrink-0" src="assets/media/avatars/300-2.png">
         </img>
        </div>
        <div class="menu-dropdown menu-default light:border-gray-300 w-screen max-w-[250px]">
         <div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
          <div class="flex items-center gap-2">
           <img alt="" class="size-9 rounded-full border-2 border-success" src="assets/media/avatars/300-2.png">
            <div class="flex flex-col gap-1.5">
             <span class="text-sm text-gray-800 font-semibold leading-none">
              Cody Fisher
             </span>
             <a class="text-xs text-gray-600 hover:text-primary font-medium leading-none" href="html/demo1/account/home/get-started.html">
              c.fisher@gmail.com
             </a>
            </div>
           </img>
          </div>
          
         </div>
         <div class="menu-separator">
         </div>
         <div class="flex flex-col">
          
          <div class="menu-item">
           <a class="menu-link" href="html/demo1/account/home/user-profile.html">
            <span class="menu-icon">
             <i class="ki-filled ki-profile-circle">
             </i>
            </span>
            <span class="menu-title">
             My Profile
            </span>
           </a>
          </div>
          
         </div>
         
         <div class="flex flex-col">
          
          <div class="menu-item px-4 py-1.5">
           <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger flex justify-center items-center w-full">Log Out</button>
           </form>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- End of Topbar -->
    </div>
    <!-- End of Container -->
   </header>