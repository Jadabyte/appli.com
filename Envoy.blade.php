@servers(['web' => ['deployrobot@139.162.142.231']])

@task('production', ['on' => 'web'])
    cd production/appli.com
    php artisan down
    git checkout master
    git fetch --all
    git reset --hard origin/master
    composer update
    php artisan migrate --force
    php artisan cache:clear
    php artisan config:cache
    php artisan up
@endtask

@task('staging', ['on' => 'web'])
    cd staging/appli.com
    php artisan down
    git checkout {{ $branch }}
    git fetch --all
    git reset --hard origin/{{ $branch }}
    composer update
    php artisan migrate:fresh --seed
    php artisan cache:clear
    php artisan config:cache
    php artisan up
@endtask
