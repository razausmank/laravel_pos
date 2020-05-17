<div class="card card-custom gutter-b">
	<div class="card-header">
		<div class="card-title">
			<h3 class="card-label">
				{{ $attributes['title'] }}
				<small>{{ $attributes['subtitle'] }}</small>
			</h3>
		</div>
	</div>
	<div class="card-body">
		{{ $slot }}
	</div>
</div>
