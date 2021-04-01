<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CliniciansFixture
 */
class CliniciansFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Clinician\'s ID', 'autoIncrement' => true, 'precision' => null],
        'Reg_no' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Registration number', 'precision' => null],
        'Reg_status' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Registration status', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID' => 1,
                'Reg_no' => 'Lor',
                'Reg_status' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
