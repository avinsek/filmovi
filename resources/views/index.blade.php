@extends('master')

@section('content')

<!DOCTYPE html>
<html lang="en">
 
    <body>
 Ovo su filmovi:
   
		<table class="table table-striped task-table">
			
				<tbody>
					@foreach($films as $film)
						<tr>
							<td>
								<div>{{	$film->name}}</div>
							</td>
							<td>
								<div>{{	$film->trajanje}}</div>
							</td>
							
							<td>
								<div>{{	$film->year}}</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			
			</table>
	 </body>
</html>
@endsection
