<span class=" text-white text-4xl top-5 left-4 cursor-pointer" onclick="Openbar()">
    <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
  </span>
  <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000
    p-2 w-[270px] overflow-y-auto text-center bg-gray-900 shadow h-screen">
    <div class="text-gray-100 text-xl">
      <div class="p-2.5 mt-1 flex items-center rounded-md ">
        <i class="bi bi-app-indicator px-2 py-1 bg-blue-600 rounded-md"></i>
        <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold">API-Client bar</h1>
        <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
      </div>
      <hr class="my-2 text-gray-600">

      <div>
        <div class="p-2.5 mt-3 flex items-center rounded-md 
        px-4 duration-300 cursor-pointer  bg-gray-700">
          <i class="bi bi-search text-sm"></i>
          <input class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" placeholder="Search" />
        </div>

      
        <a href="{{route("jobs.index")}}">
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer @if(Route::is("jobs.index")) bg-blue-600 @else   hover:bg-blue-600" @endif>
          <i class="bi bi-bookmark-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200">Banen</span>
        </div></a>

        <a href="{{route("countries.index")}}">
          <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer @if(Route::is("countries.index")) bg-blue-600 @else hover:bg-blue-600" @endif>
            <i class="bi bi-bookmark-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200">Landen</span>
          </div></a>
  
        <a href="{{route("locations.index")}}">
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer @if(Route::is("locations.index")) bg-blue-600 @else hover:bg-blue-600 @endif">
          <i class="bi bi-bookmark-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200">Locaties</span>
        </div>
      </a>
      
        <a href="{{route("employees.index")}}">
          <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer @if(Route::is("employees.index")) bg-blue-600  @else hover:bg-blue-600 @endif ">
            <i class="bi bi-bookmark-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200">Werknemers</span>
          </div></a>
        <hr class="my-4 text-gray-600">
        
       
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <i class="bi bi-box-arrow-in-right"></i>
          <span class="text-[15px] ml-4 text-gray-200">Uitloggen</span>
        </div>

      </div>
    </div>
  </div>

 