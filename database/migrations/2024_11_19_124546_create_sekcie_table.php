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
        Schema::create('sekcie', function (Blueprint $table) {
            $table->id();
            $table->string('nazov_sekcie');

            $table->string('nadpis')->nullable();
            $table->string('typografia_nadpisu')->nullable();
            $table->string('farba_nadpisu')->nullable();
            $table->string('font_nadpisu')->nullable();

            $table->text('ikonka_nadpisu')->nullable();
            $table->text('farba_ikonky_nadpisu')->nullable();

            $table->longText('text')->nullable();
            $table->integer('velkost_textu')->nullable();
            $table->string('farba_textu')->nullable();
            $table->string('font_textu')->nullable();

        });

        DB::table('sekcie')->insert([
            'id' => 1,
            'nazov_sekcie' => 'about_us',

            'nadpis' => 'O nás - Aktivity',
            'typografia_nadpisu' => 'display-4',
            'farba_nadpisu' => '#F4FEFD',
            'font_nadpisu' => '"Questrial", serif',

            'ikonka_nadpisu' => 'fa-solid fa-puzzle-piece fa-lg',
            'farba_ikonky_nadpisu' => '#ffffff',

            'text' => 'Rodinné centrum <strong><b><em>Sirotár</em></b></strong> pod sebou združuje rôzne aktivity.V rámci neho sme otvorili <strong><b><em>herňu Rodinného centra a Átrium</em></b></strong>, ktoré sú určené mamičkám s menšími deťmi. Cieľom je vytvoriť priestor pre lepšie prežívanie materstva, osobný aj duchovný rozvoj a sebarealizáciu mamičiek. Rovnako aj vytvoriť priestor pre zdravú socializáciu ich ratolestí.',
            'velkost_textu' => 25,
            'farba_textu' => 'black',
            'font_textu' => '"Inknut Antiqua", serif',

        ]);


        DB::table('sekcie')->insert([
            'id' => 2,
            'nazov_sekcie' => 'activities_herna',

            'nadpis' => 'Herňa',
            'typografia_nadpisu' => 'display-4',
            'farba_nadpisu' => '#34A0CE',
            'font_nadpisu' => '"Questrial", serif',

            'text' => 'Herňa je otvorená pre mamičky a deti každú stredu (okrem prázdnin a sviatkov) od 9:00 h do 12:00 h, program (detská aktivita alebo prednáška) začína o 10:00 h spoločnou modlitbou. Počas programu je k dispozícii spovedná služba a knižnica.',
            'velkost_textu' => 20,
            'farba_textu' => 'black',
            'font_textu' => '"Inknut Antiqua", serif',

        ]);

        DB::table('sekcie')->insert([
            'id' => 3,
            'nazov_sekcie' => 'activities_herna_aktivity_pre_deti',

            'nadpis' => '<b><u>Aktivity pre deti:</u></b>',
            'typografia_nadpisu' => '20px',
            'farba_nadpisu' => 'black',
            'font_nadpisu' => '"Inknut Antiqua", serif',

            'text' => ' <li>Hravá angličtina</li>
                        <li>Montessori hernička</li>
                        <li>Detské tvorivé dielne</li>
                        <li>Klavírna víla – Boinka</li>
                        <li>Katechézy Dobrého pastiera</li>',
            'velkost_textu' => 20,
            'farba_textu' => 'black',
            'font_textu' => '"Inknut Antiqua", serif',

        ]);

        DB::table('sekcie')->insert([
            'id' => 4,
            'nazov_sekcie' => 'activities_herna_prednasky_pre_mamicky',

            'nadpis' => '<b><u>Prednášky pre mamičky:</u></b>',
            'typografia_nadpisu' => '20px',
            'farba_nadpisu' => 'black',
            'font_nadpisu' => '"Inknut Antiqua", serif',

            'text' => ' <li>Fyzioterepeutka Radka</li>
                        <li>Učíme sa rozprávať s pani logopedičkou</li>
                        <li>Svedectvá mnohodetných rodín</li>
                        <li>Príprava na pôrod s dulou</li><li>Staráme sa o seba s kozmetičkou</li>
                        <li>Ženský cyklus – ako sa v ňom dobre vyznať</li>
                        <li>Zdravie našich detí s pani pediatričkou</li>
                        <li>O domácom vzdelávaní</li>
                        <li>O kváskovaní a iné…</li>',
            'velkost_textu' => 20,
            'farba_textu' => 'black',
            'font_textu' => '"Inknut Antiqua", serif',

        ]);

        DB::table('sekcie')->insert([
            'id' => 5,
            'nazov_sekcie' => 'activities_atrium',

            'nadpis' => 'Átrium',
            'typografia_nadpisu' => 'display-4',
            'farba_nadpisu' => '#34A0CE',
            'font_nadpisu' => '"Questrial", serif',

            'text' => 'Átrium je miesto, kde sa deti zoznamujú so základnými pravdami viery cez koncept Katechéz Dobrého pastiera, ktorý je postavený na pedagogických princípoch Márie Montessori a teologických znalostiach Sofie Cavalletti. Deti sú privádzané k modlitbe a poznávaniu Boha.',
            'velkost_textu' => 20,
            'farba_textu' => 'black',
            'font_textu' => '"Inknut Antiqua", serif',

        ]);

        DB::table('sekcie')->insert([
            'id' => 6,
            'nazov_sekcie' => 'activities_atrium_stretnutia',

            'nadpis' => '<b>Stretnutia sú pre vekovú skupinu 6-9+ rokov a bývať budú pondelky v čase od 15:30 do 17:30.<br></b>',
            'typografia_nadpisu' => '30px',
            'farba_nadpisu' => '#34A0CE',
            'font_nadpisu' => '"Inknut Antiqua", serif',

            'text' => '<b>Prihláška: <a href="https://forms.gle/j6wfJjf1ebfjaFr56" style="color: #93B660;">https://forms.gle/j6wfJjf1ebfjaFr56</a></b>',
        ]);

        DB::table('sekcie')->insert([
            'id' => 7,
            'nazov_sekcie' => 'program',

            'nadpis' => 'Aktuálny Program HERNE',
            'typografia_nadpisu' => 'display-4',
            'farba_nadpisu' => '#C75646',
            'font_nadpisu' => '"Questrial", serif',

            'ikonka_nadpisu' => 'fa-solid fa-gamepad fa-lg',
            'farba_ikonky_nadpisu' => '#C75646',

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekcie');
    }
};
