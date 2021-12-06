<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank "Dummy"</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/style.css">
    <script defer src="src/script.js"></script>
    <script defer src="src/tabbed.js"></script>
    <script defer src="src/header.js"></script>
</head>
<body>


<?php
include_once './include/db_conn.php';
include './include/header.php';

?>

    <main>
        <div class="privPersDiv">
            <div class="privPersMes">For retail clients</div> 
        </div>

        <div class="slider">
          <a href="./natural_person/remittance.php"><div class="slide" data-link="loan.php"><img src="./img/1.png" alt="Money transfers"  /></div></a>
          <a href="./natural_person/plastic.php"><div class="slide" ><img src="./img/2.png" alt="Photo 2" /></div></a>
          <a href="./natural_person/mobile_banking.php"><div class="slide" ><img src="./img/3.png" alt="Photo 3" /></div></a>
          <a href="./natural_person/int_transactions.php"><div class="slide" ><img src="./img/4.png" alt="Photo 4" /></div></a>
          <a href="./natural_person/loans.php"><div class="slide" ><img src="./img/5.png" alt="Photo 5" /></div> </a>
          <a href="./natural_person/securities.php"><div class="slide" ><img src="./img/6.png" alt="Photo 6" /></div></a>
          <a href="./natural_person/savings.php"><div class="slide" ><img src="./img/7.png" alt="Photo 7" /></div></a>
          <a href="./natural_person/currency_exchange.php"><div class="slide" ><img src="./img/8.png" alt="Photo 8" /></div></a>
          <a href="./natural_person/docs.php"><div class="slide" ><img src="./img/9.png" alt="Photo 9" /></div> </a>
            <button class="slider__btn slider__btn--left">&larr;</button>
            <button class="slider__btn slider__btn--right">&rarr;</button>
            <div class="dots"></div>
          </div>

        <div class="corporateDiv">
            <div class="corporateMes">For Corporate Clients</div> 
        </div>

          <div class="wrapper">
            <div class="box main-style box1 boxleft" onclick="location.href = './legal_entity/docs.php';">
                <img
                src="./img/1-docs.svg"
                alt="triangle with all three sides equal"
                height="50"
                width="50"
                class="corpSvg" />
                <div class="wrappertext">Open an account</div> 
            </div>

            <div class="box main-style box2 boxleft" onclick="location.href = './legal_entity/loans.php';">
                <img
                src="./img/2-loan.svg"
                alt="triangle with all three sides equal"
                height="60"
                width="60"
                class="corpSvg" />
                <div class="wrappertext">Loans</div> 
            </div>
            <div class="box main-style box3 boxleft" onclick="location.href = './legal_entity/international_trn.php';">
                <img
                src="./img/3-international.svg"
                alt="triangle with all three sides equal"
                height="50"
                width="50" 
                class="corpSvg"/>
                <div class="wrappertext">Int transactions</div>
            </div>
            <div class="box main-style box4 boxcenter" onclick="location.href = './legal_entity/comprehensive_service.php';">
                <img
                src="./img/4-comprehensive.svg"
                alt="triangle with all three sides equal"
                height="60"
                width="60" 
                class="corpSvg"/>
                <div class="wrappertext">Comprehensive service</div>
            </div>
            <div class="box main-style box5 boxcenter" onclick="location.href = './legal_entity/cash_mng.php';">
                <img
                src="./img/5-calculations.svg"
                alt="triangle with all three sides equal"
                height="50"
                width="50"
                class="corpSvg" />
                <div class="wrappertext">Cash services</div>
            </div>
            <div class="box main-style box6 boxcenter" onclick="location.href = './legal_entity/distance_banking.php';">
                <img
                src="./img/6-onlinebanking.svg"
                alt="triangle with all three sides equal"
                height="50"
                width="50" 
                class="corpSvg"/>
                <div class="wrappertext">Online banking</div>
            </div>
            <div class="box main-style box7 boxright" onclick="location.href = './legal_entity/plastic.php';">
                <img
                src="./img/7-card.svg"
                alt="triangle with all three sides equal"
                height="60"
                width="60"
                class="corpSvg" />
                <div class="wrappertext">Debit cards</div>
            </div>
            <div class="box main-style box8 boxright" onclick="location.href = './legal_entity/bank_guarantee.php';">
                <img
                src="./img/8-guarantee.svg"
                alt="triangle with all three sides equal"
                height="60"
                width="60" 
                class="corpSvg"/>
                <div class="wrappertext">Banking guarantee</div>
            </div>
            <div class="box main-style box9 boxright" onclick="location.href = './legal_entity/securities.php';">
                <img
                src="./img/9-securities.svg"
                alt="triangle with all three sides equal"
                height="55"
                width="55" 
                class="corpSvg"/>
                <div class="wrappertext">Securities</div>
            </div>
          </div>
