<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fotografie', function (Blueprint $table) {
            $table->id();
            $table->string('nadpis')->nullable();
            $table->string('text')->nullable();

            $table->string('nazov_suboru');
            $table->string('cesta_k_suboru');
            $table->integer('poradie');
            $table->timestamps();

            $table->unsignedBigInteger('priradena_sekcia_id');

            $table->foreign('priradena_sekcia_id')->references('id')->on('sekcie')->onDelete('cascade');

        });


        DB::table('fotografie')->insert([
            [
                'id' => 1,
                'nadpis' => 'Montessori hernička',
                'text' => NULL,
                'nazov_suboru' => '1733847113_3.jpg',
                'cesta_k_suboru' => 'assets/images/1733847113_3.jpg',
                'poradie' => 2,
                'created_at' => '2024-12-10 17:11:53',
                'updated_at' => '2024-12-10 17:15:14',
                'priradena_sekcia_id' => 2,
            ],
            [
                'id' => 2,
                'nadpis' => 'Klavírna víla – Boinka',
                'text' => NULL,
                'nazov_suboru' => '1733847192_2.jpg',
                'cesta_k_suboru' => 'assets/images/1733847192_2.jpg',
                'poradie' => 3,
                'created_at' => '2024-12-10 17:13:12',
                'updated_at' => '2024-12-10 17:15:14',
                'priradena_sekcia_id' => 2,
            ],
            [
                'id' => 3,
                'nadpis' => 'Detské tvorivé dielne',
                'text' => NULL,
                'nazov_suboru' => '1733847285_1.jpg',
                'cesta_k_suboru' => 'assets/images/1733847285_1.jpg',
                'poradie' => 1,
                'created_at' => '2024-12-10 17:14:45',
                'updated_at' => '2024-12-10 17:15:14',
                'priradena_sekcia_id' => 2,
            ],
            [
                'id' => 4,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733847651_468663258_888268580171693_7084961035545899506_n.jpg',
                'cesta_k_suboru' => 'assets/images/1733847651_468663258_888268580171693_7084961035545899506_n.jpg',
                'poradie' => 1,
                'created_at' => '2024-12-10 17:20:51',
                'updated_at' => '2024-12-10 17:20:51',
                'priradena_sekcia_id' => 7,
            ],
            [
                'id' => 5,
                'nadpis' => 'Miroslav Uhrina',
                'text' => 'Koordinátor Rodinného centra',
                'nazov_suboru' => '1733847714_Miroslav-Uhrina_1-480x300.jpg',
                'cesta_k_suboru' => 'assets/images/1733847714_Miroslav-Uhrina_1-480x300.jpg',
                'poradie' => 1,
                'created_at' => '2024-12-10 17:21:54',
                'updated_at' => '2024-12-10 17:21:54',
                'priradena_sekcia_id' => 9,
            ],
            [
                'id' => 6,
                'nadpis' => 'Katarína Sopková',
                'text' => 'Zodpovedná za herňu',
                'nazov_suboru' => '1733847756_Katarína-Sopková-480x300.jpg',
                'cesta_k_suboru' => 'assets/images/1733847756_Katarína-Sopková-480x300.jpg',
                'poradie' => 2,
                'created_at' => '2024-12-10 17:22:36',
                'updated_at' => '2024-12-10 17:22:36',
                'priradena_sekcia_id' => 9,
            ],
            [
                'id' => 7,
                'nadpis' => 'Mária Sroková',
                'text' => 'Zodpovedná za Átrium',
                'nazov_suboru' => '1733847855_Mária-Sroková-480x300.jpg',
                'cesta_k_suboru' => 'assets/images/1733847855_Mária-Sroková-480x300.jpg',
                'poradie' => 3,
                'created_at' => '2024-12-10 17:24:15',
                'updated_at' => '2024-12-10 17:24:15',
                'priradena_sekcia_id' => 9,
            ],
            [
                'id' => 8,
                'nadpis' => 'Magdaléna Uhrinová Brezániová',
                'text' => 'Dobrovoľníčka v herni',
                'nazov_suboru' => '1733847953_Magdaléna-Uhrinová-Brezániová-480x300.jpg',
                'cesta_k_suboru' => 'assets/images/1733847953_Magdaléna-Uhrinová-Brezániová-480x300.jpg',
                'poradie' => 4,
                'created_at' => '2024-12-10 17:25:34',
                'updated_at' => '2024-12-10 17:25:53',
                'priradena_sekcia_id' => 9,
            ],
            [
                'id' => 9,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848132_1.jpg',
                'cesta_k_suboru' => 'assets/images/1733848132_1.jpg',
                'poradie' => 1,
                'created_at' => '2024-12-10 17:28:52',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 10,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848142_2.jpg',
                'cesta_k_suboru' => 'assets/images/1733848142_2.jpg',
                'poradie' => 4,
                'created_at' => '2024-12-10 17:29:02',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 11,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848155_3.jpg',
                'cesta_k_suboru' => 'assets/images/1733848155_3.jpg',
                'poradie' => 3,
                'created_at' => '2024-12-10 17:29:15',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 12,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848732_469293845_889237093408175_1225412991093539492_n.jpg',
                'cesta_k_suboru' => 'assets/images/1733848732_469293845_889237093408175_1225412991093539492_n.jpg',
                'poradie' => 2,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 13,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_4.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_4.jpg',
                'poradie' => 6,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 14,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_5.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_5.jpg',
                'poradie' => 5,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 15,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_6.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_6.jpg',
                'poradie' => 7,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 16,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_7.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_7.jpg',
                'poradie' => 10,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 17,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_8.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_8.jpg',
                'poradie' => 9,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 18,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_9.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_9.jpg',
                'poradie' => 13,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 19,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_10.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_10.jpg',
                'poradie' => 8,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 20,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_11.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_11.jpg',
                'poradie' => 11,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 21,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_12.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_12.jpg',
                'poradie' => 12,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 22,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_13.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_13.jpg',
                'poradie' => 14,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 23,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_14.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_14.jpg',
                'poradie' => 16,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 24,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_15.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_15.jpg',
                'poradie' => 18,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 25,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_16.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_16.jpg',
                'poradie' => 15,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 26,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_17.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_17.jpg',
                'poradie' => 17,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 27,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_18.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_18.jpg',
                'poradie' => 20,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 28,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_19.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_19.jpg',
                'poradie' => 22,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 29,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_20.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_20.jpg',
                'poradie' => 21,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
            [
                'id' => 30,
                'nadpis' => NULL,
                'text' => NULL,
                'nazov_suboru' => '1733848535_21.jpg',
                'cesta_k_suboru' => 'assets/images/1733848535_21.jpg',
                'poradie' => 19,
                'created_at' => '2024-12-10 17:35:35',
                'updated_at' => '2024-12-10 17:40:47',
                'priradena_sekcia_id' => 8,
            ],
        ]);
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotografie');
    }
};
