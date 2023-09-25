@extends('backendviews.layouts.app')
@section('content')
@include('backendviews.layouts.navbar')
@include('backendviews.layouts.sidebar')

<main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light ">
      <div class="content content-full">
          <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-sm-fill h3 my-2">
                  Admins<small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"></small>
              </h1>
              <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                  <ol class="breadcrumb breadcrumb-alt">
                      <li class="breadcrumb-item">View Admin</li>
                      <li class="breadcrumb-item" aria-current="page">
                          <a style="color:black"href="{{ route('admins.index') }}">Admin</a>
                      </li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
  <!-- END Hero -->
  <div class="content">
  <div class="block block-rounded">
    <div class="block-header">
        
           <h3 class="block-title ">View Admin</h3>
        
         
      </div> 
       <div class="block-content block-content-full">
  
          <form action="{{ route('admins.show',$admin->id) }}" method="POST" >
              @csrf
              
              
          <!-- Name input -->
          <div class="form-outline mb-4 col-8">
            <label>Name</label>
              <input type="text"   name="name" readonly  value="{{ $admin->name }}" class="form-control form-control-lg"/>
</div>
      
                            
                            
            <!-- date input -->
            <div class="form-outline mb-4 col-8">
              <label>User Name</label>
              <input type="text"   name="user_name" readonly  value="{{ $admin->user_name}}" class="form-control form-control-lg"
                placeholder="Enter a date" />
            </div> 

            <div class="form-outline mb-4 col-8">
              <label>Mobile</label>
              <input type="text" maxlength="10" pattern="[6789][0-9]{9}"   name="mobile"  readonly value="{{ $admin->mobile}}" class="form-control form-control-lg"
                placeholder="Enter a valid mobile number" />
            </div>


            <div class="form-outline mb-4 col-8">
            <label>Email</label>
            <input type="email" maxlength="255"  pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" readonly value="{{ $admin->email}}" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
          
                              
               

            <div class="form-group pt-2">
              <a href="{{ Route('admins.index') }}"><button type="button" class="btn btn-secondary">Back</button></a>
              
          </div>

       </form>
       </div>


          <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
      </div></div>
      </div>
   
  </main>

  @endsection
