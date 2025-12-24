<?php

namespace Database\Seeders;

use App\Models\LocalRecording;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalRecordingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LocalRecording::create([
            'title_az' => 'Nümunə Yerli Yazı 1',
            'title_en' => 'Sample Local Recording 1',
            'title_ru' => 'Пример локальной записи 1',
            'title_es' => 'Grabación Local de Muestra 1',
            'title_de' => 'Beispiel Lokalaufnahme 1',
            'title_fr' => 'Exemple d\'enregistrement local 1',
            'title_zh' => '示例本地录音 1',
            'description_az' => 'Bu, yerli yazı 1 üçün nümunə təsvirdir.',
            'description_en' => 'This is a sample description for local recording 1.',
            'description_ru' => 'Это пример описания для локальной записи 1.',
            'description_es' => 'Esta es una descripción de muestra para la grabación local 1.',
            'description_de' => 'Dies ist eine Beispielbeschreibung für die Lokalaufnahme 1.',
            'description_fr' => 'Ceci est une description d\'exemple pour l\'enregistrement local 1.',
            'description_zh' => '这是本地录音 1 的示例描述。',
            'background_image' => null,
            'content_image' => null,
            'is_active' => true,
        ]);
    }
}
