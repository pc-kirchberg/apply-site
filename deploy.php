<?php
namespace Deployer;

require 'recipe/laravel.php';

// Configuration

set('repository', 'git@github.com:pupcomesl1/apply-site.git');
set('git_tty', false); // [Optional] Allocate tty for git on first deployment
add('shared_files', ['.env.production']);
add('shared_dirs', []);
add('writable_dirs', []);


// Hosts

host('ssh.core-1.prod.pupilscom-esl1.eu')
    ->stage('production')
    ->user('root')
    ->identityFile('C:\Users\marks\.ssh\id_rsa')
    ->multiplexing(false)
    ->set('deploy_path', '/var/www/apply');


// Tasks

desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
    run('sudo service php7.1-fpm restart');
});

task('defuckenate-dotenv', function () {
   run('rm /var/www/apply/current/.env');
   run('cp /var/www/apply/current/.env.production /var/www/apply/current/.env');
});
after('deploy:symlink', 'defuckenate-dotenv');
after('deploy:symlink', 'artisan:config:cache');
after('deploy:symlink', 'php-fpm:restart');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

//before('deploy:symlink', 'artisan:migrate'); //  we do our migrations manually, dammit!
