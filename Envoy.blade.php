@servers(['web' => ['deployrobot@139.162.142.231']])

@task('production', ['on' => 'web'])
    cd production/appli.com
    php artisan down
    git checkout master
    git fetch --all
    git reset --hard origin/master
    composer install --no-dev
    php artisan migrate --force
    php artisan db:seed --class=CategorySeeder --force
    php artisan cache:clear
    php artisan config:clear
    php artisan storage:link
    php artisan up
@endtask

@task('staging', ['on' => 'web'])
    cd staging/appli.com
    php artisan down
    git fetch
    git checkout {{ $branch }}
    git fetch --all
    git reset --hard origin/{{ $branch }}
    composer install
    php artisan migrate:fresh --seed
    php artisan cache:clear
    php artisan config:clear
    php artisan storage:link
    php artisan up
@endtask
