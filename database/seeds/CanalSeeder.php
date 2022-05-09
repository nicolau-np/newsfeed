<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CanalSeeder extends Seeder
{
    static $canals = [
        [
            'canal' => "RTP Madeira",
            'img' => "https://cdn-images.rtp.pt/common/img/channels/logos/color/horizontal/107-443519141305.png",
            'link' => "https://streaming-live.rtp.pt/liverepeater/smil:rtpmadeira.smil/playlist.m3u8",
            'estado' => "on",
        ], [
            'canal' => "Porto Canal",
            'img' => "https://upload.wikimedia.org/wikipedia/commons/b/ba/Logo_Porto_Canal.jpg",
            'link' => "https://streamer-b02.videos.sapo.pt/live/portocanal/playlist.m3u8",
            'estado' => "on",
        ],
    ];
    public function run()
    {
        foreach (Self::$canals as $canals) {
            DB::table('canals')->insert(
                $canals
            );
        }
    }
}