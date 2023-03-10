<# 
This template uses includes for elements that might be used also in other templates
such as the header, navbar and footer markup. 
#>
<div class="wrapper">
<@ elements/header.php @>
<@ elements/navbar.php @>

		<@ set { "featured": @{ imageFeatured_01 }} @>
		<@ set { "gif": @{checkboxIsGif | def('false')} } @>
		<@ set { "isFeatured": @{ checkboxIsFeatured | def("false")} } @>
	<div class="project-page container is-widescreen">
		<div class="columns section is-desktop">
			<div class="column is-3-desktop">
				<section class="page-header">
					<h1 class="title">@{ title }</h1>
					<div class="content">
						@{ textDescription | markdown }
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