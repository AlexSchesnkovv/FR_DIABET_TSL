<?php
// Multi Languages [BEGIN]
$file_translate = './languages/' . $_COOKIE['language'] . '.php';
if (file_exists($file_translate)) {
    require_once($file_translate);
} else {
    $file_translate = './languages/EN.php';
    require_once($file_translate);
}
$page_array = [
    'success' => $success_page_array,
    'error' => $error_page_array,
    'double' => $double_page_array,
][$_COOKIE['status']];
// Multi Languages [END]
?>
<!DOCTYPE html>
<html lang="en" dir="<?= ($_COOKIE['language'] === 'AR') ? 'rtl' : 'ltr' ?>">

<head>
    <!-- Pixels [BEGIN] -->
    <?php if ($_COOKIE['status'] === 'success') : ?>
        <!-- FB Pixel [BEGIN] -->
        <?php if (mb_strlen($_COOKIE['pixel']) > 0) : ?>
            <script>
                ! function(f, b, e, v, n, t, s) {
                    if (f.fbq) return;
                    n = f.fbq = function() {
                        n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = "2.0";
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
                fbq("init", "<?= $_COOKIE['pixel'] ?>");
                fbq("track", "Lead");
            </script>
            <noscript>
                <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= $_COOKIE['pixel'] ?>&ev=Lead&noscript=1" />
            </noscript>
        <?php endif; ?>
        <!-- FB Pixel [END] -->

        <!-- TT Pixel [BEGIN] -->
        <?php if (mb_strlen($_COOKIE['ttq']) > 0) : ?>
            <script>
                ! function(w, d, t) {
                    w.TiktokAnalyticsObject = t;
                    var ttq = w[t] = w[t] || [];
                    ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias", "group", "enableCookie", "disableCookie"], ttq.setAndDefer = function(t, e) {
                        t[e] = function() {
                            t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                        }
                    };
                    for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
                    ttq.instance = function(t) {
                        for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
                        return e
                    }, ttq.load = function(e, n) {
                        var i = "https://analytics.tiktok.com/i18n/pixel/events.js";
                        ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = i, ttq._t = ttq._t || {}, ttq._t[e] = +new Date, ttq._o = ttq._o || {}, ttq._o[e] = n || {};
                        var o = document.createElement("script");
                        o.type = "text/javascript", o.async = !0, o.src = i + "?sdkid=" + e + "&lib=" + t;
                        var a = document.getElementsByTagName("script")[0];
                        a.parentNode.insertBefore(o, a)
                    };
                    ttq.load("<?= $_COOKIE['ttq'] ?>");
                    ttq.page();
                }(window, document, "ttq");
            </script>
        <?php endif; ?>
        <!-- TT Pixel [END] -->
    <?php endif; ?>
    <!-- Pixels [END] -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="./img/<?= ($_COOKIE['status'] === 'error') ? 'error.png' : 'success.png' ?>" type="image/png">
    <title><?= $page_array['title']; ?></title>

    <link rel="stylesheet" href="./success.css">
</head>

<body>
    <div id="wrapper">
        <div id="content">
            <div class="mod success-page">
                <h1 class="success-page__title"><?= $page_array['text-1']; ?></h1>
                <div class="success_icon">
                    <p style="<?= ($_COOKIE['status'] === 'error') ? 'background-color: #ff6c34;' : 'background-color: #549127;' ?>">
                        <?= ($_COOKIE['status'] === 'error') ? '&#10008;' : '&#10003;' ?>
                    </p>
                </div>
                <h1><?= $page_array['text-2']; ?></h1>
                <p><?= $page_array['text-3']; ?></p>
                <div class="list-info">
                    <ul class="list-info__list">
                        <li class="list-info__item">
                            <span class="list-info__text"><?= $page_array['name']; ?></span>
                            <span class="list-info__info">
                                <?= $_COOKIE['name'] ?>
                            </span>
                        </li>
                        <li class="list-info__item">
                            <span class="list-info__text"><?= $page_array['phone']; ?></span>
                            <span class="list-info__info" dir="ltr">
                                <?= $_COOKIE['phone'] ?>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="success-page_back_button">
                    <a href="#" onclick="history.back();"><?= $page_array['return']; ?></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Httpcode & Response [BEGIN] -->
    <?php
    function console_log($data)
    {
        if (is_array($data) || is_object($data)) {
            echo ("<script>console.log(json_encode($data));</script>");
        } else {
            echo ("<script>console.log(`$data`);</script>");
        }
    }
    if (isset($_COOKIE['httpcode'])) console_log($_COOKIE['httpcode']);
    if (isset($_COOKIE['response'])) console_log($_COOKIE['response']);
    ?>
    <!-- Httpcode & Response [END] -->
</body>

</html>