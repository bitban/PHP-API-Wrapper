<?php

namespace Brightcove\Item\Video;

use Brightcove\Item\ObjectBase;

/**
 * Rendition video
 */
class Rendition extends ObjectBase {

    protected $remote_url;
    protected $video_codec;
    protected $video_container;
    protected $progressive_download;

    public function applyJSON(array $json) {
        parent::applyJSON($json);
        $this->applyProperty($json, 'remote_url');
        $this->applyProperty($json, 'video_codec');
        $this->applyProperty($json, 'video_container');
        $this->applyProperty($json, 'progressive_download');
    }

    /**
     * @return string
     */
    public function getRemoteUrl() {
        return $this->remote_url;
    }

    /**
     * @param string $remote_url
     * @return $this
     */
    public function setRemoteUrl($remote_url) {
        $this->remote_url = $remote_url;
        $this->fieldChanged('remote_url');
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoCodec() {
        return $this->video_codec;
    }

    /**
     * @param string $video_codec
     * @return $this
     */
    public function setVideoCodec($video_codec) {
        $this->video_codec = $video_codec;
        $this->fieldChanged('video_codec');
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoContainer() {
        return $this->video_container;
    }

    /**
     * @param string $video_container
     * @return $this
     */
    public function setVideoContainer($video_container) {
        $this->video_container = $video_container;
        $this->fieldChanged('video_container');
        return $this;
    }

    /**
     * @return string
     */
    public function getProgressiveDownload() {
        return $this->progressive_download;
    }

    /**
     * @param string $progressive_download
     * @return $this
     */
    public function setProgressiveDownload($progressive_download) {
        $this->progressive_download = $progressive_download;
        $this->fieldChanged('progressive_download');
        return $this;
    }
}
