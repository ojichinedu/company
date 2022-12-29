
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Investments</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v4.7.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  
  <style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
 
  background-color: #fff;
  width: 30%;
  height: 1800px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #008000;
  color:#ffffff;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height:auto;
  font-size:20px;
  padding-left:2%;
}

</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php"><span>De</span>Finance</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>

          <li ><a href="about.php"><span>About</span></a>
          </li>

          <li class="dropdown"><a href="#">Services<i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a href="investment.php">Investments</a></li>
              <li><a href="smart.php">Smart Portfolios</a></li>
              <li><a href="hedge.php">Hedge Funds</a></li>
              <li><a href="financial.php">Financial Advice and Asset Management</a></li>
              <li><a href="philanthropy.php">Philanthropy</a></li>
              <li><a href="alternative.php">Alternative Investments</a></li>
      
      
              
            </ul>
        
        
        </li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li class="dropdown"><a href="#"><span style="color:red;">Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="dashboard/login.php">Login</a></li>
              <li><a href="dashboard/register.php">Open Account</a></li>
      
              
            </ul>
          </li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h4 style="color:white;">Investments</h4>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Investments</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
<div  class="container" data-aos="fade-up">
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "Nasdaq 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
  <br>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'stocks')" id="defaultOpen">Stocks</button>
  <button class="tablinks" onclick="openCity(event, 'bonds')">Bonds</button>
  <button class="tablinks" onclick="openCity(event, 'bondp')">Bond Portfolio Analysis</button>
  <button class="tablinks" onclick="openCity(event, 'exch')" id="defaultOpen">Exchange Traded Funds (ETFs)</button>
  <button class="tablinks" onclick="openCity(event, 'crypto')">Cryptocurrency</button>
  <button class="tablinks" onclick="openCity(event, 'mutual')">Mutual Funds</button>
  <button class="tablinks" onclick="openCity(event, 'options')">Options</button>
  <button class="tablinks" onclick="openCity(event, 'annuit')">Annuities</button>
  <button class="tablinks" onclick="openCity(event, 'unit')">Unit Investment Trust (UIT)</button>
  <button class="tablinks" onclick="openCity(event, 'init')">Initial Exchange Offering</button>
  <button class="tablinks" onclick="openCity(event, 'what')">What are the Benefits of an IEO?</button>
  <button class="tablinks" onclick="openCity(event, 'erc')">IDO/ERC20 Portfolio</button>
  <button class="tablinks" onclick="openCity(event, 'non')">Non Fungible Tokens</button>
  <button class="tablinks" onclick="openCity(event, 'gold')">Gold</button>
</div>

<div id="stocks" class="tabcontent">
  <h3 style="font-size:30px;">Stocks</h3>
  <img class="img-fluid" src="assets/img/2.jpg" alt="stockchart">
  <br>
  <br>
  


  <p>Stock can be bought on stock exchanges, and such transactions are typically regulated by governments to prevent fraud, protect investors, and benefit the larger economy. As new shares are issued by a company, the ownership and rights of existing shareholders are diluted in return for cash to sustain or grow the business.

A preferred stock is a class of stock that is granted certain rights that differ from common stock. Namely, preferred stock often possess higher dividend payments, and a higher claim to assets in the event of liquidation. In addition, preferred stock have a callable feature, which means that the issuer has the right to redeem the shares at a predetermined price and date as indicated in the prospectus.</p>


<br>

</div>

<div id="bonds" class="tabcontent">
  <h3  style="font-size:30px;">Bonds</h3>
  <img class="img-fluid" src="assets/img/euro.jpg" alt="dollar">
  <br>
  <br>
  <p>Build a portfolio comprised of funds that aim to generate returns throughout your retirement. These funds are relatively low in market risk. Various investment types can include bond mutual funds, money market funds and Certificates of Deposit (CDs) for the fixed income portion of your portfolio.</p> 

  <br>

</div>

<div id="bondp" class="tabcontent">
  <h3  style="font-size:30px;">Bond Portfolio Analysis</h3>
  <img class="img-fluid" src="assets/img/bnd.jpg" alt="Eurobills">
  <br>
  <br>
  <p>Definance is able to provide New-issue and secondary market municipal bonds that may not be available through other brokerage firms. Additional products that may be available are taxable fixed-income securities, corporate bonds, municipal bonds, treasuries, closed-end funds, CDs, Unit Investment Trusts (UITs), preferreds and more.

