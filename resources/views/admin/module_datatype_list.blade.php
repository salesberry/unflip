@extends('admin/layout')

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
               @foreach ($module as $module)
               {{$module->module_name}}
               @endforeach
               <!--begin::Separator-->
               <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
               <!--end::Separator-->
               <!--begin::Description-->
               <small class="text-muted fs-7 fw-bold my-1 ms-1">#XRS-45670</small>
               <!--end::Description-->
            </h1>
            <!--end::Title-->
         </div>
         <!--end::Page title-->
         <!--begin::Actions-->
         <div class="d-flex align-items-center py-1">
            <!--begin::Wrapper-->
            <div class="me-4">
               <!--begin::Menu-->
               <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                  <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                  <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->Filter
               </a>
               <!--begin::Menu 1-->
               <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61484bf44d957">
                  <!--begin::Header-->
                  <div class="px-7 py-5">
                     <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                  </div>
                  <!--end::Header-->
                  <!--begin::Menu separator-->
                  <div class="separator border-gray-200"></div>
                  <!--end::Menu separator-->
                  <!--begin::Form-->
                  <div class="px-7 py-5">
                     <!--begin::Input group-->
                     <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Status:</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div>
                           <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61484bf44d957" data-allow-clear="true">
                              <option></option>
                              <option value="1">Approved</option>
                              <option value="2">Pending</option>
                              <option value="2">In Process</option>
                              <option value="2">Rejected</option>
                           </select>
                        </div>
                        <!--end::Input-->
                     </div>
                     <!--end::Input group-->
                     <!--begin::Input group-->
                     <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Member Type:</label>
                        <!--end::Label-->
                        <!--begin::Options-->
                        <div class="d-flex">
                           <!--begin::Options-->
                           <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                           <input class="form-check-input" type="checkbox" value="1" />
                           <span class="form-check-label">Author</span>
                           </label>
                           <!--end::Options-->
                           <!--begin::Options-->
                           <label class="form-check form-check-sm form-check-custom form-check-solid">
                           <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                           <span class="form-check-label">Customer</span>
                           </label>
                           <!--end::Options-->
                        </div>
                        <!--end::Options-->
                     </div>
                     <!--end::Input group-->
                     <!--begin::Input group-->
                     <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Notifications:</label>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                           <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                           <label class="form-check-label">Enabled</label>
                        </div>
                        <!--end::Switch-->
                     </div>
                     <!--end::Input group-->
                     <!--begin::Actions-->
                     <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                     </div>
                     <!--end::Actions-->
                  </div>
                  <!--end::Form-->
               </div>
               <!--end::Menu 1-->
               <!--end::Menu-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Button-->
            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
            <!--end::Button-->
         </div>
         <!--end::Actions-->
      </div>
      <!--end::Container-->
   </div>
   <!--end::Toolbar-->
   <!--begin::Post-->
   <div class="post d-flex flex-column-fluid" id="kt_post">
      <!--begin::Container-->      
      <div id="kt_content_container" class="container-xxl">
         <div class="row g-5 g-xl-8">   
            @foreach ($doctype_list_group as $item)   
            <div class="col-xl-4">        
               <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 30% auto; background-image: url({{asset('assets/media/svg/shapes')}}/{{$item->doctype_background}})">
                  <div class="card-header align-items-center border-0 mt-8">
                     <h3 class="card-title align-items-start flex-column">
                         <span class="fw-bolder mb-2 text-dark">{{$item->doctype_name}}</span>
                         <span class="text-muted fw-normal fs-7">{{$item->doctype_desc}}</span>
                     </h3>
                  </div>
                  <div class="card-body pt-4">               
                     <div class="menu menu-rounded menu-column menu-title-gray-700 menu-state-title-primary menu-active-bg-light-primary fw-bold">
                        @foreach($doctype_list[$item->doctype_id] as $doctype_item)
                        <?php
                           $tenantId=session()->get('TENANT_ID');
                           $docTypeTenatns=\Illuminate\Support\Facades\DB::table('doctype_tenants')
                                   ->where(['doc_type_id'=>$doctype_item->doctype_id])
                                   ->where(['tenant_id'=>$tenantId])
                                   ->first();
                           ?>
                           @if($docTypeTenatns)
                              <div class="menu-item mb-1">
                                 <a href="{{url('admin/doctype/'.$doctype_item->doctype_slug)}}" class="menu-link px-0 ">{{$doctype_item->doctype_name}}</a>
                              </div>
                           @endif
                        @endforeach
                     </div>
                  </div>           
               </div>         
            </div>    
            
         @endforeach  
         </div>  
      </div>
      <!--end::Container-->
   </div>
   <!--end::Post-->
</div>


@endsection
