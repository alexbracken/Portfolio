<nav class="navbar is-spaced" role="navigation" data-target="navMenu" aria-label="main navigation">
	<div class="navbar-brand">
		<div class="navbar-item">
			<a href="/">
				<span>Alex Bracken</span>
			</a>
		</div>
		<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
		<span aria-hidden="true"></span>
		<span aria-hidden="true"></span>
		<span aria-hidden="true"></span>
    	</a>
	</div>
	<div class="navbar-menu">
		<div class="navbar-end">
		<@ newPagelist {
			type: 'children',
			context: '/',
			match: '{":level": "/1/"}'
		} @>
		<@ foreach in Pagelist @>
			<a href="@{ url }" class="navbar-item">@{ title }</a>
		<@ end @>
		</div>
</nav>