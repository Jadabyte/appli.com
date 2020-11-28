@servers(['web' => ['deployrobot@139.162.142.231']])

@task('production', ['on' => 'web'])
    cd production/appli.com
    php artisan down
    git checkout master
    git pull
    composer install --no-dev --no-interaction --no-plugins --no-scripts --no-progress --optimize-autoloader
    php artisan migrate --force
    php artisan cache:clear
    php artisan config:cache
    php artisan up
@endtask
