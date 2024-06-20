<details class="group cursor-pointer mb-5">
	<summary
		class="flex items-center justify-between font-medium marker:content-none">
			<span class="flex items-center gap-2">
			<svg width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
			  <path fill="#000000" fill-rule="evenodd" d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z"/>
			</svg>
			<span>
				Sommaire
			</span>
		</span>
		<svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
			width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
			<path fill-rule="evenodd"
				d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
			</path>
		</svg>
	</summary>
	  <ol class="ml-4 mt-5 list-decimal">
	  @foreach (json_decode($all->sommaire) as $sommaire)
		<li> {{ $sommaire }} </li>
	  @endforeach
	  </ol>
</details>