<?php 

$months = [
  'test',
  'января',
  'февраля',
  'марта',
  'апреля',
  'мая',
  'июня',
  'июля',
  'августа',
  'сентября',
  'октября',
  'ноября',
  'декабря'
];

//tkpb rates
$sql = "SELECT * FROM rates;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$rows;

if ($resultCheck > 0) {
  while ($row=mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
}
$dl_sell_dif = round($rows[0]['sell_cur']-$rows[0]['sell_prev'], 2);
$dl_buy_dif = round($rows[0]['buy_cur']-$rows[0]['buy_prev'], 2);
$eu_sell_dif = round($rows[1]['sell_cur']-$rows[1]['sell_prev'], 2);
$eu_buy_dif = round($rows[1]['buy_cur']-$rows[1]['buy_prev'], 2);
$yu_sell_dif = round($rows[2]['sell_cur']-$rows[2]['sell_prev'], 2);
$yu_buy_dif = round($rows[2]['buy_cur']-$rows[2]['buy_prev'], 2);

//central bank rates
$sql_cb = "SELECT * FROM cb_rates;";
$result_cb = mysqli_query($conn, $sql_cb);
$resultCheck_cb = mysqli_num_rows($result_cb);
$rows_cb;

if ($resultCheck_cb > 0) {
  while ($row_cb=mysqli_fetch_assoc($result_cb)) {
    $rows_cb[] = $row_cb;
  }
}
$dl_sell_dif_cb = round($rows_cb[0]['sell_cur']-$rows_cb[0]['sell_prev'], 2);
$dl_buy_dif_cb = round($rows_cb[0]['buy_cur']-$rows_cb[0]['buy_prev'], 2);
$eu_sell_dif_cb = round($rows_cb[1]['sell_cur']-$rows_cb[1]['sell_prev'], 2);
$eu_buy_dif_cb = round($rows_cb[1]['buy_cur']-$rows_cb[1]['buy_prev'], 2);
$yu_sell_dif_cb = round($rows_cb[2]['sell_cur']-$rows_cb[2]['sell_prev'], 2);
$yu_buy_dif_cb = round($rows_cb[2]['buy_cur']-$rows_cb[2]['buy_prev'], 2);

$date_of_update =  ltrim(($rows[0]['date'])[8].($rows[0]['date'])[9].' '.$months[(int)(($rows[0]['date'])[5].($rows[0]['date'])[6])].' '.($rows[0]['date'])[0].($rows[0]['date'])[1].($rows[0]['date'])[2].($rows[0]['date'])[3],'0');

$date_of_update_cb =  ltrim(($rows_cb[0]['date'])[8].($rows_cb[0]['date'])[9].' '.$months[(int)(($rows_cb[0]['date'])[5].($rows_cb[0]['date'])[6])].' '.($rows_cb[0]['date'])[0].($rows_cb[0]['date'])[1].($rows_cb[0]['date'])[2].($rows_cb[0]['date'])[3],'0');

$up_html = '<img src="./img/up.svg" class="myarrow" alt="arrow up" height="20" width="20"/>';
$down_html = '<img src="./img/down.svg" class="myarrow" alt="arrow down" height="20" width="20"/>';
//echo $rows[1]['currency'];


?>
          <div class="miscellaneous main-style">
            <div class="operations__tab-container">
              <button
                class="btn operations__tab operations__tab--1"
                data-tab="1"
              >
                <span>01</span>News
              </button>
              <button class="btn operations__tab operations__tab--2 operations__tab--active" data-tab="2">
                <span>02</span>Interest Rates
              </button>
              <button class="btn operations__tab operations__tab--3" data-tab="3">
                <span>03</span>Job Postings
              </button>
            </div>
            <div
              class="operations__content operations__content--1 "
            >
              <div class="operations__icon operations__icon--1">
                <img
                src="./img/news.svg"
                alt="bank news"
                height="80"
                width="80" />
              </div>


             <h5 class="operations__header">
                Hello
              </h5>
              <p>
                 Lorem ipsum

            </div>
    
            <div class="operations__content operations__content--2 operations__content--active">
              <div class="operations__icon operations__icon--2">
                <div class="operations__icon operations__icon--1">
                    <img
                    src="./img/percent.svg"
                    alt="interest rates"
                    height="80"
                    width="80" />
                  </div>
              </div>
              <h5 class="operations__header">
                April 2021
              </h5>
              <p>
                Information regarding the interest rates in April of 2021
              </p>
            </div>
            <div class="operations__content operations__content--3">
                <div class="operations__icon operations__icon--1">
                    <img
                    src="./img/job.svg"
                    alt="job posting"
                    height="80"
                    width="80" />
                  </div>
              <h5 class="operations__header">
                Job Postings
              </h5>
              <p>
                <a href="./career.php">Learn about new job postings at our bank.</a>
              </p>
            </div>
          </div>
        
    <div class="rates">


        <div class="rates-tab-container">
            <button
              class="btn btntkpb"
              data-tab="1"
            >
              Exchange Rates of <span> «Dummy»</span>
            </button>

            <button
              class="btn btncb"
              data-tab="2"
            >
            Exchange Rates of <span> «the central Bank»</span>
            </button>
        </div>

        <div class="allrates">
            <div class="rate main-style tkpbrates">
                <div class="ratedate">
                    <?php echo $date_of_update?>
                </div>
                <div class="dollar">
                    <span>$ </span>
                    Dollar: 
                </div>
                <div class="dollarSell currency">
                      <?php if ($dl_sell_dif > 0)
                      {echo $up_html;} else {
                          echo $down_html;
                        } echo ' '.$rows[0]['sell_cur'];
                      ?>
                </div>
                <div class="dollarBuy currency">
                <?php if ($dl_buy_dif > 0)
                      {echo $up_html;} else {echo $down_html;

                        } echo ' '.$rows[0]['buy_cur'];
                      ?>
                </div>

                <div class="euro">
                    <span>€ </span>
                    Euro: 
                </div>
                <div class="euroSell currency">
                <?php if ($eu_sell_dif > 0)
                      {echo $up_html;} else {echo $down_html;

                        } echo ' '.$rows[1]['sell_cur'];
                      ?>
                </div>
                <div class="euroBuy currency">
                <?php if ($eu_buy_dif > 0)
                      {echo $up_html;} else {echo $down_html;

                        } echo ' '.$rows[1]['buy_cur'];
                      ?>
                </div>

                <div class="yuan">
                    <span>¥ </span>
                    Yuan: 
                </div>
                <div class="yuanSell currency">
                <?php if ($yu_buy_dif > 0)
                      {echo $up_html;} else {echo $down_html;

                        } echo ' '.$rows[2]['sell_cur'];
                      ?>
                </div>
                <div class="yuanBuy currency">
                <?php if ($yu_buy_dif > 0)
                      {echo $up_html;} else {echo $down_html;

                        } echo ' '.$rows[2]['buy_cur'];
                      ?>
                </div>
            </div>
            <div class="rate main-style cbrates">
            
                <div class="ratedate">
                <?php echo $date_of_update_cb?>
                </div>
                <div class="dollar">
                    <span>$ </span>
                    Dollar: 
                </div>
                <div class="dollarSell currency">
                <?php if ($dl_sell_dif_cb > 0)
                      {echo $up_html;} else {
                          echo $down_html;
                        } echo ' '.$rows_cb[0]['sell_cur'];
                      ?>
                </div>
                <div class="dollarBuy currency">
                <?php if ($dl_buy_dif_cb > 0)
                      {echo $up_html;} else {
                          echo $down_html;
                        } echo ' '.$rows_cb[0]['buy_cur'];
                      ?>
                </div>

                <div class="euro">
                    <span>€ </span>
                    Euro: 
                </div>
                <div class="euroSell currency">
                <?php if ($eu_sell_dif_cb > 0)
                      {echo $up_html;} else {
                          echo $down_html;
                        } echo ' '.$rows_cb[1]['sell_cur'];
                      ?>
                </div>
                <div class="euroBuy currency">
                <?php if ($eu_buy_dif_cb > 0)
                      {echo $up_html;} else {
                          echo $down_html;
                        } echo ' '.$rows_cb[1]['buy_cur'];
                      ?>
                </div>

                <div class="yuan">
                    <span>¥ </span>
                    Yuan: 
                </div>
                <div class="yuanSell currency">
                <?php if ($yu_sell_dif_cb > 0)
                      {echo $up_html;} else {
                          echo $down_html;
                        } echo ' '.$rows_cb[2]['sell_cur'];
                      ?>
                </div>
                <div class="yuanBuy currency">
                <?php if ($yu_sell_dif_cb > 0)
                      {echo $up_html;} else {
                          echo $down_html;
                        } echo ' '.$rows_cb[2]['buy_cur'];
                      ?>
                </div>

            </div>
        </div>

    </div>

    </main>
<?php include './include/footer.php';?>
