<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;
use App\Services\Admin\SidebarService;

class ShareSidebar
{
    public function handle(Request $request, Closure $next)
    {
        // 建立 SidebarService 實例
        $SidebarService = app(SidebarService::class);

        // 取得當前 route name
        $routeName = $request->route()?->getName();

        $sidebar = $SidebarService->leftsidebar();
        // 防護 null，避免傳入 findByRoute() 報錯
        $menu = $routeName ? $SidebarService->findByRoute($routeName) : [];

        // 分享到所有 Blade 視圖
        view()->share([
            'sidebar'=> $sidebar,
            'sidebarMenu'=> $menu,]);

        return $next($request);
    }
}