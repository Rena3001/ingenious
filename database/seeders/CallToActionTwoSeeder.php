<?php

namespace Database\Seeders;

use App\Models\CallToActionTwo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CallToActionTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CallToActionTwo::create([
            'title_en' => 'MODERN LIFE AND WORK PULLS',
            'title_az' => 'MÜASİR HƏYAT VƏ İŞ SİZİ',
            'title_de' => 'MODERNES LEBEN UND ARBEIT ZIEHT',
            'title_es' => 'LA VIDA Y EL TRABAJO MODERNOS TE JALAN',
            'title_fr' => 'LA VIE ET LE TRAVAIL MODERNES VOUS TIRAIENT',
            'title_ru' => 'СОВРЕМЕННАЯ ЖИЗНЬ И РАБОТА ТЯНУТ',
            'title_zh' => '现代生活和工作拉动您',
            'subtitle_en' => 'Us All In A Million Different Directions',
            'subtitle_az' => 'Hamımızı Milyon Fərqli İstiqamətlərə',
            'subtitle_de' => 'Uns Alle In Eine Million Verschiedene Richtungen',
            'subtitle_es' => 'A Todos Nosotros En Un Millón De Direcciones Diferentes',
            'subtitle_fr' => 'Nous Tous Dans Un Million De Directions Différentes',
            'subtitle_ru' => 'Нас Всех В Миллион Разных Направлений',
            'subtitle_zh' => '我们所有人在一百万个不同的方向上',
            'background_image' => 'call_to_action_two/bg_image.jpg',
            'button_url' => '#',
        ]);
    }
}
