<?php

namespace App\Console;

use App\Models\Campaign;
use App\Jobs\SendCampaignJob;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Definimos el horario de comandos de la aplicación. Aquí es donde configuramos la revisión de campañas programadas
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function(){
            // Buscamos campañas cuyo status sea "progamado"
            // Que el valor en el campo scheduled_at sea menor o igual a la fecha actual
            $campaigns = Campaign::where('status', 'programado')
                        ->where('scheduled_at', '<=', now())
                        ->get();
            
            foreach($campaigns as $campaign){
                // Cambiamos el estado de inmediato a "procesando". Estro es CRITICO, si el job tarda mas de un día, el scheduler volverá a correr y vería la campaña como "programado" otra vez, duplicando todos los correos

                $campaign->update([
                    'status' => 'procesando'
                ]);

                //Despachamos el job maestro, este job se encargará de hacer el chunk de suscriptores y colocar cada campaignMail
                SendCampaignJob::dispatch($campaign);
            }
        })
        ->daily()
        ->name('check-scheduled-campaigns')
        ->withoutOverlapping(); //Evita que la tarea se solape consigo misma
    }

    /**
     * Registro los comandos basados en la clase.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }


}
