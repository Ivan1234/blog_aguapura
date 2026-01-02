<?php

namespace App\Jobs;

use App\Models\Campaign;
use App\Models\Subscriber;
use App\Models\CampaignSend;
use App\Mail\CampaignMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illumunate\Support\Facades\Mail;

class SendCampaignJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public Campaign $campaign)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Subscriber::where('confirmed', true)
                    ->whereNull('deleted_at')
                    ->chunk(100, function($subscribers){
                        foreach($subscribers as $subscriber){

                            //enviar el correo a la cola
                            Mail::to($subscriber->email)->queue(
                                new CampaignMail($this->campaign, $subscriber)
                            );

                            CampaignSend::create([
                                'campaign_id'   => $this->campaign->id,
                                'subscriber_id' => $subscriber->id
                            ]);
                        }
                    });
                    
        $this->campaign->update([
            'status' => 'enviado'
        ]);
    }
}
