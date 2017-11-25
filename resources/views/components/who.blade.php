@if(Auth::guard('web')->check() )

	<p class="lead text-success">Des <strong>Étudiants</strong> sont Connectés </p>

	@else

	<p class="lead text-danger">Aucun <strong>Étudiant</strong> Connecté </p>

@endif

@if(Auth::guard('admin')->check() )

	<p class="lead text-success"><strong>Admin</strong> Connecté 
		</p>

	@else

	<p class="lead text-danger">Aucun <strong>Admin</strong> Connecté  </p>

@endif
@if(Auth::guard('admin_ecole')->check() )

	<p class="lead text-success">Des <strong>Ecoles</strong> sont Connectés </p>

	@else

	<p class="lead text-danger">Aucune <strong>Ecoles</strong> est Connectée</p>

@endif