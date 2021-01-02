<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

use App\Models\Company;
use App\Models\Student;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isStudent', function ($user) {
            return $user->isStudent === 1;
        });

        Gate::define('hasCompany', function ($user) {
            return Company::where('user_id', $user->id)->first();
        });

        Gate::define('hasStudent', function ($user) {
            return Student::where('user_id', $user->id)->first();
        });
    }
}
