<nav class="nav flex-column">
	<li class="nav-item dropdown">
		<a class="nav-link " href="#">{{ __('Menu') }}</a>
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('Post') }}</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="{{ route('post.create')}}">{{ __('Add') }}</a>
				<a class="dropdown-item" href="{{ route('post.show')}}">{{ __('List') }}</a>
			</div>	
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('Category') }}</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">{{ __('Add') }}</a>
				<a class="dropdown-item" href="#">{{ __('List') }}</a>
			</div>		
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('User') }}</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">{{ __('Add') }}</a>
				<a class="dropdown-item" href="#">{{ __('List') }}</a>
			</div>
</nav>
