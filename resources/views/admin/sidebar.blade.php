<div class="drawer">
   <input id="my-drawer" type="checkbox" class="drawer-toggle" />
   <div class="drawer-content">
     <!-- Page content here -->
   </div> 
   <div class="drawer-side">
     <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
     <ul class="menu p-4 w-60 min-h-full bg-base-200 text-base-content pt-20">
       <!-- Sidebar content here -->
       <li><a href="{{ route('admin-dashboard') }}"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>
       <li><a href="#"><i class="fa-solid fa-qrcode"></i>Scan Check in</a></li>
       <li><a href="{{ url('mygor/' . 1) }}"><i class="fa-solid fa-screwdriver-wrench"></i>Manage My GOR</a></li> {{-- {{ url('mygor/' . Auth::user()->id) }} --}}
       <li><a href="{{ route('admin-dashboard') }}"><i class="fa-solid fa-calculator"></i>Accounting</a></li>
       
     </ul>
   </div>
 </div>