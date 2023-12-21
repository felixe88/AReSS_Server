<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TumoriStomacoCasiFixture
 */
class TumoriStomacoCasiFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tumori_stomaco_casi';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'IDComunePop' => 1,
                'IDPatologia' => 1,
                'casi' => 1,
            ],
        ];
        parent::init();
    }
}