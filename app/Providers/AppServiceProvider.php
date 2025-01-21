<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Modules\Admin\Models\AdminSettings;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('backend.prefix', function () {
            if (Schema::hasTable('admin_settings')) {
                return optional(AdminSettings::where('key', 'backend-prefix')->first())->value ?? 'admin-portal';
            }

            return 'admin-portal';
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        Blade::directive('settings', function ($key) {
            return "<?php echo \App\Helpers\BackendHelpers::getValueByKey($key); ?>";
        });
    }
}
