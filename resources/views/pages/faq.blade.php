@extends('layouts.main', [
    'title' => 'BC Cherry Association',
    'header' => 'FAQs',
    'footer' => 'dark'
])

@section('header-styles')

@stop

@section('content')

<section class="parallax-bg light-typo padding-top-bottom" data-parallax-background="images/cherry2.jpg" data-stellar-background-ratio="0.25" style="background-image: url(&quot;images/cherry-harvest-dark.jpg&quot;); background-position: 50% 3.5px;">
		
			<div class="container">
			
				<br>
				<h2 class="text-center post-title">{{ $page->title }}</h2>
				<br>
				
			</div><!--End container -->
			
		</section>
		
		<section class="white-bg padding-top-bottom">
		
			<div class="container">
			
				<div class="row">
				
					<div id="single-post" class="col-sm-10 col-sm-offset-1 content">
					
					<header class="post-header">
						
						<ul class="post-meta small">
							<li><i class="fa fa-calendar"></i><a href="#">{{ $page->updated_at->format('F d Y') }}</a></li>
							<li><i class="fa fa-folder-open-o"></i><a href="#">Cherry info</a></li>
						</ul>
						
						<!--<div class="flexslider post-slider">
			
							<ul class="slides">
							
								<li><img class="img-responsive" src="images/cherry-harvest-dark.jpg" alt="" /></li>
								<li><img class="img-responsive" src="images/cherry2.jpg" alt="" /></li>

							</ul>
							
						</div> -->
						
					</header>   
						<div>
							<div class="pf-content">
							
							{!! $page->content !!}
							
							
							{{--<p><strong>Purchasing Canadian Cherries</strong></p>--}}

							@foreach($faqs as $faq)
							<p>Q: {{ $faq->question }}</p>
							<blockquote>
								<p><em>{!! $faq->answer !!}</em>.</p>
							</blockquote>
							@endforeach

							{{--<p>Q: How much do cherries cost per kilogram?</p>--}}
							{{--<blockquote>--}}
								{{--<p><em>The market dictates the price of cherries. The costs required to grow, pick (by hand) and pack make cherries a high value crop. Canadian growers harvest the majority of the crop in August, when nobody else has cherries left.&nbsp;</em></p>--}}
							{{--</blockquote>--}}
							{{----}}
							{{--<p><strong>Export/Import Questions</strong></p>--}}
							{{--<p>Q: Do you export cherries?</p>--}}
							{{--<blockquote>--}}
								{{--<p><em>The BCCA is not a cherry producer. However, the majority of the packinghouses in BC are set up to export cherries, and they are members of the BCCA. We have market access to many countries around the world. We do not currently have access to Japan or South Korea. </em></p>--}}
							{{--</blockquote>--}}
							{{----}}
							{{--<p>Q: What Canadian port do the cherries leave from?</p>--}}
							{{--<blockquote>--}}
								{{--<p><em>If cherries are to be sent by air, they go in refrigerated trucks to Vancouver (YVR).&nbsp;</em><em>By ship, cherries are packed into refrigerated shipping containers and sent via truck or train, East or West, depending on their final destination. Asian shipments will go via Vancouver (Pacific), while European orders go via Montreal (St. Lawrence).</em></p>--}}
							{{--</blockquote>--}}
							{{----}}
							{{--<p><strong>Specifics for exporting to China</strong></hp>--}}
							{{--<p>Q: What are the requirements for importing cherries to China?</p>--}}
							{{--<blockquote>--}}
								{{--<p><em>Government inspections including: AQSIQ Certificate, Phytosanitary Certificate, and audited&nbsp;Grower/Packinghouses are all required for exports. &nbsp;Not all growers&nbsp;are certified for export to China.&nbsp;</em></p>--}}
							{{--</blockquote>--}}
							{{----}}
							{{--<p>Q: What ports in China can receive cherries?</p>--}}
							{{--<blockquote>--}}
								{{--<p><em>The main port has traditionally been Guangzhou. Cherries are also now entering through Beijing and Shanghai. Ideally, direct flights or ships are taken to reduce handling and temperature fluctuations.</em></p>--}}
							{{--</blockquote>--}}
							{{----}}
							{{--<p>Q: How many containers of fruit are available for export to China?</p>--}}
							{{--<blockquote>--}}
								{{--<p><em></em><em>Over 50 sea containers of were exported in 2014, with at least that much volume again being sent by air. Presently Chinese demand exceeds Canadian supply, though young plantings coming on stream will correct that imbalance in the near future.</em></p>--}}
							{{--</blockquote>--}}
							{{----}}
							{{--<p><strong>Domestic and Local Buying</strong></p>--}}
							{{--<p>Q: Are cherries going to become more expensive as exports increase?</p>--}}
							{{--<blockquote>--}}
								{{--<p><em>We hope not. Ideally, Canadians will continue to enjoy good quality, BC Cherries. If consumers demand BC Cherries over USA Cherries, we will be able to make gains in Canadian supermarket chains.&nbsp; </em></p>--}}
							{{--</blockquote>--}}
							{{----}}
							{{--<p>Q: Where can I do U-Pick?</p>--}}
							{{--<blockquote>--}}
							{{--<p><em>In the Okanagan and Creston Valley it is relatively easy to find local cherries during harvest. Our Directory offers orchards with U-Pick and Farm Stores the opportunity to have their location listed.</em></p>--}}
							{{--</blockquote>--}}
							{{----}}
							{{--<p><strong>General Industry Questions: </strong></p>--}}
							{{----}}
							{{--<p>Q: Where do you grow cherries?</p>--}}
							{{--<blockquote>--}}
								{{--<p><em>95% of the cherries grown in Canada are grown in British Columbia (BC). There are three regions blessed with ideal growing conditions: The Okanagan Valley, the Similkameen Valley, and the Creston Valley.&nbsp; Have a look at our Sales Directory for a map. </em></p>--}}
							{{--</blockquote>--}}
							{{----}}
							{{--<p>Q: When is your harvest season?</p>--}}
							{{--<blockquote>--}}
								{{--<p><em>Harvest begins in the South Okanagan in early June. As the summer goes on, cherries are harvested by variety and location, finishing up at the beginning of September in the North Okanagan and Creston Valley. Every year the season varies a little bit, based on the weather.&nbsp; </em></p>--}}
							{{--</blockquote>--}}
							{{----}}
							{{--<p>Q: How many acres of cherries are grown in BC?</p>--}}
							{{--<blockquote>--}}
								{{--<p><em>Our latest survey shows there are approximately 3500 acres of cherries planted.</em></p>--}}
							{{--</blockquote>--}}
							{{----}}
							{{--<p>Q: What kind of cherries are grown by BCCA members?</p>--}}
							{{--<blockquote>--}}
								{{--<p><em>Many different kinds! The most commonly available varieties include: Satin</em><em>™, Cristilina</em><em>™, Skeena, Lapin, Sweetheart</em><em>™, Staccato </em><em>®,&nbsp; Sentennial</em><em>™ and Sovereign</em><em>™. &nbsp;These varieties all were bred at PARC in Summerland. More acres of Regina and Kordia are also being planted and will be in production soon. Individual growers also have many, many other varieties that offer desirable characteristics and market opportunities. </em></p>--}}
							{{--</blockquote>--}}
							{{----}}
							{{--<p>Q: How are cherries packed?</p>--}}
							{{--<blockquote>--}}
								{{--<p><em>Cherries are picked by hand and brought to a designated packing facility. Many new, high-tech packing lines have been installed in the past couple of years. All the packing facilities are either family owned or co-operatively owned. Most facilities pack the majority of fruit into 5kg and 9kg boxes. Domestic fruit is most often packed into 8x1kg bagged boxes. A few facilities have specialized equipment and labour to do smaller packs for store shelves (ie clamshells).&nbsp;</em></p>--}}
							{{--</blockquote>				   --}}
						</div>
						</div>
					
					</div>
				</div>
			
			</div>
			
		</section>

@endsection