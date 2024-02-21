@include("layots.header")
@include("layots.footer")
@include("layots.head")
<!DOCTYPE html>
<html lang="en">
<head>
    @yield("head")
    <title>BITLIST</title>

</head>
<body>
@yield("header")
<main>
    <section class="container first__container">
        <div class="container_flex">
            <div class="title_container">
                <div class="dark-tag">
                    <img src="./assets/img/small_logo.svg">
                    DECENTRALIZED CRYPTO PLATFORM
                </div>
                <div class="main__title">
                    Buy, trade and store cryptocurrencies
                </div>
            </div>
            <div class="input__button">
                <div class="blick"></div>
                <div class="main__input">
                    <i class="bi bi-envelope"></i>
                    <input type="text"
                           placeholder="Example@gmail.com">

                </div>
                <button class="btn btn-primary">Log in</button>
            </div>

        </div>
        <div class="container_right">
            <img src="./assets/img/main.png" class="main__img pc">
            <img src="./assets/img/main1.png"
                 class="main__img laptop">

        </div>
        </div>
    </section>
    <section class="container container__table">
        <table>
            <tr class="header__table">
                <td>Asset</td>
                <td>Price</td>
                <td>Change</td>
                <td>Volume</td>
                <td></td>
            </tr>
            <tr id="inch" class="content__table">
                <td class="long_td">
                    <div class="assets__table">
                        <img src="./assets/img/coins/1inc.svg">
                        <div>
                            1inch
                            <span>
                                        1INCH
                                    </span>
                        </div>
                    </div>
                </td>
                <td class="price">1.000</td>
                <td class="change">0.00%</td>
                <td class="volume">1.000</td>
                <td><button class="btn btn-primary-ligth">Trade</button></td>

            </tr>
            <tr id="BTC" class="content__table">
                <td  class="long_td">
                    <div class="assets__table">
                        <img src="./assets/img/coins/btc.svg">
                        <div>
                            Bitcoin
                            <span>
                                        BTC
                                    </span>
                        </div>
                    </div>
                </td>
                <td class="price">1.000</td>
                <td class="change">0.00%</td>
                <td class="volume">1.000</td>
                <td><button
                        class="btn btn-primary-ligth">Trade</button></td>

            </tr>
            <tr id="ETH" class="content__table">
                <td class="long_td">
                    <div class="assets__table">
                        <img src="./assets/img/coins/eth.svg">
                        <div>
                            Ethereum
                            <span>
                                        ETH
                                    </span>
                        </div>
                    </div>
                </td>
                <td class="price">1.000</td>
                <td class="change">0.00%</td>
                <td class="volume">1.000</td>
                <td><button
                        class="btn btn-primary-ligth">Trade</button></td>

            </tr>
            <tr id="BNB" class="content__table">
                <td class="long_td">
                    <div class="assets__table">
                        <img src="./assets/img/coins/BNB.svg">
                        <div>
                            Binance Coin
                            <span>
                                        BNB
                                    </span>
                        </div>
                    </div>
                </td>
                <td class="price">1.000</td>
                <td class="change">0.00%</td>
                <td class="volume">1.000</td>
                <td><button
                        class="btn btn-primary-ligth">Trade</button></td>

            </tr>
            <tr id="matic" class="content__table">
                <td class="long_td">
                    <div class="assets__table">
                        <img src="./assets/img/coins/matic.svg">
                        <div>
                            Polygon
                            <span>
                                        Matic
                                    </span>
                        </div>
                    </div>
                </td>
                <td class="price">1.000</td>
                <td class="change">0.00%</td>
                <td class="volume">1.000</td>
                <td><button
                        class="btn btn-primary-ligth">Trade</button></td>

            </tr>
        </table>
        <button class="btn btn-dark w-100">
            All assets
        </button>
    </section>
    <section class="container__faq">
        <div class="container container__child">
            <div class="section_first">
                <h1>
                    Bitles is your reliable guide in the world of
                    digital assets
                </h1>
                <p>
                    The Bitles app is a comprehensive solution for
                    trading digital assets. Buy and sell
                    cryptocurrencies quickly and openly, comfortably and
                    safely from anywhere in the world.
                </p>
            </div>
            <div class="section_second">
                <div class="section_second__content">
                    <div class="row__exchange">
                        <img src="./assets/img/exchange/binance.svg">
                        <img src="./assets/img/exchange/bybit.svg">
                    </div>
                    <div class="row__exchange">
                        <img src="./assets/img/exchange/bitfinex.svg">
                        <img src="./assets/img/exchange/crypto.svg">
                    </div>
                    <div class="row__exchange">
                        <img src="./assets/img/exchange/kraken.svg">
                        <img src="./assets/img/exchange/coinbase.svg">
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="container container__cards border_t_b">
        <div class="row">
            <div class="card">
                <img src="./assets/img/card.svg">
                <div>
                    <h1>
                        User Safe Asset Fund (SAFU)world.
                    </h1>
                    <p>
                        Bitlist holds 10% of all trading fees in a
                        protected asset fund to protect a portion of
                        user funds.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="./assets/img/eae.svg">
                <div>
                    <h1>
                        User Access Control
                    </h1>
                    <p>
                        Personalized access control allows you to limit
                        the devices and addresses that can access your
                        account.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="./assets/img/lock.svg">
                <div>
                    <h1>
                        Improved data encryption
                    </h1>
                    <p>
                        Your transaction data is encrypted - only you
                        can access your personal data.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <img src="./assets/img/chat.svg">
                <div>
                    <h1>
                        Support 24/7
                    </h1>
                    <p>
                        24/7 real-time support is always ready to help
                        you.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="./assets/img/rocket.svg">
                <div>
                    <h1>
                        Fast replineshments and withdraws
                    </h1>
                    <p>
                        Transfer funds to and from your accounts quickly
                        and easily.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="./assets/img/p2p.svg">
                <div>
                    <h1>
                        Comfortable P2P platform
                    </h1>
                    <p>
                        Top up your account in any convenient way on the
                        P2P platform at favorable rates.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container contact_container">
        <div class="contact_container__div ">
            <h1>Register your account now and start to trade</h1>
            <div class="input__button m-auto">
                <div class="main__input">
                    <i class="bi bi-envelope"></i>
                    <input type="text" placeholder="Example@gmail.com">
                </div>
                <button class="btn btn-primary">Register</button>
            </div>
        </div>
    </section>

