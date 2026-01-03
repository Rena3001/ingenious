<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\TechnicalContent;
use Illuminate\Support\Facades\DB;

class TechnicalContentSeeder extends Seeder
{
    public function run(): void
    {

        $category = Category::where('id', 'security-products')->first();

        TechnicalContent::create([

            /* =========================
               META
            ========================= */
            'category_id' => $category?->id,
            'layout'       => 'default',
            'media_type'   => 'video',
            'media_url'    => 'https://www.youtube.com/watch?v=example',
            'published_at' => now(),
            'is_active'    => true,

            /* =========================
               AZ
            ========================= */
            'title_az'   => 'Kilidi necə reset edə bilərəm?',
            'content_az' => 'Kilidi reset etmək üçün cihazı söndürün, reset düyməsini 10 saniyə basılı saxlayın. İşıq siqnalı yanıb-söndükdən sonra cihaz zavod ayarlarına qayıdacaq. Model kodları: BO1-1-10MB, BO1-2-106-140MB.',

            /* =========================
               EN
            ========================= */
            'title_en'   => 'How can I reset the lock?',
            'content_en' => 'To reset the lock, turn off the device and hold the reset button for 10 seconds. When the LED blinks, the device will return to factory settings. Supported models: BO1-1-10MB, BO1-2-106-140MB.',

            /* =========================
               RU
            ========================= */
            'title_ru'   => 'Как сбросить замок?',
            'content_ru' => 'Чтобы сбросить замок, выключите устройство и удерживайте кнопку сброса 10 секунд. После мигания индикатора устройство вернётся к заводским настройкам. Модели: BO1-1-10MB, BO1-2-106-140MB.',

            /* =========================
               DE
            ========================= */
            'title_de'   => 'Wie kann ich das Schloss zurücksetzen?',
            'content_de' => 'Schalten Sie das Gerät aus und halten Sie die Reset-Taste 10 Sekunden gedrückt. Nach dem Blinken der LED wird das Gerät auf die Werkseinstellungen zurückgesetzt. Modelle: BO1-1-10MB, BO1-2-106-140MB.',

            /* =========================
               ES
            ========================= */
            'title_es'   => '¿Cómo puedo restablecer la cerradura?',
            'content_es' => 'Apague el dispositivo y mantenga presionado el botón de reinicio durante 10 segundos. Cuando el LED parpadee, el dispositivo volverá a la configuración de fábrica. Modelos compatibles: BO1-1-10MB, BO1-2-106-140MB.',

            /* =========================
               FR
            ========================= */
            'title_fr'   => 'Comment réinitialiser la serrure ?',
            'content_fr' => 'Éteignez l’appareil et maintenez le bouton de réinitialisation enfoncé pendant 10 secondes. Lorsque le voyant clignote, l’appareil revient aux paramètres d’usine. Modèles pris en charge : BO1-1-10MB, BO1-2-106-140MB.',

            /* =========================
               ZH
            ========================= */
            'title_zh'   => '如何重置门锁？',
            'content_zh' => '请关闭设备并按住重置按钮约10秒。当指示灯闪烁时，设备将恢复出厂设置。适用型号：BO1-1-10MB，BO1-2-106-140MB。',
        ]);
    }
}
