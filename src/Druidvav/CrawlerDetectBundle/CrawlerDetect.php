<?php
namespace Druidvav\CrawlerDetectBundle;

use Jaybizzle\CrawlerDetect\CrawlerDetect as JayCrawlerDetect;
use Symfony\Component\HttpFoundation\Request;

class CrawlerDetect
{
    protected $detect;

    public function __construct(JayCrawlerDetect $detect)
    {
        $this->detect = $detect;
    }

    public function isCrawler(Request $request)
    {
        return $this->detect->isCrawler($request->headers->get('User-Agent'));
    }
}