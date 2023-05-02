// ハンバーガーメニュー実装

jQuery("#js-drawer__btn").click(function () {//ボタンがクリックされたら
	jQuery(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    jQuery("#js-drawer__nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
    jQuery(".p-drawer__circle-bg").toggleClass('circleactive');//丸背景にcircleactiveクラスを付与
});

jQuery("#js-drawer__nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    jQuery("#js-drawer__btn").removeClass('active');//ボタンの activeクラスを除去し
    jQuery("#js-drawer__nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスを除去
    jQuery(".p-drawer__circle-bg").removeClass('circleactive');//丸背景のcircleactiveクラスを除去
});

jQuery("#js-drawer__list").click(function () {//ナビゲーションのリンクがクリックされたら
    jQuery("#js-drawer__btn").removeClass('active');//ボタンの activeクラスを除去し
    jQuery("#js-drawer__nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスを除去
    jQuery(".p-drawer__circle-bg").removeClass('circleactive');//丸背景のcircleactiveクラスを除去
});


// Swiper 実装

const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    spaceBetween: 20,
    grabCursor: true,
    slidesPerView: 1,
    speed: 600,
    direction: 'horizontal',
    // effect: 'coverflow',
    loopAdditionalSlides: 1,
    breakpoints: {
        1100: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        670: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// テキストアニメーション実装
document.addEventListener('DOMContentLoaded', function () {

    const els = document.querySelectorAll('.c-animate-title');
    const cb = function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const ta = new TextAnimation(entry.target);
                ta.animate();
                observer.unobserve(entry.target);
            } else {
            }
        });
    };
    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 0
    };
    const io = new IntersectionObserver(cb, options);
    els.forEach(el => io.observe(el));
});

class TextAnimation {
    constructor(el) {
        this.DOM = {};
        this.DOM.el = el instanceof HTMLElement ? el : document.querySelector(el);
        this.chars = this.DOM.el.innerHTML.trim().split("");
        this.DOM.el.innerHTML = this._splitText();
    }
    _splitText() {
        return this.chars.reduce((acc, curr) => {
            curr = curr.replace(/\s+/, '&nbsp;');
            return `${acc}<span class="char">${curr}</span>`;
        }, "");
    }
    animate() {
        this.DOM.el.classList.toggle('inview');
    }
}

/* headerスクロールすると背景変更
=========================== */
jQuery(window).on('scroll', function(){
    if ( 100 < jQuery(this).scrollTop()) {
        jQuery('.l-header').addClass('is-show');
    } else {
        jQuery('.l-header').removeClass('is-show');
    }
});

/* to-top
=========================== */
jQuery(window).on("scroll", function () {
    if (100 < jQuery(this).scrollTop()) {
        jQuery('#js-to-top-button').addClass('is-show');
    } else {
        jQuery('#js-to-top-button').removeClass('is-show');
    }
});

/* Smooth Scroll
=========================== */
// #から始まるURLがクリックされた時
jQuery('a[href^="#"]').click(function () {
    var header = 0;
    // 移動速度を指定（ミリ秒）
    var speed = 300;
    // hrefで指定されたidを取得
    var id = jQuery(this).attr("href");
    // idの値が#のみだったらターゲットをhtmlタグにしてトップに戻る様にする
    var target = jQuery("#" == id ? "html" : id);
    // ページのトップを基準にターゲットの位置を取得
    var position = jQuery(target).offset().top - header;
    if (0 > position) {
        position = 0;
    }
    // ターゲットの位置までspeed速度移動
    jQuery("html, body").animate(
        {
            scrollTop: position,
        },
        speed
        );
        return false;
    });
