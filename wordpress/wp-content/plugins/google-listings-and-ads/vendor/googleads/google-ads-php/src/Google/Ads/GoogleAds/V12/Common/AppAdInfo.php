<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An app ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.AppAdInfo</code>
 */
class AppAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Mandatory ad text.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.AdTextAsset mandatory_ad_text = 1;</code>
     */
    protected $mandatory_ad_text = null;
    /**
     * List of text assets for headlines. When the ad serves the headlines will
     * be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdTextAsset headlines = 2;</code>
     */
    private $headlines;
    /**
     * List of text assets for descriptions. When the ad serves the descriptions
     * will be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdTextAsset descriptions = 3;</code>
     */
    private $descriptions;
    /**
     * List of image assets that may be displayed with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdImageAsset images = 4;</code>
     */
    private $images;
    /**
     * List of YouTube video assets that may be displayed with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdVideoAsset youtube_videos = 5;</code>
     */
    private $youtube_videos;
    /**
     * List of media bundle assets that may be used with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdMediaBundleAsset html5_media_bundles = 6;</code>
     */
    private $html5_media_bundles;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V12\Common\AdTextAsset $mandatory_ad_text
     *           Mandatory ad text.
     *     @type array<\Google\Ads\GoogleAds\V12\Common\AdTextAsset>|\Google\Protobuf\Internal\RepeatedField $headlines
     *           List of text assets for headlines. When the ad serves the headlines will
     *           be selected from this list.
     *     @type array<\Google\Ads\GoogleAds\V12\Common\AdTextAsset>|\Google\Protobuf\Internal\RepeatedField $descriptions
     *           List of text assets for descriptions. When the ad serves the descriptions
     *           will be selected from this list.
     *     @type array<\Google\Ads\GoogleAds\V12\Common\AdImageAsset>|\Google\Protobuf\Internal\RepeatedField $images
     *           List of image assets that may be displayed with the ad.
     *     @type array<\Google\Ads\GoogleAds\V12\Common\AdVideoAsset>|\Google\Protobuf\Internal\RepeatedField $youtube_videos
     *           List of YouTube video assets that may be displayed with the ad.
     *     @type array<\Google\Ads\GoogleAds\V12\Common\AdMediaBundleAsset>|\Google\Protobuf\Internal\RepeatedField $html5_media_bundles
     *           List of media bundle assets that may be used with the ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Mandatory ad text.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.AdTextAsset mandatory_ad_text = 1;</code>
     * @return \Google\Ads\GoogleAds\V12\Common\AdTextAsset|null
     */
    public function getMandatoryAdText()
    {
        return $this->mandatory_ad_text;
    }

    public function hasMandatoryAdText()
    {
        return isset($this->mandatory_ad_text);
    }

    public function clearMandatoryAdText()
    {
        unset($this->mandatory_ad_text);
    }

    /**
     * Mandatory ad text.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.AdTextAsset mandatory_ad_text = 1;</code>
     * @param \Google\Ads\GoogleAds\V12\Common\AdTextAsset $var
     * @return $this
     */
    public function setMandatoryAdText($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Common\AdTextAsset::class);
        $this->mandatory_ad_text = $var;

        return $this;
    }

    /**
     * List of text assets for headlines. When the ad serves the headlines will
     * be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdTextAsset headlines = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeadlines()
    {
        return $this->headlines;
    }

    /**
     * List of text assets for headlines. When the ad serves the headlines will
     * be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdTextAsset headlines = 2;</code>
     * @param array<\Google\Ads\GoogleAds\V12\Common\AdTextAsset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeadlines($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V12\Common\AdTextAsset::class);
        $this->headlines = $arr;

        return $this;
    }

    /**
     * List of text assets for descriptions. When the ad serves the descriptions
     * will be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdTextAsset descriptions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * List of text assets for descriptions. When the ad serves the descriptions
     * will be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdTextAsset descriptions = 3;</code>
     * @param array<\Google\Ads\GoogleAds\V12\Common\AdTextAsset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDescriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V12\Common\AdTextAsset::class);
        $this->descriptions = $arr;

        return $this;
    }

    /**
     * List of image assets that may be displayed with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdImageAsset images = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * List of image assets that may be displayed with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdImageAsset images = 4;</code>
     * @param array<\Google\Ads\GoogleAds\V12\Common\AdImageAsset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V12\Common\AdImageAsset::class);
        $this->images = $arr;

        return $this;
    }

    /**
     * List of YouTube video assets that may be displayed with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdVideoAsset youtube_videos = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getYoutubeVideos()
    {
        return $this->youtube_videos;
    }

    /**
     * List of YouTube video assets that may be displayed with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdVideoAsset youtube_videos = 5;</code>
     * @param array<\Google\Ads\GoogleAds\V12\Common\AdVideoAsset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setYoutubeVideos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V12\Common\AdVideoAsset::class);
        $this->youtube_videos = $arr;

        return $this;
    }

    /**
     * List of media bundle assets that may be used with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdMediaBundleAsset html5_media_bundles = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHtml5MediaBundles()
    {
        return $this->html5_media_bundles;
    }

    /**
     * List of media bundle assets that may be used with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdMediaBundleAsset html5_media_bundles = 6;</code>
     * @param array<\Google\Ads\GoogleAds\V12\Common\AdMediaBundleAsset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHtml5MediaBundles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V12\Common\AdMediaBundleAsset::class);
        $this->html5_media_bundles = $arr;

        return $this;
    }

}

