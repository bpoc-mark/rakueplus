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
    <div class="page__header bg_grey">
        <div class="header_container">
            <div class="l-wrap">
                <div class="head_cont">
                    <div class="head_cont_1">
                        <p>窓って簡単に変えられる<span>。</span><br>
                            他社にはできない「窓」の<br class="br_sp">提案でしっかり差別化</p>
                        <img src="<?php echo get_template_directory_uri();?>/release/image/header/head_cont_btm.png" alt="">
                    </div>
                    <div class="head_cont_2">
                        <!-- <p>ラクエプラス</p> -->
                        <img src="<?php echo get_template_directory_uri();?>/release/image/header/rakue_hero.svg" alt="ラクエプラス RAKUE+">
                        <p>
                            <span>で導入もスムーズ</span>
                        </p>
                    </div> 
                </div>
                <div class="head_desc">
                    <p>リフォーム業界のnextブルーオーシャンはこれで決まり！<br>
                        手をつけづらい「窓交換」の提案で売り上げも利益率もアップ！<br>
                        業界初!? の手厚い導入支援付きで、更なる安心をプラスします。<br>
                        他社より高い見積もりを提出しながら、受注できるメソッドとは!?</p>
                    <img class="head_txt_img_1_pc" src="<?php echo get_template_directory_uri();?>/release/image/header/head_txt_img_1.svg" alt="営業サポート">
                </div>
                <img class="rakue_img" src="<?php echo get_template_directory_uri();?>/release/image/header/rakue_image.png" alt="">
                <img class="rakue_chair" src="<?php echo get_template_directory_uri();?>/release/image/header/rakue_chair.png" alt="">
                <img class="head_txt_img_2" src="<?php echo get_template_directory_uri();?>/release/image/header/head_txt_img_2.svg" alt="工務店リフォーム会社向け">
                <img class="head_txt_img_1_sp" src="<?php echo get_template_directory_uri();?>/release/image/header/head_txt_img_1_sp.svg" alt="営業サポート">
            </div>
        </div>
    </div>
    <div class="page__content">
