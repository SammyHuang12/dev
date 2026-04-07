<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });
        
        $host = request()->getHost();   //localhost
        $path = request()->path();      //admin/event-details-readonly

        // ✅ 正式機：用網域判斷
        $domainMap = [
            'admin.xxx.com' => 'admin',
            'hphealth.xxx.com' => 'hphealth',
            'resume.xxx.com' => 'resume',
        ];
    
        if (isset($domainMap[$host])) {
            $project = $domainMap[$host];
        } else {
            // ✅ 本機：用 path 判斷
            if (str_starts_with($path, 'admin')) {
                $project = 'admin';
                // View::composer('*', function ($view) use ($project) {
                //     $view->with([
                //         'projectName', $project,
                //         'sidebar' => config('project.sidebar', []),
                //     ]);
                // });
            } elseif (str_starts_with($path, 'hphealth')) {
                $project = 'hphealth';
            } elseif (str_starts_with($path, 'resume')) {
                $project = 'resume';
            } else {
                $project = 'admin'; // 預設
            }
        }
    
        $file = config_path("project_{$project}.php");

        if (file_exists($file)) {
            Config::set('project', require $file);
        }
    }
}