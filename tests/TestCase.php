<?php

namespace Loren138\CASServerTests;

use Carbon\Carbon;

class TestCase extends \Orchestra\Testbench\BrowserKit\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://test.org';

    public function testNothing()
    {
        $this->assertSame(true, true);
    }

    public function setUp()
    {
        parent::setUp();
    }

    protected function getPackageAliases($app)
    {
        return [
            //'Form' => 'Collective\Html\FormFacade',
            //'YourPackage' => 'YourProject\YourPackage\Facades\YourPackage',
        ];
    }

    protected function getPackageProviders($app)
    {
        return ['Loren138\CASServer\CASServerServiceProvider'];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);
    }


    public function tearDown()
    {
        parent::tearDown();
        Carbon::setTestNow();
    }
}
