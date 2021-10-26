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
      <div id="kt_content_container" class="container-xxl">
         <div class="card">
             <div class="card-header border-0" style="background-color:#f7f7f7">
                 <!--begin::Card title-->
                 <div class="card-title">
                     <!--begin::Search-->
                     <div class="d-flex align-items-center position-relative my-1">
                         <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                         <span class="svg-icon svg-icon-1 position-absolute ms-6">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none">
                                 <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                     height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                     fill="black" />
                                 <path
                                     d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                     fill="black" />
                             </svg>
                         </span>
                         <!--end::Svg Icon-->
                         <input type="text" data-kt-customer-table-filter="search"
                             class="form-control form-control-solid w-250px ps-15"
                             placeholder="Search User"
                             style="background-color: #ffffff !important; border: 1px solid #f1f1f1; border-radius: 4px; padding: 8px;" />
                     </div>
                     <div class="d-flex align-items-center position-relative my-1 mx-2">
                         <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                         <!--end::Svg Icon-->
                         <input type="text" data-kt-customer-table-filter="search"
                             class="form-control form-control-solid w-250px ps-8" placeholder="Roles"
                             style="background-color: #ffffff !important; border: 1px solid #f1f1f1; border-radius: 4px; padding: 8px;" />
                     </div>
                     <!--end::Search-->
                 </div>
                 <!--begin::Card title-->
                 <!--begin::Card toolbar-->
                 <div class="card-toolbar">
                     <!--begin::Toolbar-->
                     <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                         <button type="button" class="btn btn-light-primary btn-sm "
                             style="border: 1px solid #008cdb;" data-bs-toggle="modal"
                             data-bs-target="#kt_customers_export_modal">
                             <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                             <span class="svg-icon svg-icon-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none">
                                     <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2"
                                         rx="1" transform="rotate(90 12.75 4.25)" fill="black" />
                                     <path
                                         d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                         fill="black" />
                                     <path
                                         d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                         fill="#C4C4C4" />
                                 </svg>
                             </span>
                             Export
                         </button>
                     </div>
                    
                 </div>
                 <!--end::Card toolbar-->
             </div>
             <!--begin::Card body-->
             <div class="card-body pt-0">
                 <!--begin::Table-->
                 <table class="table align-middle table-row-dashed fs-6 gy-5"
                     id="kt_customers_table">
                     <!--begin::Table head-->
                     <thead>
                         <!--begin::Table row-->
                         <tr style="color:#3f4254"
                             class="text-start fw-bolder fs-7 text-uppercase gs-0">
                             <th class="min-w-300px">Full Name</th>
                             <th class="min-w-125px">Role</th>
                             <th class="min-w-125px">Access</th>
                             <th class="min-w-125px">Status</th>
                             <th class="text-end min-w-70px">Actions</th>
                         </tr>
                         <!--end::Table row-->
                     </thead>
                     <!--end::Table head-->
                     <!--begin::Table body-->
                     <tbody class="fw-bold text-gray-600">
                         <tr>

                             <td>
                                 <div class="d-flex align-items-center">
                                     <!--begin::Avatar-->
                                     <div class="symbol symbol-45px me-5">
                                         <img alt="Pic" src="assets/media/avatars/150-1.jpg">
                                     </div>
                                     <!--end::Avatar-->
                                     <!--begin::Name-->
                                     <div class="d-flex justify-content-start flex-column">
                                         <a href="#"
                                             class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Emma
                                             Smith</a>
                                         <a href="#"
                                             class="text-muted text-hover-primary fw-bold text-muted d-block fs-7">
                                             <span class="text-dark">Email</span>:
                                             e.smith@kpmg.com.au</a>
                                     </div>
                                     <!--end::Name-->
                                 </div>
                             </td>
                             <td>
                                 <a href="#" class="text-gray-600 text-hover-primary mb-1"
                                     style="color:#3f4254; font-weight: 500;">Admin</a>
                             </td>
                             <td>
                                 <a href="#" class="text-gray-600 text-hover-primary mb-1"
                                     style="color:#3f4254; font-weight: 500;">Full Access</a>
                             </td>

                             <td>
                                 <span class="badge badge-light-success">Approved</span>
                             </td>
                             <td class="text-end">
                                 <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                     data-kt-menu-trigger="click"
                                     data-kt-menu-placement="bottom-end">Actions
                                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                     <span class="svg-icon svg-icon-5 m-0">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none">
                                             <path
                                                 d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                 fill="black" />
                                         </svg>
                                     </span>
                                     <!--end::Svg Icon-->
                                 </a>
                                 <!--begin::Menu-->
                                 <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                     data-kt-menu="true">
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="../../demo1/dist/apps/customers/view.html"
                                             class="menu-link px-3">View</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-customer-table-filter="delete_row">Delete</a>
                                     </div>
                                     <!--end::Menu item-->
                                 </div>
                                 <!--end::Menu-->
                             </td>
                             <!--end::Action=-->
                         </tr>
                         <tr>

                             <td>
                                 <div class="d-flex align-items-center">
                                     <!--begin::Avatar-->
                                     <div class="symbol symbol-45px me-5">
                                         <img alt="Pic" src="assets/media/avatars/150-1.jpg">
                                     </div>
                                     <!--end::Avatar-->
                                     <!--begin::Name-->
                                     <div class="d-flex justify-content-start flex-column">
                                         <a href="#"
                                             class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Emma
                                             Smith</a>
                                         <a href="#"
                                             class="text-muted text-hover-primary fw-bold text-muted d-block fs-7">
                                             <span class="text-dark">Email</span>:
                                             e.smith@kpmg.com.au</a>
                                     </div>
                                     <!--end::Name-->
                                 </div>
                             </td>
                             <td>
                                 <a href="#" class="text-gray-600 text-hover-primary mb-1"
                                     style="color:#3f4254; font-weight: 500;">Admin</a>
                             </td>
                             <td>
                                 <a href="#" class="text-gray-600 text-hover-primary mb-1"
                                     style="color:#3f4254; font-weight: 500;">Full Access</a>
                             </td>

                             <td>
                                 <span class="badge badge-light-success">Approved</span>
                             </td>
                             <td class="text-end">
                                 <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                     data-kt-menu-trigger="click"
                                     data-kt-menu-placement="bottom-end">Actions
                                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                     <span class="svg-icon svg-icon-5 m-0">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none">
                                             <path
                                                 d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                 fill="black" />
                                         </svg>
                                     </span>
                                     <!--end::Svg Icon-->
                                 </a>
                                 <!--begin::Menu-->
                                 <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                     data-kt-menu="true">
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="../../demo1/dist/apps/customers/view.html"
                                             class="menu-link px-3">View</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-customer-table-filter="delete_row">Delete</a>
                                     </div>
                                     <!--end::Menu item-->
                                 </div>
                                 <!--end::Menu-->
                             </td>
                             <!--end::Action=-->
                         </tr>
                         <tr>

                             <td>
                                 <div class="d-flex align-items-center">
                                     <!--begin::Avatar-->
                                     <div class="symbol symbol-45px me-5">
                                         <img alt="Pic" src="assets/media/avatars/150-1.jpg">
                                     </div>
                                     <!--end::Avatar-->
                                     <!--begin::Name-->
                                     <div class="d-flex justify-content-start flex-column">
                                         <a href="#"
                                             class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Emma
                                             Smith</a>
                                         <a href="#"
                                             class="text-muted text-hover-primary fw-bold text-muted d-block fs-7">
                                             <span class="text-dark">Email</span>:
                                             e.smith@kpmg.com.au</a>
                                     </div>
                                     <!--end::Name-->
                                 </div>
                             </td>
                             <td>
                                 <a href="#" class="text-gray-600 text-hover-primary mb-1"
                                     style="color:#3f4254; font-weight: 500;">Admin</a>
                             </td>
                             <td>
                                 <a href="#" class="text-gray-600 text-hover-primary mb-1"
                                     style="color:#3f4254; font-weight: 500;">Full Access</a>
                             </td>

                             <td>
                                 <span class="badge badge-light-success">Approved</span>
                             </td>
                             <td class="text-end">
                                 <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                     data-kt-menu-trigger="click"
                                     data-kt-menu-placement="bottom-end">Actions
                                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                     <span class="svg-icon svg-icon-5 m-0">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none">
                                             <path
                                                 d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                 fill="black" />
                                         </svg>
                                     </span>
                                     <!--end::Svg Icon-->
                                 </a>
                                 <!--begin::Menu-->
                                 <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                     data-kt-menu="true">
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="../../demo1/dist/apps/customers/view.html"
                                             class="menu-link px-3">View</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-customer-table-filter="delete_row">Delete</a>
                                     </div>
                                     <!--end::Menu item-->
                                 </div>
                                 <!--end::Menu-->
                             </td>
                             <!--end::Action=-->
                         </tr>
                         <tr>

                             <td>
                                 <div class="d-flex align-items-center">
                                     <!--begin::Avatar-->
                                     <div class="symbol symbol-45px me-5">
                                         <img alt="Pic" src="assets/media/avatars/150-1.jpg">
                                     </div>
                                     <!--end::Avatar-->
                                     <!--begin::Name-->
                                     <div class="d-flex justify-content-start flex-column">
                                         <a href="#"
                                             class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Emma
                                             Smith</a>
                                         <a href="#"
                                             class="text-muted text-hover-primary fw-bold text-muted d-block fs-7">
                                             <span class="text-dark">Email</span>:
                                             e.smith@kpmg.com.au</a>
                                     </div>
                                     <!--end::Name-->
                                 </div>
                             </td>
                             <td>
                                 <a href="#" class="text-gray-600 text-hover-primary mb-1"
                                     style="color:#3f4254; font-weight: 500;">Admin</a>
                             </td>
                             <td>
                                 <a href="#" class="text-gray-600 text-hover-primary mb-1"
                                     style="color:#3f4254; font-weight: 500;">Full Access</a>
                             </td>

                             <td>
                                 <span class="badge badge-light-success">Approved</span>
                             </td>
                             <td class="text-end">
                                 <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                     data-kt-menu-trigger="click"
                                     data-kt-menu-placement="bottom-end">Actions
                                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                     <span class="svg-icon svg-icon-5 m-0">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none">
                                             <path
                                                 d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                 fill="black" />
                                         </svg>
                                     </span>
                                     <!--end::Svg Icon-->
                                 </a>
                                 <!--begin::Menu-->
                                 <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                     data-kt-menu="true">
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="../../demo1/dist/apps/customers/view.html"
                                             class="menu-link px-3">View</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-customer-table-filter="delete_row">Delete</a>
                                     </div>
                                     <!--end::Menu item-->
                                 </div>
                                 <!--end::Menu-->
                             </td>
                             <!--end::Action=-->
                         </tr>

                     </tbody>
                     <!--end::Table body-->
                 </table>
                 <!--end::Table-->
             </div>
             <!--end::Card body-->
         </div>
     </div>
   </div>
   <!--end::Post-->
</div>


@endsection
