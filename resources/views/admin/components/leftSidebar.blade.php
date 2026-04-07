{{-- leftsidebar.blade.php --}}
<div class="vertical-menu">
    <div data-simplebar="" class="h-100">
        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ asset('/picture/avatar-1.jpg') }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">Julia Hudda</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                    Online</span>
            </div>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                @foreach($sidebar as $key => $items)
                @if(!empty($key) && is_array($items))
                <li class="menu-title">{{$key}}</li>
                @foreach($items as $sidebarItems)
                <li>
                    <a href="{{ isset($sidebarItems['route']) && Route::has($projectName.'.'.$sidebarItems['route']) ? route($projectName.'.'.$sidebarItems['route']) : 'javascript: void(0);' }}"
                        class="{{(isset($sidebarItems['badge']) || empty($sidebarItems['sub-sidebar'] ))? '':'has-arrow '}} waves-effect">
                        @if(isset($sidebarItems['icon']))
                        <i class="{{$sidebarItems['icon']}}"></i>
                        @endif
                        @if(isset($sidebarItems['badge']))
                        <span
                            class="badge rounded-pill {{empty($sidebarItems['sub-sidebar'] )?'bg-success':'bg-danger' }} float-end">{{$sidebarItems['badge']}}</span>
                        @endif
                        @if(isset($sidebarItems['title']))
                        <span>{{$sidebarItems['title']}}</span>
                        @endif
                    </a>
                    @if(isset($sidebarItems['sub-sidebar']) && !empty($sidebarItems['sub-sidebar']))
                    <ul class="sub-menu" aria-expanded="false">
                        @foreach($sidebarItems['sub-sidebar'] as $subSidebar)
                        <li><a
                                href="{{ isset($subSidebar['route'])&& Route::has($projectName.'.'.$subSidebar['route']) ? route($projectName.'.'.$subSidebar['route']) : '#' }}">{{$subSidebar['title']}}</a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
                @endif
                @endforeach
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>