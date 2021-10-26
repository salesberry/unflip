<?php

namespace App\Http\Controllers;

use App\Models\ItemCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['doctype']= DB::table('doctypes')
        ->where(['doctype_slug' => 'ItemCategories'])
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
        ->where(['parent_doctype'=>$doctype_group_list->doctype_id])
        
        ->get();
        
    }

    $tenent_id=session()->get('TENANT_ID');
    $result['data']= DB::table('item_categories')
        ->where(['tenent_id' => $tenent_id])
        ->where(['status' => 1])
        ->get(); 
    
    return view('admin/doctypes/ItemCategory/ItemCategory', $result); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result['doctype']= DB::table('doctypes')
        ->where(['doctype_slug' => 'ItemCategories'])
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
            ->where(['parent_doctype'=>$doctype_group_list->doctype_id])
            
            ->get();
            
        }
        $tenent_id=session()->get('TENANT_ID');
        $result['data']= DB::table('item_categories')
            ->where(['tenent_id' => $tenent_id])
            ->where(['status' => 1])
            ->get(); 

        return view('admin/doctypes/ItemCategory/create', $result); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' =>'required',
            'category_slug'=>'required|unique:item_categories',            
        ]);

        $tenent_id=session()->get('TENANT_ID');

        $model=new ItemCategory();
        $model->category_name=$request->post('category_name');
        $model->category_slug=$request->post('category_slug');
        $model->tenent_id=$tenent_id;
        $model->category_desc=$request->post('category_desc');
        $model->save();
        $request->session()->flash('category_success','Category Added Successfully');
        return redirect('admin/doctype/ItemCategories');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ItemCategory $itemCategory)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $tenent_id=session()->get('TENANT_ID');

        $result['doctype']= DB::table('doctypes')
        ->where(['doctype_slug' => 'ItemCategories'])
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
            ->where(['parent_doctype'=>$doctype_group_list->doctype_id])
            ->get();
            
        }
        
        $result['data']= DB::table('item_categories')
            ->where(['tenent_id' => $tenent_id])
            ->where(['status' => 1])
            ->get(); 


        $arr=DB::table('item_categories')
        ->where(['tenent_id'=>$tenent_id])        
        ->where(['id' => $id])
        ->first();

        if($arr){

        $result['category_id'] =$arr->id;
        $result['category_name'] =$arr->category_name;
        $result['category_slug'] =$arr->category_slug;
        $result['category_desc'] =$arr->category_desc;

        }else{
            $request->session()->flash('error_category_denied','Access Denied');
            return redirect('admin/doctype/ItemCategories');
        }
        return view('admin/doctypes/ItemCategory/edit', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $itemCategory)
    {   
        
        $request->validate([
            'category_name' =>'required',
            'category_slug'=>'required|unique:item_categories,category_slug,'.$itemCategory,            
        ]);


        $tenent_id=session()->get('TENANT_ID');
        $model=ItemCategory::where('id', $itemCategory)
        ->update([ 
            'category_name'=>$request->post('category_name'),
            'category_slug'=>$request->post('category_slug'),
            'category_desc'=>$request->post('category_desc'),
        ]);
       
        $request->session()->flash('category_Update','Category Added Successfully');
        return redirect('admin/doctype/ItemCategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$itemCategory)
    {
        $itemCategory = ItemCategory::find($itemCategory)->first();
        $itemCategory->delete();
        $request->session()->flash('category_delete','Category Deleted Successfully');
        return redirect('admin/doctype/ItemCategories');
    }
}
