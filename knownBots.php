<?php

// list of known bots and their restrictions
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
    // generic bots
    'nuhk|grub-client|Download Demon|SearchExpress|Microsoft URL Control|borg|altavista|dataminr\.com|teoma|oegp|http%20client|htdig|mogimogi|larbin|scrubby|searchsight|semanticdiscovery|snappy|zeal(?!ot)|dataparksearch|findlinks|BrowserMob|URL2PNG|ZooShot|GomezA|Google SketchUp|Read%20Later|7Siters|centuryb\.o\.t9|InterNaetBoten|EasyBib AutoCite|Bidtellect|tomnomnom/meg|cortex|Re-re Studio|adreview|AHC/|NameOfAgent|Request-Promise|ALittle Client|Hello,? world|wp_is_mobile|0xAbyssalDoesntExist|Anarchy99|^revolt|nvd0rz|xfa1|Hakai|gbrmss|fuck-your-hp|IDBTE4M CODE87|Antoine|Insomania|Hells-Net|b3astmode|Linux Gnu \(cow\)|Test Certificate Info|iplabel|Magellan|TheSafex?Internetx?Search|Searcherx?web|kirkland-signature|LinkChain|survey-security-dot-txt|infrawatch|Time/|r00ts3c-owned-you|nvdorz|Root Slut|NiggaBalls|BotPoke|GlobalWebSearch|xx032_bo9vs83_2a|sslshed|geckotrail|Wordup|Keydrop|\(compatible\)|John Recon|SPARK COMMIT|masjesu|Komaru_The_Cat|Jesus Christ of Nazareth is LORD|Kowai|Hakai|LoliSec|LMAO|^xenu|^(?:chrome|firefox|Abcd|Dark|KvshClient|Node.js|Report Runner|url|Zeus|ZmEu)$|OnlyScans|TheInternetSearchx' => 'sessionForbidden',
    // generic detections
    '[a-z0-9_-]*(?:(?<!cu|power[ _]|m[ _])bot(?![ _]TAB|[ _]?5[0-9]|[ _]Senior|[ _]Junior)|analyzer|appengine|archiver?|checker|collector|crawl|crawler|(?<!node-|uclient-|Mikrotik/\d\.[x\d] |electron-)fetch(?:er)?|indexer|inspector|monitor|(?<!Microsoft |banshee-)project(?!or)|(?<!Google Wap |Blue |SpeedMode; )proxy|(?<!P)research|resolver|robots|(?<!Cam)scanner|scraper|script|searcher|(?<!-)security|spider(?! 8)|study|transcoder|uptime|user[ _]?agent|validator)(?:[^a-z]|$)' => 'sessionForbidden',

    //
    // custom
    //
    // meta.com
    'MetaWebIndexer' => 'accessForbidden',
    'meta-webindexer' => 'accessForbidden',
    'meta-externalads' => 'accessForbidden',
    // other
    'DataForSeoBot' => 'accessForbidden',
    'SemrushBot' => 'accessForbidden',
    'AhrefsBot' => 'accessForbidden',
    'AwarioBot' => 'accessForbidden',
    'Barkrowler' => 'accessForbidden',
    'OAI-SearchBot' => 'sessionForbidden',
    'GPTBot' => 'sessionForbidden',
    'GeedoProductSearch' => 'accessForbidden',
    // generic detections - official bots user agents contain URL of bot info page
    '\+https://' => 'sessionForbidden',
);
