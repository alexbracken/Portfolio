<# 
This template uses includes for elements that might be used also in other templates
such as the header, navbar and footer markup. 
#>
<div class="wrapper">
<@ elements/header.php @>
<@ elements/navbar.php @>

	<@ set { "featured": @{ imageFeatured_01 }, @{ imageFeatured_02 }, @{ imageFeatured_03 }}
		{ "isFeatured": @{ checkboxIsFeatured | def("false")} } @>
	<div class="project-page container">
		<div class="columns">
			<div class="column is-3">
				<section class="page-header">
					<div class="am-block">
						<h1 class="title">@{ title }</h1>
						<div class="content">
							@{ textDescription | markdown }
						</div>
					</div>
				</section>
			</div>
			<div class="column">
				<section>
					<div class="am-block content">
						@{ +main }
					</div>
				</section>
			</div>
		</div>
<@ elements/footer.php @>