Our fixed-income representatives can help assist you by analyzing your bond portfolio and identifying issues that fit your risk profile and investment objectives. Benefits of this high level of personalized service often acts to our clients' benefit. In many cases we are able to get a better price by working with several dealers or provide an alternative security that better meets the clients' needs.</p>
<br>
</div>
<div id="exch" class="tabcontent">
  <h3  style="font-size:30px;">Exchange Traded Funds (ETFs)</h3>
  <img class="img-fluid" src="assets/img/etf.jpg" alt="bills">
  <br>
  <br>
  <p>An exchange-traded fund (ETF) is a basket of securities you buy or sell through a brokerage firm on a stock exchange. ETFs are offered on virtually all asset classes ranging from traditional investments to alternative assets like commodities or currencies.

Exchange-traded funds can be considered one of the most important products created for individual investors in recent years. ETFs offer many benefits and, if used wisely, are an excellent vehicle to achieve an investor’s investment goals.</p>
<br>
</div>
<div id="crypto" class="tabcontent">
  <h3  style="font-size:30px;">Cryptocurrency</h3>
<img class="img-fluid" src="assets/img/cc.jpg" alt="cryptocurrency">
<br>
<br>
  <p>A cryptocurrency is a tradable digital asset or digital form of money, built on blockchain technology. Like Definance, cryptocurrency markets are decentralised, which means they are not issued or backed by a central authority such as a government. Cryptocurrency trading is the act of speculating on cryptocurrency price movements via a CFD trading account, or buying and selling the underlying coins via an exchange. Unlike traditional currencies, cryptocurrencies exist only as a shared digital record of ownership, stored on a blockchain. When a user wants to send cryptocurrency units to another user, they send it to that user’s digital wallet. The transaction isn’t considered final until it has been verified and added to the blockchain through a process called mining. This is also how new cryptocurrency tokens are usually created. The first and father of cryptocurrencies, Bitcoin has been nicknamed the digital and modern gold and has been voted the best performing asset of the millenium.

</p>
  <br>
</div>
<div id="mutual" class="tabcontent">
  <h3  style="font-size:30px;">Mutual Funds</h3>
  <img class="img-fluid" src="assets/img/mut.jpg" alt="Mutual Funds">
  <br>
  <br>
  <p>Mutual funds are an advantage for investors who many be looking for diversification. One Mutual Fund can offer an investor the chance to invest in hundreds—sometimes thousands—of individual securities at once. So if any one security does poorly, the others are there to help offset that risk.

Professionally managed Mutual Funds can be aligned to a variety of investment strategies and time horizons. Definance offers a large variety of highly rated funds for efficient and cost-effective money management.</p>
<br>
</div>
<div id="options" class="tabcontent">
  <h3  style="font-size:30px;">Options</h3>
  <img class="img-fluid" src="assets/img/opt.jpg" alt="options trading">
  <br>
  <br>
  <p>Options trading gives you the opportunity to buy or sell a particular asset at a specific price within a set period of time. You can use options to pursue objectives such as managing risk and generating income. If you are a qualified options investor, you may invest in simple or complex options including spreads, strangles, straddles, combinations, synthetics, buy-writes, unwinds and naked puts/calls.</p>
<br>
</div>
<div id="annuit" class="tabcontent">
  <h3  style="font-size:30px;">Annuities</h3>
  <img class="img-fluid" src="assets/img/ann.jpg" alt="Retirement plan">
  <br>
  <br>
  <p>Annuities have features that can help ensure you’ll have the money you need when you retire.

Annuities offer us a way to invest while having additional layers of protection. Since many individuals are concerned with outliving their retirement funds, monthly income planning is one of the most important steps in creating the retirement lifestyle you want and deserve. Annuities are created to help with the tax deferred growth and distribution of your wealth. Different investment options such as fixed-rate, indexed, and variable are available.

Annuities can offer several different levels that provide protection during market downturns, and may, for an additional cost, include growth, principal protection, or a stream of income for life. Annuities also have additional features that may provide guarantees, minimum rate of return, principle protection, income for life, and death benefits.</p>
<br>
</div>
<div id="unit" class="tabcontent">
  <h3  style="font-size:30px;">Unit Investment Trust (UIT)</h3>
  <img class="img-fluid" src="assets/img/uit.jpg" alt="Unit investment trust">
  <br>
  <br>
  <p>A unit investment trust (UIT) is an investment company that offers a fixed portfolio, generally of stocks and bonds, as redeemable units to investors for a specific period of time. It is designed to provide capital appreciation and/or dividend income. Unit investment trusts, along with mutual funds and closed-end funds, are defined as investment companies.

UITS are similar to both open-ended and closed-end mutual funds in that they all consist of collective investments in which many investors combine their funds to be managed by a portfolio manager.</p>
<br>
</div>
<div id="init" class="tabcontent">
  <h3  style="font-size:30px;">Initial Exchange Offering</h3>