</main>
@yield("footer")
<script>
    function updateRates(){
        $.ajax({
            url: "{{route("api.coin.getAssets")}}",
            method: "GET",
            success: function (data){

                const inch = $("#inch");
                const BTC = $("#BTC");
                const ETH = $("#ETH");
                const BNB = $("#BNB");
                const matic = $("#matic");
                data.forEach((item)=>{
                    console.log(item.assets)
                    const assets = JSON.parse(item.assets)
                    if(item.symbol === "1inch"){
                        inch.find(".price").text("$ " + parseFloat(assets.priceUsd).toFixed(3));
                        inch.find(".change").text(parseFloat(assets.changePercent24Hr).toFixed(3));
                        inch.find(".volume").text(parseFloat(assets.volumeUsd24Hr).toFixed(3));

                    }
                    if(item.symbol === "BTC"){
                        BTC.find(".price").text("$ " + parseFloat(assets.priceUsd).toFixed(3));
                        BTC.find(".change").text(parseFloat(assets.changePercent24Hr).toFixed(3));
                        BTC.find(".volume").text(parseFloat(assets.volumeUsd24Hr).toFixed(3));
                    }
                    if(item.symbol === "ETH"){
                        ETH.find(".price").text("$ " + parseFloat(assets.priceUsd).toFixed(3));
                        ETH.find(".change").text(parseFloat(assets.changePercent24Hr).toFixed(3));
                        ETH.find(".volume").text(parseFloat(assets.volumeUsd24Hr).toFixed(3));
                    }
                    if(item.symbol === "BNB"){
                        BNB.find(".price").text("$ " + parseFloat(assets.priceUsd).toFixed(3));
                        BNB.find(".change").text(parseFloat(assets.changePercent24Hr).toFixed(3));
                        BNB.find(".volume").text(parseFloat(assets.volumeUsd24Hr).toFixed(3));
                    }
                    if(item.symbol === "MATIC"){
                        matic.find(".price").text("$ " + parseFloat(assets.priceUsd).toFixed(3));
                        matic.find(".change").text(parseFloat(assets.changePercent24Hr).toFixed(3));
                        matic.find(".volume").text(parseFloat(assets.volumeUsd24Hr).toFixed(3));
                    }

                })
            updateColor()
                formatAllVolumes()
            }
        })
    }
    updateRates()
    setInterval(updateRates, 3000)
    function updateColor(){
        var changeElements = document.querySelectorAll('.change');

        changeElements.forEach(function(element) {
            var changeValue = parseFloat(element.textContent.replace('%', ''));

            if (changeValue < 0) {
                element.classList.add('red');
            } else if (changeValue > 0) {
                element.classList.add('green');
            }
        });
    }
    function formatVolume(volume) {
        if (typeof volume !== 'number' || isNaN(volume)) {
            return volume; // Return the original value if it's not a valid number
        }

        if (volume >= 1000000) {
            return (volume / 1000000).toFixed(3) + 'M';
        } else if (volume >= 1000) {
            return (volume / 1000).toFixed(3) + 'K';
        } else {
            return volume.toFixed(3);
        }
    }

    function formatAllVolumes() {
        var volumeElements = document.querySelectorAll('.volume');

        volumeElements.forEach(function(element) {
            var volume = parseFloat(element.textContent);
            var formattedVolume = formatVolume(volume);
            element.textContent = formattedVolume;
        });
    }
</script>
</body>
</html>
