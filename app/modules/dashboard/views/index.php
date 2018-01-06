<div class="row dashboard">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <!-- <div class="info-box-2 hover-zoom-effect">
            <div class="icon">
                <i class="material-icons col-<?=THEME?>">contacts</i>
            </div>
            <div class="content">
                <div class="text uc"><?=l('Account')?></div>
                <div class="number"><?=$group->profile?></div>
            </div>
        </div> -->
		<div class="panel panel-primary" style="margin-top:-25px">
			<div class="panel-heading">
				آخرین اعلامیه ها و اخبار پنل اتوماسیون اینستاگرام
			</div>
			<div class="panel-body">
				<p style="text-align:center;font-weight:500;">مبانی استفاده از پنل اتوماسیون اینستاگرام - <span style="color:red;font-weight:700;">قبل از تنظیم هر عملکرد خودکار این مطلب را مطالعه کنید</span></p>
				<ul>
					<li>امکانات جدید : اضافه شدن قسمت لغات و اصطلاحات اینستاگرامی</li>
					<li>امکانات جدید : اضافه شدن قسمت آموزش</li>
					<li>امکانات جدید : اضافه شدن قابلیت های جدید به آنفالو خودکار</li>
					<li>امکانات جدید : اضافه شدن بلک لیست به فعالیت های خودکار</li>
				</ul>
			</div>
		</div>
		
        <div class="panel-group full-body" id="accordion_23" role="tablist" aria-multiselectable="true">
            <div class="panel panel-settings mb20" style="background-color: transparent;" data-intro="در این بخش تعداد <strong>فعالیت های خودکار</strong> انجام شده توسط پنل اتوماسیون نمایش داده می شود.<br>برای مشاهده ریز گزارشات فعالیت های انجام شده از منوی اصلی بر روی <strong>گزارشات</strong> کلیک کنید" data-step="1">
                <div class="panel-heading" role="tab" id="headingThree_23">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree_23" aria-expanded="false" aria-controls="collapseThree_23">
                            <?=l('ACTIVITY REPORT')?>
                        </a>
                    </h4>
                </div>
                <div id="collapseThree_23" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree_23" aria-expanded="true">
                    <div class="panel-body row mb0 pb0">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12" data-intro="در این قسمت تعداد کل لایک هایی که تا به حال پنل اتوماسیون اینستاگرام انجام داده است قابل مشاهده است" data-step="3" >
                                <div id="totallike" class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-pink">favorite</i>
                                    </div>
                                    <div class="content">
                                        <div class="number"><?=$activity->like_count?></div>
									<div class="text uc">لایک انجام شده</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12" data-intro="در این قسمت تعداد کامنت های گذاشته در زیر پست های مخاطبین که توسط پنل اتوماسیون اینستاگرام انجام شده است قابل مشاهده است" data-step="4">
                                <div id="totalcomment" class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-purple">comment</i>
                                    </div>
                                    <div class="content">
                                        <div class="number"><?=$activity->comment_count?></div>
                                        <div class="text uc">کامنت ارسال شده</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12" data-intro="در این قسمت تعداد مخاطبین فالو شده توسط پنل اتوماسیون اینستاگرام قابل مشاهده است" data-step="5">
                                <div id="totalfollow" class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-light-green">thumb_up</i>
                                    </div>
                                    <div class="content">
                                        <div class="number"><?=$activity->follow_count?></div>
                                        <div class="text uc">اکانت فالو شده</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12" data-intro="در این قسمت تعداد مخاطبینی که ابتدا 3 پست آخر آنها لایک شده و سپس توسط سیستم فالو شده اند، مشاهده می گردد" data-step="6">
                                <div id="totallikefollow" class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-light-green">thumb_up</i>
                                    </div>
                                    <div class="content">
                                        <div class="number"><?=$activity->like_follow_count?></div> 
										<div class="text uc">(لایک و فالو) شده</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12" data-intro="مجموع تعداد فالوئرهای جدیدی که توسط پنل اتوماسیون به صورت خودکار فالوبک شده اند.<br>ممکن است برای این افراد یک دایرکت مسیج نیز به صورت خودکار ارسال کرده باشید" data-step="7">
                                <div id="totalfollowback" class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-light-blue">thumbs_up_down</i>
                                    </div>
                                    <div class="content">
                                        <div class="number"><?=$activity->followback_count?></div>
										<div class="text uc"><span style="font-size:0.8em">فالوئر جدید، فالوبک شده (+ دایرکت مسیج)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12" data-intro="تعداد افرادی که به صورت خودکار از لیست فالوئینگ هایتان آنفالو شده اند" data-step="8">
                                <div id="totalunfollow" class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-blue-grey">thumb_down</i>
                                    </div>
                                    <div class="content">
                                        <div class="number"><?=$activity->unfollow_count?></div>
                                        <div class="text uc">اکانت آنفالو شده</div>
                                    </div>
                                </div>
                            </div>
