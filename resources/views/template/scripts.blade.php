<script src="{{ asset('angular/angular.js') }}"></script>
<script src="{{ asset('angular/angular-animate.js')}}"></script>
<script src="{{ asset('angular/angular-cookies.js')}}"></script>
<script src="{{ minify('js/js/utils.js') }}" defer></script>
<script src="{{ minify('js/js/toast.js') }}"></script>

<script>
@if ($errors->any())
	@foreach ($errors->all() as $error)
	document.addEventListener('DOMContentLoaded', function () {
	   Toastify({
		text: '{{ $error }}',
		duration: 3000,
		style: {
			  background: 'red'
		  }
	  }).showToast(); 
	});
	@endforeach
@endif
@session('success')
	@foreach (session()->get('success') as $hey)
	  document.addEventListener('DOMContentLoaded', function () {
		 Toastify({
		  text: '{{ $hey }}',
		  duration: 3000
		}).showToast();
	  });
	@endforeach 
@endsession
</script>