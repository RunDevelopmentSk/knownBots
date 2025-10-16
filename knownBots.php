<?php

$knownBots = array(
    //
    // matomo-org
    //
    // NOTE: See https://raw.githubusercontent.com/matomo-org/device-detector/refs/heads/master/regexes/bots.yml
    // to update
    //
    // AI prompt: Please extract all the "regex" entries from the file bots.yml under "producer" > "url" that contain "google.com" and join the found regexes into one resulting regex using the pipe "|"
    //
    // google.com
    'Google Search Console|Google Page Speed Insights|google_partner_monitoring|Google-Cloud-Scheduler|Google-Structured-Data-Testing-Tool|GoogleStackdriverMonitoring|Google-Transparency-Report|Google-CloudVertexBot|via ggpht\.com GoogleImageProxy|Google-Document-Conversion|GoogleDocs; apps-spreadsheets|GoogleDocs; apps-presentations|GoogleDocs;|Googlebot-News|Adwords-(?:DisplayAds|Express|Instant)|Google Web Preview|Google[ -]Publisher[ -]Plugin|Google-(?:adstxt|Ads-Conversions|Ads-Qualify|Adwords|AMPHTML|Assess|Extended|HotelAdsVerifier|InspectionTool|Lens|PageRenderer|Read-Aloud|Shopping-Quality|Site-Verification|Sites-Thumbnails|speakr|Stale-Content-Probe|Test|Youtube-Links)|(?:AdsBot|APIs|Feedfetcher|Mediapartners)-Google(?:-Mobile)?|Google(?:AdSenseInfeed|AssociationService|bot|Other|Prober|Producer|Sites)|Google.*/\+/web/snippet|^Google$|Google-Safety|DuplexWeb-Google|Google-Area120-PrivacyPolicyFetcher|Chrome Privacy Preserving Prefetch Proxy' => 'sessionForbidden',
    // microsoft.com
    'MSNBot|msrbot|bingbot|bingadsbot|BingPreview|msnbot-(UDiscovery|NewsBlogs)|adidxbot|iisbot|MicrosoftPreview|microsoft-flow/' => 'sessionForbidden',
    // meta.com
    'facebook(?:catalog|externalhit|externalua|platform|scraper)|meta-externalagent|meta-externalfetcher|FacebookBot' => 'accessForbidden',
    // amazon.com
    'Amazonbot|AmazonAdBot|ELB-HealthChecker' => 'accessForbidden',
    // seznam.cz, zbozi.cz
    'SeznamEmailProxy|Seznam-Zbozi-robot|SeznamBot|SklikBot|Seznam screenshot-generator' => 'sessionForbidden',
    // heureka.cz
    'Heurekabot-Feed' => 'sessionForbidden',

    //
    // custom
    //
    // meta.com
    'MetaWebIndexer' => 'accessForbidden',
    'meta-externalads' => 'accessForbidden',
    // other
    'DataForSeoBot' => 'accessForbidden',
    'SemrushBot' => 'accessForbidden',
    'AhrefsBot' => 'accessForbidden',
    'AwarioBot' => 'accessForbidden',
    'Barkrowler' => 'accessForbidden',
    'OAI-SearchBot' => 'sessionForbidden',
    'GPTBot' => 'sessionForbidden',
);