<!--
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div id="totalrepost" class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-teal">cached</i>
                                    </div>
                                    <div class="content">
                                        <div class="text uc"><?=l('Repost')?></div>
                                        <div class="number"><?=$activity->repost_count?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div id="totaldeletepost" class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-orange">delete_forever</i>
                                    </div>
                                    <div class="content">
                                        <div class="text uc"><?=l('Delete media')?></div>
                                        <div class="number"><?=$activity->deletemedia_count?></div>
                                    </div>
                                </div>
                            </div>
-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-group full-body" id="accordion_22" role="tablist" aria-multiselectable="true" data-intro="در این بخش نمای کلی از وضعیت پست هایی که در قسمت <strong>زمان بندی پست</strong> قرار داده اید قابل مشاهده است" data-step="2">
            <div class="panel panel-settings mb20" style="background-color: transparent;">
                <div class="panel-heading" role="tab" id="headingThree_22">
                    <h4 class="panel-title">
                        <a class="collapsed uc" role="button" data-toggle="collapse" href="#collapseThree_22" aria-expanded="false" aria-controls="collapseThree_22">
                            <?=l('Post Report')?>
                        </a>
                    </h4>
                </div>
                <div id="collapseThree_22" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree_22" aria-expanded="true">
                    <div class="panel-body row mb0 pb0">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12" data-intro="مجموع تعداد کل پست هایی که برای ارسال در اکانت اینستاگرام تان برنامه ریزی کرده اید" data-step="9">
                                <div class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-orange">send</i>
                                    </div>
                                    <div class="content">
                                        <div class="text uc"><?=l('Total process')?></div>
                                        <div class="number"><?=($post->total >= 10000)?"10000+":$post->total?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12" data-intro="مجموع تعداد پست هایی که با موفقیت در اینستاگرام ارسال شده" data-step="10">
                                <div class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-light-green">beenhere</i>
                                    </div>
                                    <div class="content">
                                        <div class="text uc"><?=l("Total success")?></div>
                                        <div class="number"><?=($post->success >= 10000)?"10000+":$post->success?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12" data-intro="مجموع تعداد پست هایی که در سیستم جهت ارسال در اکانت اینستاگرام زمان بندی کرده اید اما بنابر هر دلیلی ارسال آنها با شکست مواجه شده" data-step="11">
                                <div class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-red">sms_failed</i>
                                    </div>
                                    <div class="content">
                                        <div class="text uc"><?=l("Total failure")?></div>
                                        <div class="number"><?=($post->failure >= 10000)?"10000+":$post->failure?></div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12" data-intro="مجموع تعداد پست هایی که سیستم باید برای شما در روزهای آتی ارسال کند" data-step="12">
                                <div class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-blue ">layers</i>
                                    </div>
                                    <div class="content">
                                        <div class="text uc"><?=l("Total processing")?></div>
                                        <div class="number"><?=($post->processing >= 10000)?"10000+":$post->processing?></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--
        <div class="panel-group full-body" id="accordion_24" role="tablist" aria-multiselectable="true">
            <div class="panel panel-settings mb20" style="background-color: transparent;">
                <div class="panel-heading" role="tab" id="headingThree_24">
                    <h4 class="panel-title">
                        <a class="collapsed uc" role="button" data-toggle="collapse" href="#collapseThree_24" aria-expanded="false" aria-controls="collapseThree_24">
                            <?=l('Message Report')?>
                        </a>
                    </h4>
                </div>
                <div id="collapseThree_24" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree_24" aria-expanded="true">
                    <div class="panel-body row mb0 pb0">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-orange">send</i>
                                    </div>
                                    <div class="content">
                                        <div class="text uc"><?=l('Total process')?></div>
                                        <div class="number"><?=($message->total >= 10000)?"10000+":$message->total?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-light-green">beenhere</i>
                                    </div>
                                    <div class="content">
                                        <div class="text uc"><?=l("message success")?></div>
                                        <div class="number"><?=($message->success >= 10000)?"10000+":$message->success?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-red">sms_failed</i>
                                    </div>
                                    <div class="content">
                                        <div class="text uc"><?=l("message failure")?></div>
                                        <div class="number"><?=($message->failure >= 10000)?"10000+":$message->failure?></div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box-2 hover-zoom-effect">
                                    <div class="icon">
                                        <i class="material-icons col-blue">layers</i>
                                    </div>
                                    <div class="content">
                                        <div class="text uc"><?=l("message processing")?></div>
                                        <div class="number"><?=($message->processing >= 10000)?"10000+":$message->processing?></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    -->
	</div>
</div>
