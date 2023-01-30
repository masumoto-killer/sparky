<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver;

use function PHPUnit\Framework\isFalse;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('customer');
            $table->text('products');
            $table->date("estimated")->nullable();
            $table->integer("price");
            $table->text("url")->nullable();
            $table->boolean("paid");
            $table->boolean("arrived");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
