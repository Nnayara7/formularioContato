@forelse($formulario as $form)
	<p>Form:</p>br>{{$form}}</p>
@empty
	<p>Nenhum formulário cadastrado</p>
@endFforelse