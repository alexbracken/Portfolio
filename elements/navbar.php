<nav class="navbar is-spaced is-transparent" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<div class="navbar-item">
			<a href="/">
				<span>Alex Bracken</span>
			</a>
		</div>
		<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
		<span aria-hidden="true"></span>
		<span aria-hidden="true"></span>
		<span aria-hidden="true"></span>
    	</a>
	</div>
	<div class="navbar-menu" id="navMenu">
		<div class="navbar-end">
		<@ newPagelist {
			type: 'children',
			context: '/',
			match: '{":level": "/1/"}'
		} @>
		<@ foreach in Pagelist @>
			<a href="@{ url }" class="navbar-item link">@{ title }</a>
		<@ end @>
		</div>
</nav>