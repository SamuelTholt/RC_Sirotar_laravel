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

            $table->longText('podtext')->nullable();
            $table->integer('velkost_podtextu')->nullable();
            $table->string('farba_podtextu')->nullable();
            $table->string('font_podtextu')->nullable();

        });

        DB::table('sekcie')->insert([
            'id' => 1,
            'nazov_sekcie' => 'about_us',

            'nadpis' => 'O nás - Aktivity',
            'typografia_nadpisu' => 'display-4',
            'farba_nadpisu' => '#F4FEFD',
            'font_nadpisu' => '"Questrial", serif',

            'ikonka_nadpisu' => 'fa-solid fa-puzzle-piece fa-lg',
            'farba_ikonky_nadpisu' => '#FFFFFF',

            'text' => 'Rodinné centrum <strong><b><em>Sirotár</em></b></strong> pod sebou združuje rôzne aktivity.V rámci neho sme otvorili <strong><b><em>herňu Rodinného centra a Átrium</em></b></strong>, ktoré sú určené mamičkám s menšími deťmi. Cieľom je vytvoriť priestor pre lepšie prežívanie materstva, osobný aj duchovný rozvoj a sebarealizáciu mamičiek. Rovnako aj vytvoriť priestor pre zdravú socializáciu ich ratolestí.',
            'velkost_textu' => 25,
            'farba_textu' => '#000000',
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
            'farba_textu' => '#000000',
            'font_textu' => '"Inknut Antiqua", serif',

        ]);

        DB::table('sekcie')->insert([
            'id' => 3,
            'nazov_sekcie' => 'activities_herna_aktivity_pre_deti',

            'nadpis' => '<b><u>Aktivity pre deti:</u></b>',
            'typografia_nadpisu' => '20px',
            'farba_nadpisu' => '#000000',
            'font_nadpisu' => '"Inknut Antiqua", serif',

            'text' => ' <li>Hravá angličtina</li>
                        <li>Montessori hernička</li>
                        <li>Detské tvorivé dielne</li>
                        <li>Klavírna víla – Boinka</li>
                        <li>Katechézy Dobrého pastiera</li>',
            'velkost_textu' => 20,
            'farba_textu' => '#000000',
            'font_textu' => '"Inknut Antiqua", serif',

        ]);

        DB::table('sekcie')->insert([
            'id' => 4,
            'nazov_sekcie' => 'activities_herna_prednasky_pre_mamicky',

            'nadpis' => '<b><u>Prednášky pre mamičky:</u></b>',
            'typografia_nadpisu' => '20px',
            'farba_nadpisu' => '#000000',
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
            'farba_textu' => '#000000',
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
            'farba_textu' => '#000000',
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

        DB::table('sekcie')->insert([
            'id' => 8,
            'nazov_sekcie' => 'gallery',

            'nadpis' => 'Galéria',
            'typografia_nadpisu' => 'display-4',
            'farba_nadpisu' => '#FFFFFF',
            'font_nadpisu' => '"Questrial", serif',

            'ikonka_nadpisu' => 'fa-solid fa-camera fa-lg',
            'farba_ikonky_nadpisu' => '#FFFFFF',

        ]);


        DB::table('sekcie')->insert([
            'id' => 9,
            'nazov_sekcie' => 'team',

            'nadpis' => 'Náš tím',
            'typografia_nadpisu' => 'display-4',
            'farba_nadpisu' => '#80BA42',
            'font_nadpisu' => '"Questrial", serif',

            'ikonka_nadpisu' => 'fa-solid fa-users fa-lg',
            'farba_ikonky_nadpisu' => '#80BA42',

        ]);

        DB::table('sekcie')->insert([
            'id' => 10,
            'nazov_sekcie' => 'kontakt',

            'nadpis' => 'Kontaktujte nás',
            'typografia_nadpisu' => 'display-4',
            'farba_nadpisu' => '#F4FEFD',
            'font_nadpisu' => '"Questrial", serif',


        ]);

        DB::table('sekcie')->insert([
            'id' => 11,
            'nazov_sekcie' => 'kontakt_adresa',

            'nadpis' => 'Adresa',
            'typografia_nadpisu' => '25px',
            'farba_nadpisu' => '#000000',
            'font_nadpisu' => '"Questrial", serif',

            'ikonka_nadpisu' => 'fa-solid fa-location-dot fa-xl',
            'farba_ikonky_nadpisu' => '#000000',

            'text' => 'Jezuitská 6, Žilina, Slovakia, 01001 (v priestoroch Fidélia)',
            'velkost_textu' => 15,
            'farba_textu' => '#000000',
            'font_textu' => '"Inknut Antiqua", serif',
        ]);


        DB::table('sekcie')->insert([
            'id' => 12,
            'nazov_sekcie' => 'kontakt_fb',

            'nadpis' => 'Facebook',
            'typografia_nadpisu' => '25px',
            'farba_nadpisu' => '#000000',
            'font_nadpisu' => '"Questrial", serif',

            'ikonka_nadpisu' => 'fa-brands fa-facebook fa-xl',
            'farba_ikonky_nadpisu' => '#004070',

            'text' => 'https://www.facebook.com/rc.sirotar',
            'font_textu' => '"Questrial", serif',
        ]);


        DB::table('sekcie')->insert([
            'id' => 13,
            'nazov_sekcie' => 'kontakt_number_mail',

            'nadpis' => 'Kontakt',
            'typografia_nadpisu' => '25px',
            'farba_nadpisu' => '#000000',
            'font_nadpisu' => '"Questrial", serif',

            'ikonka_nadpisu' => 'fa-solid fa-phone fa-xl',
            'farba_ikonky_nadpisu' => '#000000',

            'text' => '+421 907 175 211',
            'font_textu' => '"Inknut Antiqua", serif',
            'velkost_textu' => 15,
            'farba_textu' => '#000000',

            'podtext' => 'info@rcsirotar.sk',
            'font_podtextu' => '"Inknut Antiqua", serif',
            'velkost_podtextu' => 15,
            'farba_podtextu' => '#FFA500',

        ]);


        DB::table('sekcie')->insert([
            'id' => 14,
            'nazov_sekcie' => 'kontakt_map',

            'text' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.805470931671!2d18.733343057027465!3d49.22321619782527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47145ea65432012f%3A0x1adc0f9c4b5bd421!2sJezuitsk%C3%A1%206%2C%20010%2001%20%C5%BDilina!5e0!3m2!1ssk!2ssk!4v1729810453893!5m2!1ssk!2ssk',


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
