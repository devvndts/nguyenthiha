<div class="introduce __wrapper">
    <div class="wrap-content">
        <div class="introduce__wrapper">
            <div class="introduce__left">
                <div class="introduce__left__image">
                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '510x480x1', 'upload' => UPLOAD_NEWS_L, 'image' => $introduce['photo'], 'alt' => $introduce['name' . $lang]]) ?>
                </div>
            </div>
            <div class="introduce__right">
                <div class="introduce__right__content">
                    <span class="introduce__right__content-subTitle">Giới Thiệu</span>
                    <h3 class="introuduce__right__content-title"><?=$introduce['name'.$lang]?></h3>
                    <p class="introduce__right__content-desc"><?=$introduce['desc'.$lang]?></p>
                    <a href="" class="introduce__right__content-btn">Xem thêm <i class="fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="study__program__wrapper">
    <div class="title-main">
        <span>Chương trình giáo dục</span>
    </div>
    <div class="wrap-content">
        <div class="study__program__container owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:80,screen:425|items:2|margin:80,screen:575|items:2|margin:80,screen:767|items:2|margin:80,screen:991|items:2|margin:80,screen:1199|items:2|margin:80" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-brand">
            <?php foreach ($chuongtrinh as $key => $v) {?>
                <a href="<?=$v[$sluglang]?>" class="study__program__item">
                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '440x500x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    <span class="study__program__item-title <?=$key == 0 ? 'active' : ''?>"><?=$v['name'.$lang]?></span>
                </a>
            <?php }?>
        </div>
    </div>
</div>

<div class="lib__photo__wrapper">
    <div class="title-main">
        <span>Thư viện ảnh</span>
    </div>
    <div class="wrap-content">
        <div class="lib__photo__container">
            <?php for($i = 0 ; $i < count($libPhoto) ; $i++ ){?>
            <div class="item<?=$i+1?>" style="background: url('<?=UPLOAD_PRODUCT_L.$libPhoto[$i]['photo']?>')"></div>
            <?php }?>
        </div>
    </div>
</div>

<div class="why__choose__wrapper">
    <div class="title-main">
        <span>Tại Sao Chọn Chúng Tôi?</span>
    </div>
    <div class="wrap-content">
        <div class="why__choose__container">
            <?php 
                foreach ($whyChooseUs as $key => $value) {?>
                   <div class="why__choose__item">
                        <div class="why__choose__item-left">
                            <span>0<?=$key + 1?>.</span>
                        </div>
                        <div class="why__choose__item-right">
                            <h3 class="why__choose__item-right--title"><?=$value['name'.$lang]?></h3>
                            <p class="why__choose__item-right--desc"><?=$value['desc'.$lang]?></p>
                        </div>
                   </div>
                <?php }
            ?>
        </div>
    </div>
</div>

<div class="report__customer__wrapper">
    <div class="title-main title-report">
        <span>Ý kiến phụ huynh</span>
    </div>
    <div class="wrap-content">
        <div class="report__customer__container owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:0,screen:425|items:1|margin:0,screen:575|items:1|margin:0,screen:767|items:1|margin:0,screen:991|items:1|margin:0,screen:1199|items:1|margin:0" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-brand">
            <?php 
                foreach ($reportCustomer as $v) {?>
                    <div class="report__customer__item">
                        <div class="report__customer__item-image">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '150x150x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </div>
                        <div class="report__customer__item-info">
                            <p class="report__customer__item-info--desc"><?=$v['desc'.$lang]?></p>
                            <div class="report__customer__item-info--stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="report__customer__item-info--name"><?=$v['name'.$lang]?></span>
                        </div>
                    </div>
                <?php }
            ?>
        </div>
    </div>
</div>

<div class="news__update__wrapper">
    <div class="title-main">
        <span>Tin tức cập nhập</span>
    </div>
    <div class="wrap-content">
        <div class="news__update__container owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:30,screen:425|items:3|margin:30,screen:575|items:3|margin:30,screen:767|items:3|margin:30,screen:991|items:3|margin:30,screen:1199|items:3|margin:30" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-brand">
            <?php 
                foreach ($newsnb as $v) {?>
                    <a href="<?=$v[$sluglang]?>" class="news__update__item ">
                        <div class="news__update__item-image">
                         <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '390x230x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </div>
                        <div class="news__update__item-info">
                            <span class="news__update__item-info--title"><?=$v['name'.$lang]?></span>
                            <p class="news__update__item-desc"><?=$v['desc'.$lang]?></p>
                            <span href="" class="news__update__item-btn">Xem thêm <i class="fa-regular fa-arrow-right-long"></i></span>
                        </div>
                    </a>
                <?php }
            ?>
        </div>
    </div>
</div>