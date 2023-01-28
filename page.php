<# 
This template uses includes for elements that might be used also in other templates
such as the header, navbar and footer markup. 
#>
<@ elements/header.php @>
<@ elements/navbar.php @>

	<@ set { "featured": @{ imageFeatured_01 }, @{ imageFeatured_02 }, @{ imageFeatured_03 }}
		{ "isFeatured": @{ checkboxIsFeatured | def("false")} } @>
	<div class="project-page container">
		<section class="page-header">
			<div class="am-block">
				<h1 class="title">@{ title }</h1>
				<div class="content">
					@{ textProjectDescription | markdown}
				</div>
			</div>
		</section>
		<section>
			<div class="am-block content">
				@{ +main }
			</div>
		</section>
<@ elements/footer.php @>