				<!--Left Sidebar-->
				<div class="mdl-layout__drawer">
					<div class="nicescroll-bar">
						<div class="drawer-profile-wrap">
							<div class="candidate-img-drawer mt-25 mb-20"><?php if(isset($_SESSION["cover"]))?><img alt="" src="../<?php { echo $_SESSION["cover"];?>" style="height: 130px;width:130px;"><?php }?></div>
							<span class="candidate-name block mb-10 text-center">
	<?php 
       if(isset($_SESSION["name"])){
     echo $_SESSION["name"];

       }?>  
       
       </span>
							<ul class="social-icons  mb-30">
								<li>
									<a class="facebook-link" href="#">
										<i id="tt11" class="zmdi zmdi-facebook"></i>
										<div class="mdl-tooltip" data-mdl-for="tt11">
											facebook
										</div>
									</a>
								</li>
								<li>
									<a class="twitter-link" href="#">
										<i id="tt12" class="zmdi zmdi-twitter"></i>
										<div class="mdl-tooltip" data-mdl-for="tt12">
											twitter
										</div>
									</a>
								</li>
								<li>
									<a class="linkedin-link" href="#">
										<i id="tt13" class="zmdi zmdi-linkedin"></i>
										<div class="mdl-tooltip" data-mdl-for="tt13">
											linkedin
										</div>
									</a>
								</li>
								<li>
									<a class="dribbble-link" href="#">
										<i id="tt14" class="zmdi zmdi-dribbble"></i>
										<div class="mdl-tooltip" data-mdl-for="tt14">
											dribbble
										</div>
									</a>
								</li>
								<li>
									<a class="instagram-link" href="#">
										<i id="tt15" class="zmdi zmdi-instagram"></i>
										<div class="mdl-tooltip" data-mdl-for="tt15">
											instagram
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="mdl-scroll-spy-2">
							<ul class="mdl-navigation">
								<li>
									<a class="mdl-navigation__link border-top-sep" data-scroll href="#body">
										<i class="zmdi zmdi-border-color pr-15"></i>
										<span class="font-capitalize">about</span>
									</a>
								</li>	
								<li>
									<a class="mdl-navigation__link border-top-sep" data-scroll href="#skills_sec">
										<i class="zmdi zmdi-cutlery pr-15"></i>
										<span class="font-capitalize">skills</span>
									</a>
								</li>
								<li>
									<a class="mdl-navigation__link border-top-sep" data-scroll href="#portfolio_sec">
										<i class="zmdi zmdi-case pr-15"></i>
										<span class="font-capitalize">portfolio</span>
									</a>
								</li>	
								<li>
									<a class="mdl-navigation__link border-top-sep" data-scroll href="#experience_sec">
										<i class="zmdi zmdi-shield-check pr-15"></i>
										<span class="font-capitalize">experience</span>
									</a>
								</li>	
								<li>
									<a class="mdl-navigation__link border-top-sep" data-scroll href="#education_sec">
										<i class="zmdi zmdi-library pr-15"></i>
										<span class="font-capitalize">education</span>
									</a>
								</li>	
								
								<li>
									<a class="mdl-navigation__link border-top-sep" href="javascript:void(0);" data-toggle="collapse" data-target="#blog_dr">
										<i class="zmdi zmdi-tag-more pr-15"></i>
										<span class="font-capitalize">blog</span>
									</a>
									<ul id="blog_dr" class="collapse collapse-level-1">
										<li><a class="mdl-navigation__link border-top-sep" href="blog-list.html">Blog List</a></li>
										<li><a class="mdl-navigation__link border-top-sep" href="image-blog-post.html">Image Blog Post</a></li>
										<li><a class="mdl-navigation__link border-top-sep" href="gallery-blog-post.html">Gallery Blog Post</a></li>
										<li><a class="mdl-navigation__link border-top-sep" href="youtube-blog-post.html">Youtube Blog Post</a></li>
										<li><a class="mdl-navigation__link border-top-sep" href="vimeo-blog-post.html">Vimeo Blog Post</a></li>
										<li><a class="mdl-navigation__link border-top-sep" href="audio-blog-post.html">Audio Blog Post</a></li>
									</ul>
								</li>
								
								<li>
									<a class="mdl-navigation__link border-top-sep" data-scroll href="#references_sec">
										<i class="zmdi zmdi-bookmark pr-15"></i>
										<span class="font-capitalize">references</span>
									</a>
								</li>	
								
								<li>
									<a class="mdl-navigation__link border-top-sep border-bottom-sep" 	data-scroll  href="#contact_sec">
										<i class="zmdi zmdi-email pr-15"></i>
										<span class="font-capitalize">contact</span>
									</a>
								</li>	
							</ul>
						</div>
						<div class="drawer-footer mt-50 mb-30 text-center">
							<p class="font-12 mt-10">Hencework &copy; 2017.</p>
						</div>
					</div>
				</div>
				<!--/Left Sidebar-->
				