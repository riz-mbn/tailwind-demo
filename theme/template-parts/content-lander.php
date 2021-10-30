<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Biz_Niche
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section id="hvac-marketing-intro" class="lg:overflow-hidden mt-12 lg:mt-0 lg:h-screen lg:scroll-snap-align-start">
		<div class="container lg:pt-[23.96vh] xl:pt-[260px] px-[30px] sm:px-8 lg:px-[139px] xl:px-[173px] 2xl:px-52">
			<h1 id="hvac-marketing-intro-h1" class="flex flex-col items-center font-prometo">
				<span id="hvmi-text-1" class="lg:invisible text-accent-dark text-sm md:text-[0.75rem] lg:text-[0.8rem] xl:text-base 2xl:text-[1.2rem] leading-none md:leading-[1rem] lg:leading-[1.1rem] xl:leading-[1.33rem] 2xl:leading-[1.6rem] font-medium">we made</span>
				<span id="hvmi-text-2" class="lg:invisible mt-[-3px] lg:mt-0 xl:mt-[13px] 2xl:mt-0 text-8xl md:text-[6.29rem] lg:text-[6.67rem] xl:text-[8.33rem] 2xl:text-[10rem] md:leading-[6.28rem] lg:leading-[6.67rem] xl:leading[8.33rem] 2xl:tracking-[5.05px] 2xl:leading-[10rem] font-bold text-outline">HVAC</span>
				<span id="hvmi-text-3" class="lg:invisible mt-[-7px] lg:mt-[-13px] xl:mt-[-3px] 2xl:mt-[-13px] text-5xl md:text-[3.3rem] lg:text-[3.5rem] xl:text-[4.42rem] 2xl:text-[5.302rem] md:leading-[3.8rem] lg:leading-[4rem] xl:leading-[5.05rem] 2xl:leading-[5.302rem] font-bold">marketing</span>
				<span id="hvmi-text-4" class="lg:invisible mt-[25px] md:mt-0 lg:mt-[1px] xl:mt-[3px] 2xl:mt-[11px] 2xl:mb-7 text-primary text-xl md:text-base lg:text-[1.06rem] xl:text-[1.33rem] 2xl:text-[1.6rem] 2xl:tracking-[2px] leading-none md:leading-10 lg:leading-[1.33rem] xl:leading-[1.66rem] 2xl:leading-8 font-bold">our biz niche</span>
			</h1>
			<div id="whole-hvac" class="flex flex-col items-center relative mt-14 md:mt-[27px] lg:mt-10 xl:mt-[50px] 2xl:mt-7">
				<figure id="hvac-top" class="lg:invisible z-10 w-32 md:w-[291px] lg:w-[310px] xl:w-[387px] 2xl:w-[581px]">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/hvac-top.png" alt="hvac top icon"/>
				</figure>
				<figure id="hvac-mid" class="lg:invisible z-10 w-32 md:w-[291px] lg:w-[310px] xl:w-[388px] 2xl:w-[581px] mt-[-37px] md:mt-[-85px] lg:mt-[-91px] xl:mt-[-114px] 2xl:mt-[-171px]">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/hvac-mid.png" alt="hvac mid icon"/>
				</figure>
				<figure id="hvac-bottom" class="lg:invisible z-0 w-[153px] md:w-[346px] lg:w-[368px] xl:w-[460px] mt-[-83px] md:mt-[-186px] lg:mt-[-195px] xl:mt-[-245px] 2xl:mt-[-365px] 2xl:w-[691px]">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/hvac-bottom.png" alt="hvac bottom icon"/>
				</figure>
				<figure id="hvac-icons" class="lg:invisible absolute top-[-38px] md:top-[-82px] lg:top-[-110px] xl:top-[-137px] 2xl:top-[-206px]">
					<img class="w-full md:w-[670px] lg:w-[709px] xl:w-[888px] 2xl:w-[1332px]" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/small-icons.svg" alt="hvac small icons"/>
				</figure>
			</div>
		</div>
	</section>
	<!-- </ #hvac-marketing-intro > -->

	<section id="mbn-intro-paragraph" class="lg:flex lg:items-center lg:overflow-hidden lg:h-screen lg:scroll-snap-align-start mt-6 sm:mt-12 md:mb-12 lg:mt-0 lg:mb-0">
		<div id="mbn-intro-container" class="container text-center px-[30px] xs:px-5 sm:px-8 lg:px-[139px] xl:px-52 2xl:px-52">
			<figure id="mbn-intro-logo" class="lg:invisible hidden lg:inline-block">
				<img class="w-[212px] lg:w-[113px] xl:w-[141px] 2xl:w-[170px]" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/mbn-logo-filled.svg" alt="My Biz Niche"/>
			</figure>
			<h3 id="mbn-intro-sentence" class="lg:invisible px-0 sm:px-20 md:px-[50px] lg:px-16 2xl:px-12 lg:mt-2 xl:mt-10 text-lg xs:text-xl sm:text-4xl md:text-[1.51rem] lg:text-[1.6rem] xl:text-[2rem] 2xl:text-[2.4rem] md:leading-[2rem] lg:leading-[2.13rem] xl:leading-[2.67rem] 2xl:leading-[3.2rem] font-light"><strong class="font-prometo font-bold"><span class="text-primary">m</span>y <span class="text-primary">b</span>iz <span class="text-primary">n</span>iche</strong> is one of the Nation's fastest growing marketing companies. For a lot of good reasons.</h3>
		</div>
	</section>

	<section id="the-big-one" class="lg:flex lg:items-center lg:overflow-hidden lg:h-screen lg:scroll-snap-align-start relative lg:static overflow-hidden mt-28 md:pt-[92px] lg:pt-0 md:mt-0 pb-16 md:pb-[132px] lg:pb-0">
		<div class="container px-[30px] sm:px-8 lg:px-[139px] xl:px-[173px] 2xl:px-52">
			<h2 class="flex flex-col items-center justify-center font-prometo">
				<span id="tbo-text-1" class="lg:invisible lg:mb-0 xl:mt-[7px] md:text-[2.36rem] lg:text-[2.5rem] xl:text-[3.12rem] 2xl:text-[3.75rem] leading-none md:leading-[3.03rem] lg:leading-[3.2rem] xl:leading-[4.01rem] 2xl:leading-[4.8225rem] font-bold">But here's</span>
				<span id="tbo-text-2" class="lg:invisible mt-1 md:mt-[-8px] lg:mt-[-9px] xl:mt-[-10px] text-[46px] xs:text-5xl md:text-[6.71rem] lg:text-[7.1rem] xl:text-[8.89rem] 2xl:text-[10.675rem] leading-none md:leading-[7.67rem] lg:leading-[8.1rem] xl:leading-[10.16rem] 2xl:leading-[12.2rem] font-bold uppercase text-outline-primary">The Big One.</span>
				<span id="tbo-text-3" class="lg:invisible self-start mt-4 md:mt-[11px] lg:mt-[14px] xl:mt-4 ml-5 md:ml-0 lg:ml-0 xl:ml-[5px] md:text-[2.89rem] lg:text-[3.06rem] xl:text-[3.83rem] 2xl:text-[4.6rem] leading-none md:leading-[3.72rem] lg:leading-[3.9rem] xl:leading-[4.93rem] 2xl:leading-[5.92rem] italic">We retain our clients</span>
				<span id="tbo-text-4" class="lg:invisible self-start mt-[6px] md:mt-0 lg:mt-[-3px] ml-28 md:ml-[236px] lg:ml-[calc(50%-123px)] xl:ml-[calc(50%-154px)] text-primary text-[28px] md:text-[4.4rem] lg:text-[4.6625rem] xl:text-[5.83rem] 2xl:text-[7rem] leading-none md:leading-[5.03rem] lg:leading-[5.33rem] xl:leading-[6.66rem] 2xl:leading-[8rem] font-bold">on results.</span>
			</h2>
			<figure class="block md:hidden absolute bottom-0 left-0">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/the-big-one-red-line-mobile.svg" alt=""/>
			</figure>
			<figure class="block md:hidden absolute bottom-12 right-0">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/the-big-one-line-plus-mobile.svg" alt=""/>
			</figure>
			<figure id="tbo-red-line" class="lg:invisible hidden md:block absolute md:z-[-1] md:bottom-[-38px] lg:bottom-[-41px] xl:bottom-0 md:left-[-99px] lg:left-[0] xl:left-[50px] md:w-[227px] lg:w-[241px] xl:w-[251px]">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/the-big-one-red-line.svg" alt=""/>
			</figure>
			<figure id="tbo-line-plus" class="lg:invisible hidden md:block absolute md:z-[-1] md:bottom-[92px] lg:bottom-[98px] xl:bottom-[123px] md:right-[-98px] lg:right-0 xl:right-0 md:w-[227px] lg:w-[242px] xl:w-[303px]">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/the-big-one-line-plus.svg" alt=""/>
			</figure>
		</div>
	</section>

	<section id="your-roi" class="relative 2xl:overflow-x-clip lg:z-[53] pt-11 md:pt-[29px] lg:pt-10 xl:pt-[50px] 2xl:pt-[62px] pb-12 lg:pb-[72px] xl:pb-[90px] 2xl:pb-[77px] bg-secondary text-white text-xl md:text-2xl">
		<div class="md:absolute md:left-0 md:right-0 md:top-[82px] lg:top-[109px] xl:top-[137px] 2xl:top-[167px] hidden md:block md:w-full md:h-px md:bg-[#8d3323]"></div>
		<div class="container px-[30px] sm:px-8 md:px-[104px] lg:px-[139px] xl:px-[173px] 2xl:px-52">
			<h3 class="mb-11 md:mb-[30px] lg:mb-[41px] xl:mb-12 2xl:mb-[61px] font-prometo text-5xl md:text-[3.5rem] lg:text-[4.6625rem] xl:text-[5.83rem] 2xl:text-[7rem] md:leading-[4rem] lg:leading-[5.33rem] xl:leading-[6.66rem] 2xl:leading-[8rem] font-bold">How so?</h3>
			<p class="mb-2 md:mb-[2px] lg:mb-0 2xl:mb-1 italic md:w-1/2 lg:w-5/12 md:text-[1.2rem] lg:text-[1.6rem] xl:text-[2rem] 2xl:text-[2.4rem] md:leading-[1.6rem] lg:leading-[2.13rem] xl:leading-[2.66rem] 2xl:leading-[3.2rem]">We made <strong class="md:not-italic md:font-prometo"><span class="font-normal md:font-bold">it</span> trackable</strong>.</p>
			<p class="mb-2 md:mb-[2px] lg:mb-0 2xl:mb-1 italic md:w-1/2 lg:w-5/12 md:text-[1.2rem] lg:text-[1.6rem] xl:text-[2rem] 2xl:text-[2.4rem] md:leading-[1.6rem] lg:leading-[2.13rem] xl:leading-[2.66rem] 2xl:leading-[3.2rem]">We made <strong class="md:not-italic md:font-prometo"><span class="font-normal md:font-bold">it</span> accountable</strong>.</p>
			<p class="italic md:w-[55%] md:text-[1.2rem] lg:text-[1.6rem] xl:text-[2rem] 2xl:text-[2.4rem] md:leading-[1.6rem] lg:leading-[2.13rem] xl:leading-[2.66rem] 2xl:leading-[3.2rem]">We created an advertising model <strong class="md:not-italic md:font-prometo">that could prove results</strong>.</p>

			<div class="mt-6 md:mt-[-141px] lg:mt-[-187px] xl:mt-[-233px] 2xl:mt-[-289px] md:relative">
				<figure class="w-[315px] sm:w-full sm:flex sm:justify-end">
					<img class="sm:w-[59.6vw] md:w-[458px] lg:w-[611px] xl:w-[764px] 2xl:w-[917px] md:mr-[-23px] lg:mr-[-30px] xl:-mr-9 2xl:mr-[-44px]" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/roi-graph.svg" alt=""/>
				</figure>
				<h3 class="md:absolute md:left-0 md:bottom-[29px] lg:bottom-9 xl:bottom-12 2xl:bottom-[52px] mt-[-58px] md:mt-0 lg:mt-0 font-prometo text-[28px] md:text-[1.2rem] lg:text-[1.6rem] xl:text-[2rem] 2xl:text-[2.4rem] leading-9 md:leading-[1.6rem] lg:leading-[2.13rem] 2xl:leading-[3.2rem] font-bold">Reflecting real ROI for the dollars spent.<br />Real ROI that would make a CFO smile.</h3>
			</div>

			<h4 class="pt-10 md:pt-[47px] lg:pt-[61px] xl:pt-[81px] 2xl:pt-[100px] md:pb-[6px] lg:pb-0 md:pr-[35%] text-xl md:text-[1.2rem] lg:text-[1.6rem] xl:text-[2rem] 2xl:text-[2.4rem] md:leading-[1.6rem] lg:leading-[2.13rem] xl:leading-[2.66rem] 2xl:leading-[3.2rem] italic">Not simply “better overall traffic” or “more buzz” in the marketplace, instead</h4>
			<div class="relative mt-4 md:mt-[-7px] lg:mt-[-4px] xl:mt-[-5px] 2xl:mt-[-5px] 2xl:mr-[-120px] md:mb-[5px] lg:mb-0 2xl:mb-[30px] text-right sm:text-center">
				<h5 class="font-prometo md:mb-[-22px] lg:mb-[-29px] xl:mb-[-38px] 2xl:mb-[-43px] md:mr-[9px] xl:mr-[13px] 2xl:mr-[137px] text-[52px] xs:text-[54px] md:text-[3.3355rem] lg:text-[4.45rem] xl:text-[5.56rem] 2xl:text-[6.671rem] leading-none md:leading-[4.2895rem] lg:leading-[5.72rem] xl:leading-[7.15rem] 2xl:leading-[8.579rem] font-bold">more <span class="text-primary">SALES</span></h5>
				<div class="relative">
					<h5 class="font-prometo sm:mr-[-81px] md:mr-[-69px] lg:mr-[-94px] xl:mr-[-118px] 2xl:mr-[-20px] text-[52px] xs:text-[54px] md:text-[3.3355rem] lg:text-[4.45rem] xl:text-[5.56rem] 2xl:text-[6.671rem]  leading-none md:leading-[4.2895rem] lg:leading-[5.72rem] xl:leading-[7.15rem] 2xl:leading-[8.579rem] font-bold">more <span class="text-primary">ROI</span></h5>
					<figure class="absolute right-[-7px] xs:right-[-6px] sm:right-[calc(50%-162px)] md:right-[124px] lg:right-[163px] xl:right-[205px] 2xl:right-[369px] top-[1px] xs:top-[2px] md:top-[8px] lg:top-[11px] xl:top-[15px] 2xl:top-[18px] w-[108px] md:w-[111px] lg:w-[149px] xl:w-[184px] 2xl:w-[214px]">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/more-roi-dollars.svg" alt=""/>
					</figure>
				</div>
				<figure class="hidden md:block absolute md:w-[146px] lg:w-[194px] xl:w-[243px] 2xl:w-[292px] md:right-0 lg:right-[-2px] 2xl:right-[121px] md:bottom-[-150px] lg:bottom-[-203px] xl:bottom-[-250px] 2xl:bottom-[-295px]">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/paper-planes.svg" alt=""/>
				</figure>
				<figure class="hidden md:block absolute md:w-[247px] lg:w-[330px] xl:w-[412px] 2xl:w-[493px] md:bottom-[-52px] lg:bottom-[-70px] xl:bottom-[-90px] 2xl:bottom-[-105px] md:left-[-155px] lg:left-[-207px] xl:left-[-260px] 2xl:left-[-310px]">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/paper-plane.svg" alt=""/>
				</figure>
			</div>
		</div>
	</section>

	<section id="we-actually-do-it" class="relative lg:z-[52] lg:bg-white pt-[60px] md:pt-[101px] lg:pt-[108px] xl:pt-[135px] 2xl:pt-[201px] pb-10 md:pb-20 lg:pb-[86px] xl:pb-[107px] 2xl:pb-[161px]">
		<div class="container relative px-[30px] sm:px-8 lg:px-[139px] xl:px-[173px] 2xl:px-52">
			<h2 class="flex flex-col items-start sm:items-center md:items-start">
				<span class="text-xl md:text-2xl lg:text-[1.6rem] xl:text-[2rem] 2xl:text-[2.4rem] lg:leading-[2.13rem] xl:leading-[2.66rem] 2xl:leading-[3.2rem] italic">We don't just say we can produce huge ROI,</span>
				<span class="mb-3 md:mb-5 lg:mb-0 xl:mt-[14px] 2xl:mt-[1px] text-primary font-prometo font-bold text-4xl xs:text-[40px] md:text-[4.4rem] lg:text-[4.6625rem] xl:text-[5.83rem] 2xl:text-[7rem] leading-none xs:leading-[48px] md:leading-[5rem] lg:leading-[5.32rem] xl:leading-[6.66rem] 2xl:leading-[8rem]">We actually do it</span>
				<span class="lg:mt-5 xl:mt-[25px] 2xl:mt-[39px] font-light text-xl md:text-xs lg:text-[0.8rem] xl:text-base 2xl:text-[1.2rem] md:leading-[15px] lg:leading-4 xl:leading-[1.24rem] 2xl:leading-[1.5rem]">Just look at what we did for Erik’s business Precision Air & Plumbing.</span>
			</h2>
			<figure class="absolute -bottom-20 md:bottom-[-120px] lg:bottom-[-106px] xl:bottom-[-147px] 2xl:bottom-[-201px] left-1/2 -translate-x-1/2 lg:left-[139px] xl:left-[173px] 2xl:left-52 lg:transform-none lg:w-11 xl:w-[89px]">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/after-arrow.svg" alt=""/>
			</figure>
		</div>
		<figure class="hidden md:block md:absolute md:z-[-90] md:bottom-0 md:right-[94px] lg:right-[205px] xl:right-64 md:w-[214px] lg:w-[225px] xl:w-[283px]">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/the-big-one-red-line.svg" alt=""/>
		</figure>
		<figure class="hidden lg:block lg:absolute lg:z-50 lg:left-8 2xl:left-[47px] lg:bottom-[-109px] xl:bottom-[-135px] 2xl:bottom-[-163px] lg:w-[44px] xl:w-[55px] 2xl:w-[66px]">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/we-do-winning-work.svg" alt=""/>
		</figure>
	</section>

	<section id="case-study" class="lg:relative 2xl:overflow-x-clip lg:z-[51] pt-[70px] lg:pt-[50px] xl:pt-[65px] 2xl:pt-[100px] pb-12 xl:pb-[75px] 2xl:pb-[91px] bg-secondary text-white">
		<div class="container lg:relative px-[30px] sm:px-8 lg:px-[139px] xl:px-[173px] 2xl:px-52">
			<div class="lg:flex lg:flex-row-reverse lg:items-center lg:mb-[50px] xl:mb-16 2xl:mb-[100px]">
				<div id="case-study-video" class="lg:w-[366px] xl:w-[457px] 2xl:w-[549px]">
					<figure class="aspect-w-16 aspect-h-9">
						<iframe class="w-[549px] h-[309px]" src="https://player.vimeo.com/video/617474040?h=034c091d25&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe><script src="https://player.vimeo.com/api/player.js"></script>
					</figure>
					<div id="video-caption" class="mt-[18px] xl:mt-[15px] 2xl:mt-5 mb-9 lg:mb-0">
						<div class="font-prometo font-bold text-lg lg:text-[0.8rem] 2xl:text-lg lg:leading-3 2xl:leading-[1.446875rem]">Erik</div>
						<div class="text-sm xl:mt-[3px] lg:text-[0.8rem] 2xl:text-sm lg:leading-4 2xl:leading-[1.025625rem]"><span class="text-[#AAAAAA]">Founder & CEO</span><span class="text-[#AAAAAA] mx-2">|</span><span class="">Precision Air & Plumbing</span></div>
					</div>				
				</div>
				<div id="case-study-company-intro" class="lg:flex-1 mb-4 font-light text-xl lg:text-base">
					<h3 class="mb-6 lg:mb-[10px] xl:mb-[13px] 2xl:mb-6 lg:pr-24 xl:pr-32 font-prometo font-bold text-[28px] lg:text-[1.6rem] xl:text-[2rem] 2xl:text-[2.4rem] leading-[36px] lg:leading-[2.13rem] xl:leading-[2.67rem] 2xl:leading-[3.2rem]">MBN helped Precision Air & Plumbing</h3>
					<p class="mb-2 lg:mb-[6px] xl:mb-[10px] 2xl:mb-4 font-light lg:text-[0.8rem] xl:text-base 2xl:text-[1.2rem] lg:leading-4 xl:leading-5 2xl:leading-[1.5rem]">Produce 3 X more leads from 66% less ad spend</p>
					<p class="mb-2 lg:mb-[6px] xl:mb-[10px] 2xl:mb-4 font-light lg:text-[0.8rem] xl:text-base 2xl:text-[1.2rem] lg:leading-4 xl:leading-5 2xl:leading-[1.5rem]">Ranked their site #1 in Google organically</p>
					<p class="mb-2 lg:mb-[6px] xl:mb-[10px] 2xl:mb-4 font-light lg:text-[0.8rem] xl:text-base 2xl:text-[1.2rem] lg:leading-4 xl:leading-5 2xl:leading-[1.5rem]">Saved them over $480,000 in ad spend annually</p>
				</div>
			</div>
			<div id="case-study-breakdown-cols" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[10px] lg:gap-[16px] xl:gap-5 2xl:gap-[30px]">
				<div class="pt-[59px] lg:pt-[29px] 2xl:pt-[60px] pb-[46px] lg:pb-6 2xl:pb-[60px] px-7 lg:px-[18px] bg-secondary-dark text-center rounded-[30px]">
					<figure>
						<img class="mx-auto lg:w-[34px] xl:w-11" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/graph-icon.svg" alt=""/>
					</figure>
					<div class="mt-8 font-light text-xl lg:text-[0.8rem] xl:text-base 2xl:text-[1.2rem] lg:leading-4 xl:leading-5 2xl:leading-[1.5rem]">Secured and established <span class="font-prometo font-bold text-primary">PAGE 1</span> rankings in <span class="font-prometo font-bold text-primary">Google</span>.</div>
				</div>
				<div class="pt-[59px] lg:pt-[29px] 2xl:pt-[60px] pb-[46px] lg:pb-6 2xl:pb-[60px] px-7 lg:px-[18px] bg-secondary-dark text-center rounded-[30px]">
					<figure>
						<img class="mx-auto lg:w-[34px] xl:w-[38px]" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/phone-icon.svg" alt=""/>
					</figure>
					<div class="mt-8 font-light text-xl lg:text-[0.8rem] xl:text-base 2xl:text-[1.2rem] lg:leading-4 xl:leading-5 2xl:leading-[1.5rem]">Precision Air & Plumbing was averaging <strong class="font-bold">$300</strong> per call, we <span class="font-prometo font-bold text-primary">lowered</span> the cost per call to <strong class="font-bold">AS LOW AS</strong> <span class="font-prometo font-bold text-primary">$58 PER LEAD</span>.</div>
				</div>
				<div class="pt-[59px] lg:pt-[29px] 2xl:pt-[60px] pb-[46px] lg:pb-6 2xl:pb-[60px] px-7 lg:px-[18px] bg-secondary-dark text-center rounded-[30px]">
					<figure>
						<img class="mx-auto lg:w-[34px] xl:w-11" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/magnifying-icon.svg" alt=""/>
					</figure>
					<div class="mt-8 font-light text-xl lg:text-[0.8rem] xl:text-base 2xl:text-[1.2rem] lg:leading-4 xl:leading-5 2xl:leading-[1.5rem]">Produced a <span class="font-prometo font-bold text-primary">300% growth</span> in ranked Keywords.</div>
				</div>
				<div class="pt-[59px] lg:pt-[29px] 2xl:pt-[60px] pb-[46px] lg:pb-6 2xl:pb-[60px] px-7 lg:px-[18px] bg-secondary-dark text-center rounded-[30px]">
					<figure>
						<img class="mx-auto lg:w-[34px] xl:w-11" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/calendar-icon.svg" alt=""/>
					</figure>
					<div class="mt-8 font-light text-xl lg:text-[0.8rem] xl:text-base 2xl:text-[1.2rem] lg:leading-4 xl:leading-5 2xl:leading-[1.5rem]">Growing their 8 figure business by <span class="font-bold">50%</span> and generating <span class="font-prometo font-bold text-primary">millions</span> in additional revenue.</div>
				</div>
			</div>
			<h3 class="mt-[30px] md:mt-11 xl:mt-[58px] font-prometo md:text-center lg:text-left font-bold text-[28px] lg:text-[4.66rem] xl:text-[5.83rem] 2xl:text-[7rem] leading-9 lg:leading-[5.33rem] xl:leading-[6.66rem] 2xl:leading-[8rem]">And we can do the same for your HVAC Company.</h3>

			<figure class="hidden lg:block lg:absolute lg:bottom-[-70px] xl:bottom-[-115px] 2xl:bottom-[-134px] lg:right-[40px] xl:right-28 2xl:right-[136px] lg:w-64 xl:w-[302px] 2xl:w-[362px]">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/resources/images/the-big-one-red-line.svg" alt=""/>
			</figure>
		</div>
	</section>

	<?php if ( get_edit_post_link() ) : ?>
		<footer>
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span>%s</span>', 'mybizniche' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span>',
				'</span>'
			);
			?>
		</footer>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
