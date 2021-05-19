<option selected disabled>Select PHC ID</option> 
@foreach ($PHCLists as $PHCList)
	<option value="{{ $PHCList->id }}">{{ $PHCList->code }}-{{ $PHCList->name_e }}</option> 
@endforeach