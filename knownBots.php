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
    'Google Search Console|Google Page Speed Insights|google_partner_monitoring|Google-Cloud-Scheduler|Google-Structured-Data-Testing-Tool|GoogleStackdriverMonitoring|Google-Transparency-Report|Google-CloudVertexBot|via ggpht\.com GoogleImageProxy|Google-Document-Conversion|GoogleDocs; apps-spreadsheets|GoogleDocs; apps-presentations|GoogleDocs;|Googlebot-News|Adwords-(?:DisplayAds|Express|Instant)|Google Web Preview|Google[ -]Publisher[ -]Plugin|Google-(?:adstxt|Ads-Conversions|Ads-Qualify|Adwords|AMPHTML|Assess|Extended|HotelAdsVerifier|InspectionTool|Lens|PageRenderer|Read-Aloud|Shopping-Quality|Site-Verification|Sites-Thumbnails|speakr|Stale-Content-Probe|Test|Youtube-Links)|(?:AdsBot|APIs|Feedfetcher|Mediapartners)-Google(?:-Mobile)?|Google(?:AdSenseInfeed|AssociationService|bot|Other|Prober|Producer|Sites)|Google.*/\+/web/snippet|^Google$|Google-Safety|DuplexWeb-Google|Google-Area120-PrivacyPolicyFetcher|Chrome Privacy Preserving Prefetch Proxy' => 'noSession',
    // microsoft.com
    'MSNBot|msrbot|bingbot|bingadsbot|BingPreview|msnbot-(UDiscovery|NewsBlogs)|adidxbot|iisbot|MicrosoftPreview|microsoft-flow/' => 'noSession',
    // meta.com
    'facebook(?:catalog|externalhit|externalua|platform|scraper)|meta-externalagent|meta-externalfetcher|FacebookBot' => 'noSession',
    // amazon.com
    'Amazonbot|AmazonAdBot|ELB-HealthChecker' => 'noSession',
    // seznam.cz, zbozi.cz
    'SeznamEmailProxy|Seznam-Zbozi-robot|SeznamBot|SklikBot|Seznam screenshot-generator' => 'noSession',
    // heureka.cz
    'Heurekabot-Feed' => 'noSession',

    //
    // custom
    //
    // meta.com
    'MetaWebIndexer' => 'noSession',
    'meta-externalads' => 'noSession',
    // other
    'DataForSeoBot' => 'noSession',
    'SemrushBot' => 'noSession',
    'AhrefsBot' => 'noSession',
    'AwarioBot' => 'noSession',
    'Barkrowler' => 'noSession',
    'OAI-SearchBot' => 'noSession',
    'GPTBot' => 'noSession',
);
