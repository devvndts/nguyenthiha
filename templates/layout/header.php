<div class="header">
    <div class="header-bottom">
        <div class="wrap-content">
            <a class="logo-header shiner" href="">
                <?= $func->getImage(['sizes' => '265x95x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
            </a> 
            <div class="header__bottom">
                <div class="header__bottom__top">
                    <ul class="social social-footer">
                    <?php for($i=0;$i<count($social);$i++) { ?>
                        <li><a href="<?=$social[$i]['link']?>" target="_blank"><img src="<?=UPLOAD_PHOTO_L.$social[$i]['photo']?>" alt="<?=$social[$i]['name'.$lang]?>" width="40" height="40"></a></li>
                    <?php } ?>
                    </ul>
                    <div class="search w-clear">
                        <input type="text" id="keyword" placeholder="Search" onkeypress="doEnter(event,'keyword');" />
                        <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
                        <?php /*
                        <div style="display: none;" class="keyword-autocomplete"></div>
                        */ ?>
                    </div>
                </div>
                <div class="header__bottom__menu">
                    <?php  include TEMPLATE . LAYOUT . "menu.php";?>
                </div>
            </div>
        </div>
    </div>
</div>