<header id="header" class="m-has-header-tools m-has-gmap">
			<div class="header-inner">

				<!-- HEADER CONTENT : begin -->
				<div class="header-content">
					<div class="c-container">
						<div class="header-content-inner">

							<!-- HEADER BRANDING : begin -->
							<!-- Logo dimensions can be changed in library/css/custom.css
							You can remove "m-large-logo" class from following element to use standard (smaller) version of logo -->
							<div class="header-branding m-large-logo">
								<a href="index.html"><span>
									<img src="images/header-logo.png"
										data-hires="images/header-logo.2x.png"
										alt="TownPress - Municipality HTML Template">
								</span></a>
							</div>
							<!-- HEADER BRANDING : end -->

							<!-- HEADER TOGGLE HOLDER : begin -->
							<div class="header-toggle-holder">

								<!-- HEADER TOGGLE : begin -->
								<button type="button" class="header-toggle">
									<i class="ico-open tp tp-menu"></i>
									<i class="ico-close tp tp-cross"></i>
									<span>Menu</span>
								</button>
								<!-- HEADER TOGGLE : end -->

								<!-- HEADER GMAP SWITCHER : begin -->
								<button type="button" class="header-gmap-switcher" title="Show on Map">
									<i class="ico-open tp tp-map2"></i>
									<i class="ico-close tp tp-cross"></i>
								</button>
								<!-- HEADER GMAP SWITCHER : end -->

							</div>
							<!-- HEADER TOGGLE HOLDER : end -->

							<!-- HEADER MENU : begin -->
							<!-- This menu is used as both mobile menu (displayed on devices with screen width < 991px)
							and standard header menu (only if Header element has "m-has-standard-menu" class) -->
							<!-- HEADER MENU : end -->

							<!-- HEADER TOOLS : begin -->
							<div class="header-tools">

								<!-- HEADER SEARCH : begin -->
								<div class="header-search">
									<form method="get" action="search-results.html" class="c-search-form">
										<div class="form-fields">
											<input type="text" value="" placeholder="Rechercher..." name="s">
											<button type="submit" class="submit-btn"><i class="tp tp-magnifier"></i></button>
										</div>
									</form>
								</div>
								<!-- HEADER SEARCH : end -->

								<!-- HEADER GMAP SWITCHER : begin -->
								<!-- Remove following block if you are not using Google Map in this template --
								<button type="button" class="header-gmap-switcher" title="Show on Map">
									<i class="ico-open tp tp-map2"></i>
									<i class="ico-close tp tp-cross"></i>
									<span>Carte</span>
								</button>
								<!-- HEADER GMAP SWITCHER : end -->


							</div>
							<!-- HEADER TOOLS : end -->

						</div>
					</div>
				</div>
				<!-- HEADER CONTENT : end -->

				<!-- HEADER GMAP : begin -->
				<!-- Add your address into "data-address" attribute
				Change zoom level with "data-zoom" attribute, bigger number = bigger zoom
				Change map type with "data-maptype" attribute, values: roadmap | terrain | hybrid | satellite
				API KEY IS REQUIRED! More info https://developers.google.com/maps/documentation/javascript/get-api-key -->
				<div class="header-gmap">
					<div class="gmap-canvas"
						data-google-api-key="AIzaSyAZhg-YFUyvDhxDt-lezjUS-5F_8he--f0"
						data-address="Main St, Stowe, VT 05672, USA"
						data-zoom="17"
						data-maptype="hybrid"
						data-enable-mousewheel="true">
					</div>
				</div>
				<!-- HEADER GMAP : end -->

			</div>
		</header>