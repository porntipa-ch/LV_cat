<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string("customer");
            $table->string("phone");
            $table->string("address");
            $table->decimal("tax",8,2)->default(0);
            $table->string("doc_no");
            $table->string("ref_no");
            $table->decimal("sale",8,2)->default(0);
            $table->decimal("discount",8,2)->default(0);
            $table->decimal("vat",8,2)->default(0);
            $table->decimal("total",8,2)->default(0);
            $table->string("sign_name");
            $table->string("service");
            $table->integer("trip_id");
            $table->integer("user_id");
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
        Schema::dropIfExists('quotations');
    }
};
