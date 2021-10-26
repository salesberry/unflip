<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $result['doctype']= DB::table('doctypes')
            ->where(['doctype_slug' => 'items'])
            ->where(['doctype_status' => 1])
            ->get(); 
        
        $module = collect($result['doctype'][0]->module_id);
        

        $result['doctype_list_group']=DB::table('doctypes')

            ->where(['module_id'=> $module])
            ->where(['doctype_status'=>1])
            ->where(['parent_doctype'=>0])            
            ->get();

        foreach($result['doctype_list_group'] as $doctype_group_list)
        {

            $result['doctype_list'][$doctype_group_list->doctype_id]=DB::table('doctypes')    
            ->where(['module_id'=> $module])
            ->where(['doctype_status'=>1])      
            ->where(['parent_doctype'=>$doctype_group_list->doctype_id])
            
            ->get();
            
        }
        
        return view('admin/doctypes/items/items', $result); 
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
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        //
    }
}
