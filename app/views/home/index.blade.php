@extends('layouts.main')

@section('content')

	<table class="table table-striped">
			
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Video</th>
				<th>Usuário</th>
			</tr>

		</thead>

		<tbody>
			
			@forelse($videos as $video)

				<tr>
					
					<td>{{ $video->id }}</td>
					<td>{{ $video->link }}</td>
					<td>{{ $video->user_id }}</td>

				</tr>

			@empty

				<tr>
					<td colspan="3">Nenhum Vídeo Cadastrado</td>
				</tr>

			@endforelse

		</tbody>

	</table>

@stop