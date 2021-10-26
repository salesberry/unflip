@extends('admin/doctypes/layout')

@section('container')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
   <!--begin::Toolbar-->
   <div class="toolbar" id="kt_toolbar">
      <!--begin::Container-->
      <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
         <!--begin::Page title-->
         <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">              
               <!--begin::Separator-->
               <span class="h-20px border-gray-200 border-start ms-3 mx-2">
                Create Item Category
               </span>               
            </h1>
            <!--end::Title-->
         </div>
         <!--end::Page title-->
         <!--begin::Actions-->
         <div class="d-flex align-items-center py-1">        
            <a href="{{url('admin/doctype/ItemCategories')}}" class="btn btn-sm btn-success" id="kt_toolbar_primary_button">GO BACK</a>            
         </div>
         <!--end::Actions-->
      </div>
      <!--end::Container-->
   </div>
   <!--end::Toolbar-->
   <!--begin::Post-->
   <div class="post d-flex flex-column-fluid" id="kt_post">
      <div id="kt_content_container" class="container-xl">
        <div class="row gy-5 g-xl-8">           
            <div class="col-xl-12">
                <!--begin::List Widget 3-->
                <div class="card card-xl mb-xl-8">
                   
                    <div class="card-body pt-2">   
                        <form class="form mt-4" action="{{route('ItemCategories.store')}}" method="POST">
                            @csrf
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-3">
                                    <span class="required">Category Name</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Add Name of the Category For item"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control" required placeholder="Item Category Name" name="category_name" style="background-color: #ffffff !important; border: 1px solid #e9e9e9; border-radius: 4px; padding: 12px;" />
                                @error('category_name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-3">
                                    <span class="required">Category Slug</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Add Url Friendly Slug of the Category For item"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" required placeholder="Item Category Slug" name="category_slug" style="background-color: #ffffff !important; border: 1px solid #e9e9e9; border-radius: 4px; padding: 12px;" />
                                @error('category_slug')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-3">
                                    <span class="required">Description</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Add Name of the Category For item"></i>
                                </label>
                                <!--end::Label-->
                                <textarea type="text" class="form-control form-control-solid" placeholder="Item Category Description" name="category_desc" style="background-color: #ffffff !important; border: 1px solid #e9e9e9; border-radius: 4px; padding: 12px;" ></textarea>
                            </div>
                            <div class="text-left pt-2">                                
                                <button type="submit" name="submit" class="btn btn-primary" style="border-radius: 4px ">
                                    <span class="indicator-label">Add Category</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:List Widget 3-->
            </div>
        </div>
     </div>
   </div>
   <!--end::Post-->
</div>


@endsection
