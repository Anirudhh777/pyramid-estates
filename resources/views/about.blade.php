@extends('app')
@section('front-page')
<div class="about">
	<div class="container">
		<div class="about-text">
			<p>Pyramid Estates is a real estate division of Gorwani Builders, which has a construction and real estate experience of the last two decades, having developed and delivered more than 1.5 lakh square feet across Mumbai. We provide personalized real estate solutions for buying, selling and renting properties.
			<br><br>
			We have an excellent knowledge about the outright and rental market in terms of property valuation, marketing and sales, quality analysis, legal framework, and our vast network of channel partners and other professionals allows us to have a fair assessment of various properties as compared to other consultants. This, coupled with our vast experience in the real estate industry, makes us better suited to consult and guide you to find the properties you’re looking for. 
			<br><br>
			We aim to give our clients the best real estate solutions that are customized and personalized as per their requirements. Within 24 hours of your enquiry, we shortlist a customized list of properties which suit your needs. Unlike aggregators who provide listings, we provide property requirements based on your enquiries by leveraging our network of channel partners & real estate brokers.
			<br><br>
			We believe in creating a personal connection with all our clients. We have created a hassle-free process of buying and renting the best properties for you, available at the best commercial terms. We believe in safeguarding the interests of people looking to buy or rent space and provide them value for money.
			<br><br>
			We believe in providing value to our clients who are looking to buy or rent the house of their dreams.
			</p>
		</div>
		
		<div class="row">																							
			<div class="col-md-6">
				<div class="team-member">
					<div class="member-photo">
		                 <div class="pull-left item-image">
		                     <img itemprop="thumbnailUrl" alt="Chairman / Managing Director" src="{{ secure_asset('assets/images/gopal-gorwani.jpg') }}">

		                 </div>
					</div>
					<div class="member-content">
						<h3 class="member-name">Gopal Gorwani</h3>
						<div class="member-position">
							founder & visionary				
						</div>
						<div class="member-quotes">
							<p>Gopal Gorwani always had a vision of transformational development. His focus was always on creating value and making a difference in all the projects we undertake.</p>				
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="team-member">
					<div class="member-photo">
	                 	<div class="pull-left item-image">
	                    	 <img itemprop="thumbnailUrl" alt="Director" src="{{ secure_asset('assets/images/nikhil-gorwani.jpg') }}">
	                 	</div>
					</div>
					<div class="member-content">
						<h3 class="member-name">Nikhil Gorwani</h3>
						<div class="member-position">
							Director				
						</div>
						<div class="member-quotes">
							<p>“Our entire purpose of launching Pyramid Estates is to walk you down the process of buying or renting your property through our team of professionals in the easiest and safest possible manner by getting you the best deals in best locations at the best prices.”</p>				
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="team-member">
					<div class="member-photo">
	                 	<div class="pull-left item-image">
	                     	<img itemprop="thumbnailUrl" alt="Director" src="{{ secure_asset('assets/images/neeraj-gorwani.jpg') }}">
	                	 </div>
					</div>
					<div class="member-content">
						<h3 class="member-name">Neeraj Gorwani</h3>
						<div class="member-position">
							Director			
						</div>
						<div class="member-quotes">
							<p>“With our vast experience, expertise and ethical track record in real estate development, at Pyramid, we expand our vision to provide real estate solutions and strive to bring the most value deals for our buyers and sellers with our competent and professional support, be it in legal, commercial or any technical aspect of the property, to fulfil your objectives and requirements.”</p>				
						</div>
					</div>
				</div>
			</div>
	 
			<div class="col-md-6">
				<div class="team-member">
					<div class="member-photo">
	                     <div class="pull-left item-image">
	                         <img itemprop="thumbnailUrl" alt="Director" src="{{ secure_asset('assets/images/krish-gorwani.jpg') }}">
	                     </div>
					</div>
					<div class="member-content">
						<h3 class="member-name">Krish Gorwani</h3>
						<div class="member-position">
							Director				
						</div>
						<div class="member-quotes">
							<p>“Our goal is to make your life easier when it comes to dealing with the buying, selling, renting of your properties and the various other aspects that come associated with it. We understand its value and importance to you as they are done with your hard-earned money and we believe that you should get the full value for your investment.” </p>				
						</div>
					</div>
				</div>
			</div>				
		</div>
	</div>
</div>
@endsection