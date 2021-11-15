<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     **
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->longText('Description');
            $table->date('TransactionDate');
            $table->string('Code');
            $table->float('Amount',10, 2);
            $table->enum('InOut', ['IN', 'OUT']);
            $table->biginteger('BankAccount_id');
            $table->foreign('BankAccount_id')->references('id')->on('bank_accounts')->onUpdate('cascade');
            $table->biginteger('Currency_id');
            $table->foreign('Currency_id')->references('id')->on('currencies')->onUpdate('cascade');
            $table->biginteger('Atm_id');
            $table->foreign('Atm_id')->references('id')->on('atms')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
