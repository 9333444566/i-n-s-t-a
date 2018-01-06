<nav class="navbar">
    <div class="container<?=session("uid")?"-fluid":""?>">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <?php if(session("uid")){?>
            <a href="javascript:void(0);" class="bars"></a>
            <?php }?>
            <a class="navbar-brand text-center" href="<?=PATH?>"><img src="/assets/images/logo-header-white.png" title="" alt="پنل اتوماسیون اینستاگرام"></a>
        </div>
        
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav top-menu">
                <?php if(!instacurl()){?>
                <li><a href="<?=url("payments")?>"><?=l('Pricing')?></a></li>
                <?php }?>
            </ul>
            <ul class="nav navbar-nav top-menu left mr0" style="float:left;">
                <li>
                    <button style="font-family:'IRANSans',tahoma !important;margin-top:5px;" type="button" class="btn btn-warning" href="javascript:void(0);" onclick="javascript:introJs().setOptions({ 'nextLabel': 'بعد', 'prevLabel': 'قبل', 'skipLabel': 'خروج', 'doneLabel': 'اتمام' }).start();"><i class="fa fa-graduation-cap" aria-hidden="true"></i> مشاهده ی آموزش قسمت <?=$template['title']?></button>
                </li>
            </ul>
        </div>
    </div>
</nav>