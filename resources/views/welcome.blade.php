<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
</head>

<body>
	<div class="max-w-5xl mx-auto py-8">
		<h1 class="text-5xl">Laravel Paginate</h1>

		<ul class="py-4">
			@foreach ($users as $user)
				<li class="py-1 border-b">{{ $user->name }}</li>
			@endforeach
		</ul>

		{{ $users->links() }}
	</div>
</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>
