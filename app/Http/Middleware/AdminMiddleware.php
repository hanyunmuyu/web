<?php

namespace App\Http\Middleware;

use App\Models\AdminGroupModel;
use App\Models\AdminPermissionModel;
use App\Repositories\Admin\PermissionRepository;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            if (!$request->ajax()) {
                return redirect('/admin/login');
            }else{
                return  [
                    'code' => 4000,
                    'status' => 'error',
                    'msg' => '认证失败'
                ];
            }
        }
//        $permissions = $this->getPermissions($request);
//        view()->share('menus', $permissions);
        return $next($request);
    }

    private function getPermissions($request)
    {
//        $path = $request->path();
//        $admin = Auth::guard('admin')->user();
//        $permission = new PermissionRepository();
//        $permissions = $permission->getGroupPermissions($admin->group_id);
//        $pMap = [];
//        $secList = [];
//        $flag = false;
//
//
//        foreach ($permissions as $p) {
//            if (starts_with($path,$p->path)) {
//                $flag = true;
//                $p->selected = true;
//            }else{
//                $p->selected = false;
//            }
//            if ($p->fid == 0) {
//                $pMap[$p->id] = $p;
//            } else {
//                $secList[$p->fid][] = $p;
//            }
//        }
//
//
//        if (!$flag) {
//            return redirect('/admin');
//        }
//        foreach ($pMap as $key => $p) {
//            if (isset($secList[$p->id])&&$secList[$p->id]) {
//                foreach ($secList[$p->id] as $sub) {
//                    if ($sub->selected) {
//                        $pMap[$sub->fid]->selected = true;
//                    }
//                }
//                $pMap[$key]['sub'] = $secList[$p->id];
//            } else {
//                $pMap[$key]['sub'] = [];
//            }
//        }
//        return $pMap;
    }
}
