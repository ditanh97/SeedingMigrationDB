<?php

use Phinx\Migration\AbstractMigration;

class BookingTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('booking');
        $table
            ->addColumn('booking_uuid', 'integer')
            ->addColumn('total_price', 'integer')
            ->addColumn('promo_id', 'integer')
            ->addColumn('paymethod_id', 'integer')
            ->addColumn('status_id', 'integer')
            ->addColumn('class_id', 'integer')
            ->addColumn('pay_user_id', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime', ['null'=>true, 'update'=> "CURRENT_TIMESTAMP"])
            ->addForeignKey('promo_id', 'promo', 'id', ['delete'=>'RESTRICT', 'update'=>'CASCADE'])
            ->addForeignKey('paymethod_id', 'paymethod', 'id', ['delete'=>'RESTRICT', 'update'=>'CASCADE'])
            ->addForeignKey('status_id', 'status', 'id', ['delete'=>'RESTRICT', 'update'=>'CASCADE'])
            ->addForeignKey('class_id', 'classes', 'id', ['delete'=>'RESTRICT', 'update'=>'CASCADE'])
            ->addForeignKey('pay_user_id', 'users', 'id', ['delete'=>'RESTRICT', 'update'=>'CASCADE'])
            ->save();
    }
}
