		<header>
			<div class="container-fluid">
				<div class="row">
					<div id="topheader1" class="col-4">
						<span style="color: #ffffff;">Free Shipping with $99+ Purchase*</span>
					</div>
					<div id="topheader2" class="col-4">
						<span style="color: #ffffff;">Online Only Up to 25% Off* Accessories</span>
						<span><a href="#"  style="color: #ffffff; text-decoration: underline;">Shop Sale</a></span>
					</div>
					<div id="topheader3" class="col-4">
						<span style="color: #ffffff;">Become Part of the</span>
						<span><a href="#"  style="color: #ffffff;  text-decoration: underline;">Shadow Group</a></span>  
						<span style="color: #ffffff;">for Exclusive Deals</span>
					</div>
				</div>
            </div>
            <div class="container-fluid position-sticky">
				<div class="row">
					<div id="header1" class="col-2">
						<span style="color: #000000;">Welcome, <?php
							if ( isset ( $_SESSION ))
							{
								$ID = $_GET['ID'];
                                $FirstName = $_GET['FirstName'];
                                $Result = mysqli_query("SELECT $FirstName FROM `User1_Information` WHERE `ID` = '$ID' ");
                                $Row = mysqli_fetch_array($Result);
                                $_SESSION['FirstName'] = $Row[$FirstName];
                                echo $_SESSION['FirstName'];
							} else {
								echo '<a href="ShadowGroup.php">Sign In</a>';
							}
							?>
						</span>
					</div>
					<div id="header2" class="col-8">
						<span>
							<img src="images/straight_line_logo.png" alt="Shadow Bikes">
						</span>
					</div>
					<div id="header3" class="col-2">
						<ul class="navbar navbar-expand">
							<li class="nav-item header-icons">
								<a onclick="searchModal()"><span class="header-icons"><img class="header-icons" src="images/search.svg" alt="Search"></span><span><p class="header-icons">Search</p></span></a>
							</li>
							<li class="nav-item header-icons">
								<a href="ShadowGroup.php"><span class="header-icons"><img class="header-icons" src="images/signIn.svg" alt="Sign In"></span><span><p class="header-icons">Sign In</p></span></a>	
							</li>
							<li class="nav-item header-icons">
								<a href="#"><span class="header-icons"><img class="header-icons" src="images/shoppingCart.svg" alt="Basket"></span><span><p class="header-icons">Basket</p></span></a>
							</li>
						</ul>
						<!-- script moved to custom.js -->
						<div class="modal fade search-modal show" id="searchModal" role="dialog" style="display: none;">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header"></div>
									<div class="modal-body">
										<div class="header-search-desktop-container">
											<div class="header-search">
												<form role="search" action="search.php" method="get" name="simpleSearch" class="mainSearchForm" novalidate="novalidate">
													
													<fieldset>
														<legend class="visually-hidden">Search Catalog</legend>
														<label class="visually-hidden" for="q" id="simplesearch-product">Search</label>
														<input class="simple-search valid" id="q" name="q" value="" autocorrect="on" aria-labelledby="simplesearch-product" spellcheck="true" placeholder="SEARCH" autofocus="" autocomplete="off" aria-invalid="false" type="text">
														<input class="searchSubmitBtn search-submit btn-primary" value="search" type="submit">
													</fieldset>
												</form>
												
												<div id="search-suggestions" style="display: none;"></div>
											</div>
										</div>
										<div class="header-search-tablet-container"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col-2"></div>
					<div class="col-10">
						
						<!-- Script moved to custom.js -->

						<nav class="navbar navbar-expand-lg navbar-light topNav">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbar">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
										<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item dropdown"> 
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Road</a>
										<div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown1" id="roadModal">
											<div class="row">
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Cannondale</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse Alloy</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">System Six</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Super Six EVO</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD12</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD Optimo</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Topstone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Slate</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SE Collection</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperX</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAADX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperSlice</a></li>
															</ul>
														</li>														
													</ul>
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Specialized</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Roubaix</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Ruby</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Dolce</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Venge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Tarmac</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Allez</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Diverge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">AWOL</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Sequoia</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CruX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Shiv</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Trek</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Domane</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Madone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Émonda</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Checkpoint</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Boone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Crockett</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Speed Concept</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<span><img src="./images/tour_de_france.jpg" alt="Tour de France"></span>
												</div>
											</div>
										</div>
									</li>
			        				    <li class="nav-item dropdown"> 
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mountain</a> <!--
										<div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown1" id="roadModal">
											<div class="row">
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Cannondale</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse Alloy</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">System Six</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Super Six EVO</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD12</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD Optimo</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Topstone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Slate</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SE Collection</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperX</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAADX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperSlice</a></li>
															</ul>
														</li>														
													</ul>
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Specialized</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Roubaix</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Ruby</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Dolce</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Venge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Tarmac</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Allez</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Diverge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">AWOL</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Sequoia</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CruX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Shiv</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Trek</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Domane</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Madone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Émonda</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Checkpoint</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Boone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Crockett</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Speed Concept</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<img src="./images/tour_de_france.jpg" alt="Tour de France">
												</div>
											</div>
										</div>
									</li> -->
									<li class="nav-item dropdown"> 
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Urban</a> <!--
										<div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown1" id="roadModal">
											<div class="row">
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Cannondale</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse Alloy</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">System Six</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Super Six EVO</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD12</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD Optimo</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Topstone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Slate</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SE Collection</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperX</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAADX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperSlice</a></li>
															</ul>
														</li>														
													</ul>
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Specialized</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Roubaix</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Ruby</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Dolce</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Venge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Tarmac</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Allez</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Diverge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">AWOL</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Sequoia</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CruX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Shiv</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Trek</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Domane</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Madone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Émonda</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Checkpoint</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Boone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Crockett</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Speed Concept</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<img src="/images/tour_de_france.jpg" alt="Tour de France">
												</div>
											</div>
										</div>
									</li> -->
									<li class="nav-item dropdown"> 
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electric</a> <!--
										<div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown1" id="roadModal">
											<div class="row">
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Cannondale</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse Alloy</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">System Six</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Super Six EVO</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD12</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD Optimo</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Topstone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Slate</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SE Collection</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperX</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAADX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperSlice</a></li>
															</ul>
														</li>														
													</ul>
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Specialized</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Roubaix</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Ruby</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Dolce</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Venge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Tarmac</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Allez</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Diverge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">AWOL</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Sequoia</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CruX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Shiv</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Trek</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Domane</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Madone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Émonda</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Checkpoint</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Boone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Crockett</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Speed Concept</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<img src="/images/tour_de_france.jpg" alt="Tour de France">
												</div>
											</div>
										</div>
									</li> -->
									<li class="nav-item dropdown"> 
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Women's</a> <!--
										<div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown1" id="roadModal">
											<div class="row">
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Cannondale</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse Alloy</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">System Six</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Super Six EVO</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD12</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD Optimo</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Topstone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Slate</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SE Collection</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperX</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAADX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperSlice</a></li>
															</ul>
														</li>														
													</ul>
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Specialized</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Roubaix</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Ruby</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Dolce</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Venge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Tarmac</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Allez</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Diverge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">AWOL</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Sequoia</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CruX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Shiv</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Trek</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Domane</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Madone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Émonda</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Checkpoint</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Boone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Crockett</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Speed Concept</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<img src="/images/tour_de_france.jpg" alt="Tour de France">
												</div>
											</div>
										</div>
									</li> -->
									<li class="nav-item dropdown"> 
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kid's</a> <!--
										<div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown1" id="roadModal">
											<div class="row">
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Cannondale</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse Alloy</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">System Six</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Super Six EVO</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD12</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD Optimo</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Topstone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Slate</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SE Collection</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperX</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAADX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperSlice</a></li>
															</ul>
														</li>														
													</ul>
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Specialized</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Roubaix</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Ruby</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Dolce</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Venge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Tarmac</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Allez</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Diverge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">AWOL</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Sequoia</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CruX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Shiv</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Trek</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Domane</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Madone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Émonda</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Checkpoint</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Boone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Crockett</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Speed Concept</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<img src="/images/tour_de_france.jpg" alt="Tour de France">
												</div>
											</div>
										</div>
									</li> -->
									<li class="nav-item dropdown"> 
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GEAR</a> <!--
										<div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown1" id="roadModal">
											<div class="row">
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Cannondale</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse Alloy</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">System Six</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Super Six EVO</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD12</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD Optimo</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Topstone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Slate</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SE Collection</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperX</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAADX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperSlice</a></li>
															</ul>
														</li>														
													</ul>
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Specialized</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Roubaix</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Ruby</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Dolce</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Venge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Tarmac</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Allez</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Diverge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">AWOL</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Sequoia</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CruX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Shiv</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Trek</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Domane</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Madone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Émonda</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Checkpoint</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Boone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Crockett</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Speed Concept</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<img src="./images/tour_de_france.jpg" alt="Tour de France">
												</div>
											</div>
										</div>
									</li> -->
									<li class="nav-item dropdown"> 
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parts</a> <!--
										<div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown1" id="roadModal">
											<div class="row">
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Cannondale</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Synapse Alloy</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">System Six</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Super Six EVO</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD12</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAAD Optimo</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Topstone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Slate</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SE Collection</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperX</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CAADX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">SuperSlice</a></li>
															</ul>
														</li>														
													</ul>
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Specialized</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Roubaix</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Ruby</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Dolce</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Venge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Tarmac</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Allez</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Diverge</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">AWOL</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Sequoia</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">CruX</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Shiv</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<h2 class="dropdown-title"><a href="#" class="dropdown-title">Trek</a></h2>
													<ul>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Endurance</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Domane</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Elite</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Madone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Émonda</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Gravel/All-Road</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Checkpoint</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">Cyclocross</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Boone</a></li>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Crockett</a></li>
															</ul>
														</li>
														<li class="dropdown-subheader"><a href="#" class="dropdown-subheader">TT and Tri</a>
															<ul>
																<li class="dropdown-item1"><a href="#" class="dropdown-item1">Speed Concept</a></li>
															</ul>
														</li>														
													</ul>													
												</div>
												<div class="col-3">
													<img src="./images/tour_de_france.jpg" alt="Tour de France">
												</div>
											</div>
										</div>
									</li> -->
								</ul>
							</div>
						</nav>
					</div>
                    <div class="col-2"></div>
				</div>
				<hr>
			</div>
		</header>