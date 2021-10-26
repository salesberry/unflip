<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //
    }

    public function module_doctype_list(Request $request, $slug)
    {



        $result['doctype_list_group']=DB::table('doctypes')

            ->leftJoin('modules','doctypes.module_id', '=', 'modules.id')
            ->where(['module_slug'=>$slug])
            ->where(['doctype_status'=>1])
            ->where(['parent_doctype'=>0])            
            ->get();

        foreach($result['doctype_list_group'] as $doctype_group_list)
        {

            $result['doctype_list'][$doctype_group_list->doctype_id]=DB::table('doctypes')     
            ->leftJoin('modules','doctypes.module_id', '=', 'modules.id')
            ->where(['module_slug'=>$slug])
            ->where(['doctype_status'=>1])      
            ->where(['parent_doctype'=>$doctype_group_list->doctype_id])
            
            ->get();
            
        }

        $result['module']=DB::table('modules')
            ->where(['module_slug'=>$slug])                  
            ->get();
       
        return view('admin.module_datatype_list', $result); 
        
    }
}