<img class="img-fluid" src="assets/img/favicon.jpg" alt="definance">
<br>
<br>

  <p>An Initial Exchange Offering, commonly referred to as an IEO, is a fundraising event that is administered by an exchange. In contrast to an Initial Coin Offering (ICO) where the project team themselves conduct the fundraising, an Initial Exchange Offering means that the fundraising will be conducted on a well-known exchange’s fundraising platform, such as Binance Launchpad, where users can purchase tokens with funds directly from their own exchange wallet.</p>
  <br>


</div>
<div id="what" class="tabcontent">
  <h3  style="font-size:30px;">What are the Benefits of an IEO?</h3>
  <img class="img-fluid" src="assets/img/1.jpg" alt="peaceful living">
  <br>
  <br>
  <p>For a user, an IEO is easy to participate in as they don’t need to manage on-chain transactions with different wallets on different blockchains. Instead, a user only needs funds in their account and can participate completely through the trusted website’s interface. Additionally, the exchange is staking its reputation behind the projects on its platform, offering a higher degree of trust behind the project. For a project looking to raise funds, an IEO offers the promise of an immediate userbase that can see their product, and depending on the size of the exchange’s audience, could mean that the project can reduce their outside marketing funnels for fundraising, allowing them to focus only on the development of their product.

Due to the nature of IEO's, it's impossible to lose your funds if your seeds were not successful in the lottery as per exchange thereby maintaining a 100% capital guarantee. Definance Financial Group traders' are sophisticated investors with years of experience in IPO's who bring on their skills and experience to the crypto industry and other disruptive markets. We prepare your account for IEO's and yield farming investments by performing a vast due diligence across multiple exchanges offering any of these services. Should you decide to subscribe to this plan, your trader will inform you if your funds will be invested in IEO or Yield Farming. For IEO's, tokens will be purchased at a very cheap price before launch [on exchange by pooling multiple accounts with maximum credits on exchange to optimise the chances of success on launch day and will be traded continuously to meet the contract demands. A minimum of $250,000 is required to invest in this portfolio to generate an ROI of 400% in a maximum period of 3 months while offering a 100% money back guarantee.</p>
<br>
</div>
<div id="erc" class="tabcontent">
  <h3  style="font-size:30px;">IDO/ERC20 Portfolio</h3>
  <img class="img-fluid" src="assets/img/ido.jpg" alt="Erc 20">
  <br>
  <br>
  <p>Initial dex offerings, or IDOs, are tokens that represent any type of asset hosted on a decentralized exchange (DEX) — an IDO is when a project launches a token through a decentralized liquidity exchange. IDOs can be created for anything from cryptocurrency to a music album, to aether powered battle ships. IDOs offer businesses a tool for engaging their communities in an economy that both enriches their products and services while allowing them to make smart business decisions regarding their assets. In the same way that traditional startups receive venture capital before launching, projects issuing initial DEX offerings receive financing from individual investors. Unlike an initial public offering, investors in initial dex offerings never own any equity in the project.

</p>
<br>
</div>
<div id="non" class="tabcontent">
  <h3  style="font-size:30px;" >Non Fungible Tokens</h3>
  <img class="img-fluid" src="assets/img/nft.jpg" alt="Non-Fungible tokens">
  <br>
  <br>
  <p>Non-fungible tokens or NFTs are cryptographic assets on blockchain with unique identification codes and metadata that distinguish them from each other. Unlike cryptocurrencies, they cannot be traded or exchanged at equivalency. This differs from fungible tokens like cryptocurrencies, which are identical to each other and, therefore, can be used as a medium for commercial transactions.

The most exciting possibility for NFTs lies in the creation of new markets and forms of investment. Consider a piece of real estate parceled out into multiple divisions, each of which contains different characteristics and property types. One of the divisions might be next to a beach while another is an entertainment complex and, yet another, is a residential district. Depending on its characteristics, each piece of land is unique, priced differently, and represented with an NFT. Real estate trading, a complex and bureaucratic affair, can be simplified by incorporating relevant metadata into each unique NFT. With Definance Financial Group, when you invest in our NFT portfolio, we will help you claim a stake in massive upcoming legitimate token sales. We are able to purchase them at the right time and flip them for profits on your behalf, or just purchase and hold while transferring the asset ownership to you. With a good entry time, we have projected making a minimum return of 400% within 3 months based on the size of capital invested in the portfolio while having your seed capital protected.</p>
<br>

</div>
<div id="gold" class="tabcontent">
  <h3  style="font-size:30px;" >Gold</h3>
  <img class="img-fluid" src="assets/img/gold.jpg" alt="gold">
  <br>
  <br>
  <p>Not all investments are towards businesses or a pool of funds. Some of them are towards real assets like precious metals or natural resources. Investing in grains, gold, silver, or other precious metals has been preferred for ages, and they continue to be the best hedge
 against market movements and currency fluctuations.</p>
<br>

</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<br>

 

 
   
</div>



        

      
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg" style="background-image:url('assets/img/pexels-henry-&-co-1939485.jp');">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="margin-bottom:2%;color:green;">Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><h2>What does definance being decentralized mean?</h2><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <h4>
                Decentralized finance offers financial instruments without relying on intermediaries such as brokerages, exchanges, or banks by using smart contracts on a blockchain. It's a system that removes the control banks, institutions and to a large extent, the govenment have on money, financial products, and financial services and runs on a digital/crypto currency payment system.
                </h4>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"><h2>Who owns Definance?</h2><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Definance being fully decentralized isn't claimed or owned by any individual or entity, but was an idea brought to live by a network of integrated blockchain validators and portfolio managers operating on smart contracts.
                </h4>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"><h2>What is a smart contract?</h2> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <h4>
                A smart contract is a computer program or a transaction protocol stored on the blockchain which is intended to automatically execute, control or document legally relevant events and actions according to the terms of a contract or an agreement. They typically are used to automate the execution of an agreement so that all participants can be immediately certain of the outcome, without any intermediary’s involvement or time loss. They can also automate a workflow, triggering the next action when conditions are met.
                </h4>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed"><h2>How are portfolios funded and payments and trasanctions carried out?</h2><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Definance is a protocol backed by blockchain and runs on smart contracts, hence payments and transactions are carried out through cryptocurrencies such as bitcoin(btc), ethereum(eth), ripple(xrp), binance token(bnb) and stablecoins such as usdt and usdc.

                </h4>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"><h2>What cryptocurrencies are accepted: </h2><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Cryptocurrencies such as bitcoin, ethereum, ripple(xrp), binance token(bnb) and stable coins such as usdt or usdc.
                </h4>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed"><h2>What is wealth management?</h2> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Wealth management usually refers to a suite of services that provides the opportunity to work with a financial professional. It usually includes working together on a broad plan to help grow and protect assets and it often includes the ability to take advantage of professional money management.
                </h4>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="600">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed"><h2>How much do i need for wealth management?</h2> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                <h4>
                While the minimum investment required varies from investment firm to investment firm,at Definance, portfolios with a minimum of $25k, have a personal wealth manager assigned to them. Wealth management is designed for clients whose financial situations warrant the personal attention of a financial professional but at definance, every investor has access to contact a wealth manager for a free consultation. 
                </h4>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="700">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed"><h2>How can I protect my wealth?</h2> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                <h4>
                There are a number of things one can do in an effort to protect wealth, such as retirement planning, estate planning (including developing a plan for the orderly transfer of wealth to your heirs), being more tax-efficient, or exploring the addition of fixed income investments to a portfolio.
                </h4>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="800">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed"><h2>What are alternative investments? </h2><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Alternative investments are investments specifically meant for accredited investors who are wealthier than normal retail investors. Such investments are made in assets that do not fall under traditional asset classes, like individual stocks, bonds, etc. The lower market correlation makes these investments less volatile, and hence these turn out to be a hedge against inflation for investors.
These non-conventional investments are classified as tangible (real estate, precious metals, commodities, etc.) and intangible (private equity, hedge funds, cryptocurrency, etc.).  
                </h4>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="900">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed"><h2>Why would someone need a wealth manager?</h2> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Clients may engage in a wealth management relationship for a number of different reasons. Some choose to do so because they need help planning for certain goals, or need guidance around estate planning, protecting wealth, retirement planning, or ways to manage their tax obligations. Others choose wealth management because they don’t have the time or the desire to manage their own portfolios or simply value the input of a financial professional, who can act as a sounding board.
                </h4>
              </div>
            </li>
           <li data-aos="fade-up" data-aos-delay="1000">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed"><h2>Are ETFs alternative investments?</h2> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                <h4>
                The exchange-traded funds or ETFs are investments that fall between alternative and traditional investments. It lets investors enjoy alternative investment opportunities while not facing any illiquidity issues. In addition, unlike other alt funds, ETFs are well-regulated and could be easily managed, sold, and converted to cash.
                </h4>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="1100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-12" class="collapsed"><h2>What strategies can be used to reduce the taxes on investments?</h2><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-12" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Depending on your personal situation, there are a number of ways to potentially reduce or defer the taxes you pay on your investments. These can include finding ways to reduce or defer income, capital gains, and estate taxes. Strategies such as Roth IRA conversions, asset location, tax-loss harvesting, or revisiting your gifting and estate plans may help you grow your wealth and preserve your legacy.
                </h4>
              </div>
            </li>


          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>DeFinance</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="investment.php">Investments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Insurance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="financial.php">
Financial Advice and Asset Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="smart.php">Smart Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="hedge.php">Hedge Funds</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Be The First To Hear From Us.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>DeFinance</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Designed by Oasis Group
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>