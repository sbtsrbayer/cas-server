<?php

namespace Loren138\CASServerTests;

use Artisan;

trait DatabaseMigrations
{
    /**
     * Define hooks to migrate the database before and after each test.
     *
     * @return void
     */
    public function runDatabaseMigrations()
    {
      //  echo "in databasemigarionts 2222222hhh";
        $temp = 'never set';
        try {
     //   echo "777777\n";
            $temp = $this->artisan('migrate:refresh', ['--verbose' => '--verbose']);
    //    echo print_r(\Artisan::output(), true);
        } catch (\Exception $ex) {
  //          echo "artisan fialed\n\n\n";
   //         echo $ex->getMessage();
        }
 //       echo "888888888888";
//        echo print_r($temp, true) . '999999';

//        $this->app[Kernel::class]->setArtisan(null);

        $this->beforeApplicationDestroyed(function () {
            $this->artisan('migrate:rollback');

            RefreshDatabaseState::$migrated = false;
        });

        /*
        echo "run migartions77777\n";
        $vals = Artisan::call('migrate', [
            "--force" => true,
            '--realpath' => realpath(__DIR__.'/../database/migrations')
        ]);
        echo print_r($vals, true);
*/

        /*
        $this->artisan('migrate', [
            '--realpath' => realpath(__DIR__.'/../database/migrations'),
        ]);

        $this->beforeApplicationDestroyed(function () {
            $this->artisan('migrate:rollback');
        });
         */
    }
}
