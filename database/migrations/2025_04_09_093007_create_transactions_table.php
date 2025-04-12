<?php
use App\Models\Client;
use App\Models\User;
use App\Models\Bien;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string("type");
            $table->integer("montant");
            $table->string("date");
            $table->string("statuts");
            $table->foreignIdFor(Bien::class);
            $table->foreignIdFor(Client::class);
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
