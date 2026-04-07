<?php

namespace app\Services\Admin;

class SidebarService
{
    protected array $sidebar;

    public function __construct()
    {
        $this->sidebar = config('project_admin.sidebar');
    }

    /**
     * 判斷 leftsidebar
     */
    public function leftsidebar(){
        return $this->sidebar;
    }


    /**
     * 依 route name 找 menu
     */
    public function findByRoute(string $routeName): ?array
    {
        $routeName = str_replace('-', '_', $routeName);
        $routeName = explode('.', $routeName, 2)[1] ?? '';

        return $this->search($this->sidebar, $routeName);
    }

    /**
     * 遞迴搜尋（支援多層）
     */
    protected function search(array $items, string $routeName, ?string $parentTitle = '宏益科技'): ?array
    {

        foreach ($items as $item) {
 
             // ⭐ 處理 MENU / PAGES / Components 這層
            if (is_array($item) && !isset($item['route']) && !isset($item['sub-sidebar'])) {
                $found = $this->search($item, $routeName, $parentTitle);
    
                if ($found) return $found;
                continue;
            }

            // 找到 route
            if (isset($item['route']) && $item['route'] === $routeName) {
                return [
                    'title' => $item['title'],
                    'route' => $item['route'],
                    'parent_title' => $parentTitle,
                ];
            }

            // 子層
            if (isset($item['sub-sidebar'])) {
                $found = $this->search($item['sub-sidebar'], $routeName, $item['title']);
                if ($found) return $found;
            }
        }

        return null;
    }
}