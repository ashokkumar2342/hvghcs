<option selected disabled>Select CHC List</option> 
@foreach ($CHCLists as $CHCList)
	<option value="{{ $CHCList->id }}">{{ $CHCList->code }}-{{ $CHCList->name_e }}</option> 
@endforeach