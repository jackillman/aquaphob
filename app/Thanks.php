<?php
$tmp = $_SERVER['HTTP_REFERER'];
header ('Refresh: 10; URL=' . $tmp);
$date = date("d.m.Y H:i:s");
$source= "aquaphob.net";
$pspam = "IP" . $_SERVER['REMOTE_ADDR'];
$spam = strpos( $pspam,"P66.249");


$to_1c = 'anma.orders@meta.ua';
$to = 'aquaphob.net@gmail.com';
$to_copy = '<un_cle_v@mail.ru>';
$subject = 'Order from ' . $_SERVER['HTTP_REFERER'] . "IP " . $_SERVER['REMOTE_ADDR'];
$subject = "=?utf-8?b?" . base64_encode ($subject) . "?=";
$message = $date . ";" . $source . ";" . $_POST['tel'] . ";" . $_POST['client'];
$headers = 'Content-type: text/plain; charset="utf-8"';
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Date: " . date ('D, d M Y h:i:s O') . "\r\n";




$msg = "Поздравляем! Ваш заказ принят!";

//Запись в БД nonwater_1c

include_once ("1c_put.php");

$pixel_id= "1672381223050656";

if ($_POST['client'] == '') {
	$pixel_id= "1672381223050333";
}
else{
	mail ($to_copy,$subject,$message);
}

?>

<html lang="ru">
<head>
	<meta http-equiv="Content-Language" content="ru">
<meta http-equiv="Content-Type" content="text/html; utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$msg?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
    body {
        line-height: 1;
        
        font-family: Arial;
        font-size: 15px;
        color: #fff;
        width: 100%;
        height: 100%;
/*        max-height: 700px;*/
        padding: 0;
        margin: 0;
        background: #161825;

    }
    .wrap{
        background: url(images/bg-bn.jpg) no-repeat center;
        height: 100%;
        background-size:cover;
    }
    h2 {
        margin: 0;
        padding: 0;
        font-size: 36px;
        line-height: 44px;
        color: #fff;
        text-align: center;
        font-weight: bold;
    }
    a {
        color: orange;
    }
    a:hover {
        color: #d1b465;
    }
    .list_info li span {
        padding-right: 5px;
        display: inline-block;
        font-weight: bold;
        font-style: normal;
    }
    .list_info li #ord{
        width: auto;
    }
    .list_info {
        text-align: left;
        display: inline-block;
        list-style: none;
        padding: 0;
    }
    .list_info li {
        margin: 11px 0px;
    }
    .fail {
        margin: 25px 0 20px 0px;
        text-align: center;
    }
    .email {
        position: relative;
        text-align: center;
        margin-top: 40px;
    }
    .email input {
        height: 30px;
        width: 200px;
        font-size: 14px;
        padding-right: 10px;
        padding-left: 10px;
        outline: none;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        border: 1px solid #B6B6B6;
        margin-bottom: 10px;
    }
    .block_success {
        max-width: 960px;
        padding: 50px 30px 10px 30px;
        margin: 0px auto;
    }
    .success {
        text-align: center;
    }

    .btn-back{
        margin: 0 auto;
        display: block;
        max-width: 370px;
        height: 55px;
        line-height: 55px;
        background-color: #FF5806;
        border: none;
        outline: none;
        transition: background-color 0.5s ease;
        text-align: center;
        text-decoration: none;
        font-size: 30px;
        color: #FFFFFF;
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        cursor: pointer;
    }
    .btn-back:hover {
        background-color: #2c3e50;
        color: #fff;
        text-decoration: none;
    }
    .promo-item{
            max-width: 390px;
            padding: 15px;
            background-color: rgba(20, 20, 20, .6);
            font-weight: bold;
            font-size: 20px;
            color:#fff;
    }
    .promo-product{
        max-width: 253px;
        padding: 8px 15px;
        font-size: 30px;
        text-transform: uppercase;
        background-color: rgba(20, 20, 20, .6);
        font-weight: bold;
        color:#fff;
    }
    .promo-btn{

        display: block;
        width: 340px;
        padding: 12px 30px;
        background: #ff3b3b;
        border-radius: 28px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 22px;
        color: white;
        font-weight: bold;
        transition: all 2s;
    }
    .promo-btn:hover {
        background-color: #2c3e50;
        color: #fff;
        text-decoration: none;
    }
    .promo-box{
        padding-top: 40px;
    }
    
    .promo-box-img img{
        float: right;
/*        width: 100%;*/
        height: 100%;
        max-width: 192px;
        max-height: 270px;
    }
    .promo{
         margin-top: 20px;
    }
    .imgmob{
        display: none;
    }
    .imgdesk{
        display: block;
    }
    @media (max-width: 992px){
        -webkit-background-size: auto;
        background-size: auto;
    }
    
    @media (max-width: 768px){
    .promo{
         margin-top: 0px;
    }
    .block_success {
        
        padding-top: 20px;
        
    }
    .promo-box{
        padding-top: 40px;
    }
        .promo-box-img img{
            float: none;
            margin: 0 auto 10px;
            display: block;
            text-align: center;
            width: auto;
        }
        .promo-item{
            width: auto;
            font-size:16px;
        }
        .promo-product{
            font-size: 24px;
        }
        .promo-btn{
            width: auto;
            margin-bottom: 30px;
            
        }
        body{
            height: auto;
        }
        h2{
            font-size: 26px;
            line-height: 26px;
        }
        h3.success{
            font-size: 16px;
        }
        .btn-back{
            max-width: 280px;
            font-size: 20px;
        }
        .imgmob{
            display: block!important;
        }
        .imgdesk{
            display: none!important;
        }
    }
     @media (max-width: 400px){
        .promo-item{
            
            font-size:12px;
        }
        .promo-product{
            font-size: 18px;
        }
         .wrap{
             height: auto;
         }
    }
    @media (max-width: 600px){
        .promo-box-img img{
            height: auto;
            margin-top: 15px;
            max-width: 65px;
           
        }
        
    }
