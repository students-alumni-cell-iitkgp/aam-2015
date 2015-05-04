 <div id="slider1_container" style="position: relative;  float=left; height: 480px; background: #191919; overflow: hidden;">

    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
        background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
    </div>

    <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
    top: 0px; left: 0px;width: 100%;height:100%;">
</div>

</div>


<!-- Slides Container -->
<div u="slides" style="cursor: move; position: absolute; left: 240px; top: 0px; width: 720px; height: 480px; overflow: hidden;">
    
	<div>
        <img u="image" src="gallery/images/1.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-1.jpg" />
    </div>
    <div>
        <img u="image" src="gallery/images/2.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-2.jpg" />
    </div>
    <div>
        <img u="image" src="gallery/images/3.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-3.jpg" />
    </div>
    <div>
        <img u="image" src="gallery/images/4.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-4.jpg" />
    </div>
    <div>
        <img u="image" src="gallery/images/5.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-5.jpg" />
    </div>
    <div>
        <img u="image" src="gallery/images/6.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-6.jpg" />
    </div>
    <div>
        <img u="image" src="gallery/images/7.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-7.jpg" />
    </div>
    <div>
        <img u="image" src="gallery/images/8.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-8.jpg" />
    </div>
    <div>
        <img u="image" src="gallery/images/9.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-9.jpg" />
    </div>
    <div>
        <img u="image" src="gallery/images/10.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-10.jpg" />
    </div>

    <div>
        <img u="image" src="gallery/images/11.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-11.jpg" />
    </div>
    <div>
        <img u="image" src="gallery/images/12.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-12.jpg" />
    </div>
    <div>
        <img u="image" src="gallery/images/13.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-13.jpg" />
    </div>
    <div>
        <img u="image" src="gallery/images/14.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-14.jpg" />
    </div>
	<div>
        <img u="image" src="gallery/images/14.jpg" />
        <img style="display:none" u="thumb" src="gallery/images/thumb-14.jpg" />
    </div>
</div>

<!-- Direction Navigator Skin Begin -->
<style>
/* jssor slider direction navigator skin 05 css */
            /*
            .jssord05l              (normal)
            .jssord05r              (normal)
            .jssord05l:hover        (normal mouseover)
            .jssord05r:hover        (normal mouseover)
            .jssord05ldn            (mousedown)
            .jssord05rdn            (mousedown)
            */
            .jssord05l, .jssord05r, .jssord05ldn, .jssord05rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(../img/d17.png) no-repeat;
                overflow:hidden;
            }
            .jssord05l { background-position: -10px -40px; }
            .jssord05r { background-position: -70px -40px; }
            .jssord05l:hover { background-position: -130px -40px; }
            .jssord05r:hover { background-position: -190px -40px; }
            .jssord05ldn { background-position: -250px -40px; }
            .jssord05rdn { background-position: -310px -40px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssord05l" style="width: 40px; height: 40px; top: 158px; left: 248px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssord05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
            </span>
            <!-- Direction Navigator Skin End -->

            <!-- Thumbnail Navigator Skin 02 Begin -->
            <div u="thumbnavigator" class="jssort02" style="position: absolute; width: 240px; height: 480px; left:0px; bottom: 0px;">

                <!-- Thumbnail Item Skin Begin -->
                <style>
                /* jssor slider thumbnail navigator skin 02 css */
                /*
                .jssort02 .p            (normal)
                .jssort02 .p:hover      (normal mouseover)
                .jssort02 .pav          (active)
                .jssort02 .pav:hover    (active mouseover)
                .jssort02 .pdn          (mousedown)
                */
                .jssort02 .w
                {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }
                .jssort02 .c
                {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 97px;
                    height: 64px;
                    border: #000 2px solid;
                }
                .jssort02 .p:hover .c, .jssort02 .pav:hover .c, .jssort02 .pav .c 
                {
                	background: url(../img/t01.png) center center;
                	border-width: 0px;
                    top: 2px;
                    left: 2px;
                    width: 97px;
                    height: 64px;
                }
                .jssort02 .p:hover .c, .jssort02 .pav:hover .c
                {
                    top: 0px;
                    left: 0px;
                    width: 99px;
                    height: 66px;
                    border: #fff 1px solid;
                }
                </style>
                <div u="slides" style="cursor: move;">
                    <div u="prototype" class="p" style="position: absolute; width: 101px; height: 68px; top: 0; left: 0;">
                        <div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
                        <div class=c>
                        </div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!-- Thumbnail Navigator Skin End -->
          
        </div>
        <!-- Jssor Slider End -->