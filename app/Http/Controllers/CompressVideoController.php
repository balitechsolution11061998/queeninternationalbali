<?php

namespace App\Http\Controllers;

use FFMpeg\FFMpeg;
use Illuminate\Http\Request;

class CompressVideoController extends Controller
{
    //
    public function compressVideo()
        {
            $videoFile = 'video/background.mp4';
            $compressedVideoFile = 'video/compressed_background.mp4';

            $ffmpeg = FFMpeg::create();
            $video = $ffmpeg->open($videoFile);

            $format = new \FFMpeg\Format\Video\WebM();
            $format->setAudioCodec('libvorbis');
            $format->setVideoCodec('libvpx');

            $video->save($format, $compressedVideoFile);

            // Return the compressed video file path
            return asset($compressedVideoFile);
        }
}
