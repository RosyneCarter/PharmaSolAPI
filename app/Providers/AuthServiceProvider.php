<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-user', function($user){
            return $user->hasAnyRole(['admin','Pharmacien', 'Gerant']);
        });
        Gate::define('manage-role', function($user){
            return $user->IsAdmin(['admin']);
        });

        Gate::define('edit-users', function($user){
            return $user->hasAnyRole(['admin','Pharmacien', 'Gerant']);
        });
        Gate::define('delete-users', function($user){
            return $user->hasAnyRole(['admin', 'Pharmacien', 'Gerant']);
        });
        Gate::define('modify-users', function($user){
            return $user->hasAnyRole(['admin', 'Pharmacien', 'Gerant']);
        });

        Gate::define('manage-role-Fournisseur', function($fournisseurs){
            return $fournisseurs->IsFournisseur(['admin']);
        });
    }
}