</style>
  
	<?= $script ?>
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?php echo $pixel_id; ?>');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?php echo $pixel_id; ?>&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</head>
<script>
fbq('track', 'Lead', {
value: 8.00,
currency: 'USD'
});
</script>

<body>


<div class="wrap">
	

    <div class="block_success">					
        <h2 style="text-transform: uppercase;">Вітаємо! Ваше замовлення прийняте!</h2>
        <p class="success">
            <?=$msg2?>
        </p>
        <h3 class="success">
            Перевірте, чи введена вами інформація є правильною.
        </h3>
        <div class="success">
            <ul class="list_info">
                <li><span>Імя:  </span><span class="datas" id="client"><?= $_POST['client'] ?></span></li>
                <li><span>Телефон:</span><span class="datas" id="tel"><?= $_POST['tel'] ?></span></li>
<!--                <li><span>Order: </span><span id="ord"><?php echo " ".$mycount;?></span></li>-->

            </ul>
            <br/><span id="submit"></span>
        </div>
        
        <p class="fail success">Якщо ви зробили помилку, заповнивши форму, <b> <a href="javascript: history.back(-1);">будь-ласка, оформіть заявку ще раз.</a></b></p>

    </div>

    <a class="btn-back" href="javascript: history.back(-1);">Повернутись на головну</a>
  
<div class="promo">  
    <div class="container">
        <div class="row">


            <div class="col-xs-4 col-sm-6 promo-box-img">
                <img src="images/tovar13.png" class="img-responsive imgdesk" alt="AnmaxClear">
                <img src="images/tovar13.png" class="img-responsive imgmob" alt="AnmaxClear">
            </div>
             <div class="col-xs-8 col-sm-6 promo-box">
                <p class="promo-item">Захистіть свій автомобіль і насолоджуйтесь їздою
в будь-яку погоду з нашим новим продуктом:</p>
                <p class="promo-product">Anmax Clear</p>

                <a href="//anmax.in.ua" class="promo-btn">Придбати</a>
             </div>
        </div>
    </div>  
</div>   
   
</div>   

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
$tmp = $_SERVER['HTTP_REFERER'];
header ('Refresh: 10; URL=' . $tmp);

exit;
?>
<? //foreach($data as $key => $value) { echo "$key = $value <br />"; } ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function () {
			try {
				w.yaCounter31757046 = new Ya.Metrika({
					id: 31757046,
					clickmap: true,
					trackLinks: true,
					accurateTrackBounce: true,
					webvisor: true
				});
			} catch (e) {
			}
		});

		var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () {
					n.parentNode.insertBefore(s, n);
				};
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else {
			f();
		}
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
	<div><img src="https://mc.yandex.ru/watch/31757046"
	          style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
<?php
unset($_POST);

 ?>