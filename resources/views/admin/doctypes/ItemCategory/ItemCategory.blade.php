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
                  @foreach ($doctype as $doctype)
                  {{$doctype->doctype_name}}
                  @endforeach
               </span>               
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
            <a href="{{  route('ItemCategories.create')}}" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button">Create</a>
            <!--end::Button-->
         </div>
         <!--end::Actions-->
      </div>
      <!--end::Container-->
   </div>
   <!--end::Toolbar-->
   <!--begin::Post-->
   <div class="post d-flex flex-column-fluid" id="kt_post">
      <div id="kt_content_container" class="container-xxl">
        <div class="row gy-5 g-xl-8">           
            <div class="col-xl-12">
                <!--begin::Tables Widget 9-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                   
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-3">
                                <!--begin::Table head-->
                                
                                <thead class="categorythead">
                                    <!--begin::Table row-->
                                    <tr style="color:#3f4254" class="text-start fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="min-w-200px">Category Name</th>
                                        <th class="min-w-200px">Category Slug</th>
                                        <th class="min-w-100px">No of Items</th>
                                        <th class="min-w-300px">Category Description</th>                                        
                                        <th class="min-w-125px">Status</th>
                                        <th class="text-end min-w-90px">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                </div>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($data as $category_item)                                       
                                    
                                    <tr>                                        
                                        <td>
                                            <div class="d-flex align-items-center">                                             
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{$category_item->category_name}}</a>                                                  
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" style="color: #3f4254 !important; font-weight:400 !important" class="text-dark fw-bolder text-hover-primary d-block fs-6">{{$category_item->category_slug}}</a>                                            
                                        </td>
                                        <td>
                                            <a href="#" style="color: #3f4254 !important; font-weight:400 !important" class="text-dark fw-bolder text-hover-primary d-block fs-6">{{$category_item->no_of_item}}</a>                                            
                                        </td>
                                        <td>
                                            @if($category_item->category_desc == "")                                            
                                            <span style="color: #3f4254 !important; font-weight:400 !important" class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                                -
                                            </span>
                                            @else      
                                            <span style="color: #3f4254 !important; font-weight:400 !important" class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                                {{$category_item->category_desc}}
                                            </span> 
                                            @endif                                     
                                        </td>
                                        <td class="text-start">
                                            @if($category_item->status == 1)
                                            <span class="badge badge-light-success fs-8 fw-bolder">Active</span>
                                            @else
                                            <span class="badge badge-danger-success fs-8 fw-bolder">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black"></path>
                                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="{{url('admin/doctype/ItemCategories/')}}/{{$category_item->id}}/edit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="{{ route('ItemCategories.destroy', ['ItemCategory' => $category_item->id]) }}" 
                                                    onclick="event.preventDefault();
                                                    document.getElementById('delete-form-{{ $category_item->id }}').submit();"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <form id="delete-form-{{ $category_item->id }}" action="{{  route('ItemCategories.destroy', ['ItemCategory' => $category_item->id]) }}"
                                                    method="POST" style="display: none;">
                                                    @method('delete')
                                                   @csrf
                                                </form>
                                            </div>
                                        </td>
                                    </tr>       
                                    @endforeach                            
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <!--end::Tables Widget 9-->
            </div>
            <!--end::Col-->
        </div>
     </div>
   </div>
   <!--end::Post-->
</div>


@endsection
