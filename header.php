<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/release/css/style.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <script>
        (function(d) {
            var config = {
                    kitId: 'hld3kqk',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<main>
    <div class="page__header">
        <div class="header_container">
            <div class="l-wrap">
                <div class="head_cont">
                    <div class="head_cont_1">
                        <p class="p-t-75">RAKUE + for seles company service</p>
                        <img src="<?php echo get_template_directory_uri();?>/release/image/header/head_cont_btm.png" alt="">
                    </div>
                    <div class="head_cont_2">
                        <!-- <p>ラクエプラス</p> -->
                        <img src="<?php echo get_template_directory_uri();?>/release/image/header/rakue_hero.png" alt="ラクエプラス RAKUE+">
                        <p>
                            <span>で導入もスムーズ</span>
                        </p>
                    </div>
                </div>
                <div class="head_desc">
                    <p>説明文が入る。説明文が入る。説明文が入る。説明文が入る。説明文が入る。 説明文が入る。説明文が入る。説明文が入る。説明文が入る。説明文が入る。 説明文が入る。説明文が入る。説明文が入る。説明文が入る。説明文が入る。 説明文が入る。説明文が入る。説明文が入る。</p>
                </div>
                <img class="rakue_img" src="<?php echo get_template_directory_uri();?>/release/image/header/rakue_image.png" alt="">
                <img class="rakue_chair" src="<?php echo get_template_directory_uri();?>/release/image/header/rakue_chair.png" alt="">
            </div>
        </div>
    </div>
    <div class="page__content">
