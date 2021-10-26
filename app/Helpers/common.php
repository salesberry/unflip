<?php

use Illuminate\Support\Facades\DB;

function prx($arr){
    echo "<pre>";
    print_r($arr);
    die();
}

function getSideModulelist(){
    $tenantId=session()->get('TENANT_ID');
    $result=DB::table('module_tenants')
            ->where(['status'=>1])
            ->where(['tenent_id'=>$tenantId])
            ->get();
            $arr=[];

    foreach($result as $row){
        $resultModiules =DB::table('modules')->where(['id'=>$row->module_id])->first();

        $arr[$resultModiules->id]['module']=$resultModiules->module_name;
        $arr[$resultModiules->id]['module_slug']=$resultModiules->module_slug;
        $arr[$resultModiules->id]['parent_id']=$resultModiules->module_title;
    }

    $str = buildTreeView($arr, 0);
    return $str;


}

$html='';
function buildTreeView($arr,$parent,$level=0,$prelevel= -1){
	global $html;
	foreach($arr as $id=>$data){

		if($parent==$data['parent_id']){

			if($level>$prelevel){
				if($html==''){
                    $html.='';
                } else{
                    $html.='<div>';
                }          
			}
			if($level==$prelevel){
				$html.='</div>';
			}
			if($parent==0){
                $html.='<div class="menu-item mt-4"><div class="menu-content pb-2"><span class="menu-section text-muted text-uppercase fs-8  ls-1">'.$data['module'].'</div></div>';
            }else{
                $url=url("/admin/module/".$data['module_slug']);
                $html.='<div class="menu-item"><a class="menu-link" href="'.$url.'"><span class="menu-title">'.$data['module'].'</span></a>';
            }
			if($level>$prelevel){
				$prelevel=$level;
			}
			$level++;
			buildTreeView($arr,$id,$level,$prelevel);
			$level--;
		}
	}
	if($level==$prelevel){
		$html.='</div>';
	}
	return $html;
}
