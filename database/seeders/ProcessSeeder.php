<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Process;
use App\Models\ProcessStep;

class ProcessSeeder extends Seeder
{
    public function run(): void
    {
        /* ===========================
         | MAIN PROCESS
         =========================== */
        $process = Process::create([
            'title_az' => 'İş Prosesi',
            'title_en' => 'Work Process',
            'title_ru' => 'Рабочий процесс',
            'title_de' => 'Arbeitsprozess',
            'title_fr' => 'Processus de travail',
            'title_es' => 'Proceso de trabajo',
            'title_zh' => '工作流程',

            'description_az' => 'Mebel istehsalı sifarişdən təhvilədək mərhələli və sistemli şəkildə həyata keçirilir.',
            'description_en' => 'Furniture production is carried out step by step from order to delivery.',
            'description_ru' => 'Производство мебели осуществляется поэтапно — от заказа до сдачи.',
            'description_de' => 'Die Möbelproduktion erfolgt schrittweise vom Auftrag bis zur Lieferung.',
            'description_fr' => 'La production de meubles est réalisée étape par étape, de la commande à la livraison.',
            'description_es' => 'La producción de muebles se realiza paso a paso desde el pedido hasta la entrega.',
            'description_zh' => '家具生产从订单到交付分阶段、有系统地进行。',
        ]);

        /* ===========================
         | STEPS (12 mərhələ)
         =========================== */
        $steps = [
            1 => 'İlkin müraciət və ehtiyacların müəyyənləşdirilməsi',
            2 => 'Texniki ölçülərin götürülməsi',
            3 => 'Dizayn və planlaşdırma',
            4 => 'Qiymət təklifi və razılaşma',
            5 => 'Müqavilənin bağlanması',
            6 => 'Material seçimi',
            7 => 'İstehsal prosesinin başlanması',
            8 => 'Keyfiyyətə nəzarət',
            9 => 'Hazır məhsulun yığılması',
            10 => 'Çatdırılma',
            11 => 'Quraşdırma',
            12 => 'İstismara təhvil və sınaq',
        ];

        foreach ($steps as $number => $titleAz) {
            ProcessStep::create([
                'process_id' => $process->id,
                'step_number' => $number,
                'layout' => $number % 2 === 1 ? 'left-image' : 'right-image',

                'title_az' => $titleAz,
                'title_en' => 'Step '.$number,
                'title_ru' => 'Шаг '.$number,
                'title_de' => 'Schritt '.$number,
                'title_fr' => 'Étape '.$number,
                'title_es' => 'Paso '.$number,
                'title_zh' => '步骤 '.$number,

                'description_az' => 'Bu mərhələdə proses sistemli və peşəkar şəkildə icra olunur.',
                'description_en' => 'At this stage, the process is carried out in a systematic and professional manner.',
                'description_ru' => 'На этом этапе процесс выполняется системно и профессионально.',
                'description_de' => 'In dieser Phase wird der Prozess systematisch und professionell durchgeführt.',
                'description_fr' => 'À cette étape, le processus est exécuté de manière systématique et professionnelle.',
                'description_es' => 'En esta etapa, el proceso se realiza de manera sistemática y profesional.',
                'description_zh' => '在此阶段，流程以系统化和专业化方式执行。',

                // placeholder image (sonra admin-dən dəyişəcəksən)
                'image' => 'process/step-'.$number.'.jpg',

                'button_text_az' => $number === 12 ? null : 'Növbəti mərhələ',
                'button_text_en' => $number === 12 ? null : 'Next Step',
                'button_text_ru' => $number === 12 ? null : 'Следующий шаг',
                'button_text_de' => $number === 12 ? null : 'Nächster Schritt',
                'button_text_fr' => $number === 12 ? null : 'Étape suivante',
                'button_text_es' => $number === 12 ? null : 'Siguiente paso',
                'button_text_zh' => $number === 12 ? null : '下一步',

                'button_link' => $number === 12 ? null : '#step-'.($number + 1),
            ]);
        }
    }
}
