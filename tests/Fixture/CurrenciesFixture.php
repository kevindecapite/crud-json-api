<?php
namespace CrudJsonApi\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class CurrenciesFixture extends TestFixture
{
    public $records = [
        ['code' => 'EUR', 'name' => 'Euro'],
        ['code' => 'USD', 'name' => 'US Dollar'],
    ];
}
